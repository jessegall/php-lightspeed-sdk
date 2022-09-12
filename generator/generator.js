const fs = require('fs');
const pluralize = require('pluralize');

(() => {
    const [, _resource] = process.argv.find((i) => i.includes('resource='))?.split('resource=') || [];

    let resources = [];
    if (! _resource) {
        fs.readdirSync(`${ __dirname }/resources`).forEach(file => {
            resources.push(file);
        });

    } else {
        resources = [`${ _resource }.json`];
    }

    resources.forEach(i => {
        const [name, data] = Object.entries(JSON.parse(readFile(`${ __dirname }/resources/${ i }`)))[0];

        console.log(`Generating resource ${ name }`)

        if (! data) {
            console.error(`Invalid resource data ${ name }`);
            return;
        }

        generateResourceFile(name, generateResource(data));
    })
})();

function readFile(file) {
    try {
        return fs.readFileSync(file, 'utf8');
    } catch (err) {
        console.error(err);
    }
}

function generateResource(data) {
    const resource = {};

    for (const [key, value] of Object.entries(data)) {
        if (key === 'embedded') {
            continue;
        }

        resource[key] = {
            _properties: {
                name: key,
                ...generateAttribute(key, value)
            }
        };
    }

    return resource;
}

function generateAttribute(key, value) {
    return {
        type: getPhpType(value),
        optional: false,
    }
}

function getPhpType(value) {
    function isInt(n) {
        return Number(n) === n && n % 1 === 0;
    }

    if (value === null) {
        return 'mixed';
    }

    switch (typeof value) {
        case "string":
            return 'string';
        case 'number':
            return isInt(value) ? 'int' : 'float';
        case "boolean":
            return 'bool';
        case "object":
            if (!! value.resource) {
                return 'resource';
            }

            return 'array';
    }
}

function generateResourceFile(resource, data) {
    const className = ucfirst(resource);
    const methods = Object.entries(data).map(([key, value]) => {
        if (key === 'id') {
            return;
        }

        let get, set = '';

        if (value._properties.type === 'resource') {
            const isSingle = pluralize.isSingular(key);
            const resourceType = ucfirst(pluralize.singular(key));
            const returnType = isSingle ? resourceType : 'ResourceCollection';
            get = `
            /**
            * @return ${ isSingle ? resourceType : `ResourceCollection<${ resourceType }>` }
            */
            public function get${ ucfirst(key) }(): ${ returnType } 
            {
                return $this->relation('${ key }.resource.embedded', ${ resourceType }::class ${ ! isSingle ? ', true);' : ');' } 
            }
            
            ${ ! isSingle ? '' : `
            /**
            * @return int
            */
            public function get${ ucfirst(key) }Id(): int 
            {
                return $this->get('${ key }.resource.id'); 
            }` }`

            set = `
            /**
             * @param ${ isSingle ? resourceType : `ResourceCollection<${ resourceType }>` } $${ key }
             * @return $this
             */
            public function set${ ucfirst(key) }(${ returnType } $${ key }): static 
            {
                $this->set('${ key }', $${ key });
                
                return $this;
            }`
        } else {

            get = `
            /**
            * @return ${ value._properties.type }
            */
            public function get${ ucfirst(key) }(): ${ value._properties.type }
            {
                return $this->get('${ key }');       
            }`

            set = `
            /**
             * @param ${ value._properties.type } $${ key }
             * @return $this
             */
            public function set${ ucfirst(key) }(${ value._properties.type } $${ key }): static
            {
                return $this->set('${ key }', $${ key });
            }`
        }


        return get + set;
    }).join("\n");

    const content = getStub()
        .replace('{{ class }}', className)
        .replace('{{ methods }}', methods);

    fs.writeFileSync(`${ __dirname }/generated/${ className }.php`, content);
}

function ucfirst(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

function getStub() {
    return readFile(`${ __dirname }/stubs/resource.stub`);
}