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

        generateResourceFile(name, generateResource(name, data));
    })
})();

function readFile(file) {
    try {
        return fs.readFileSync(file, 'utf8');
    } catch (err) {
        console.error(err);
    }
}

function generateResource(name, data) {
    const resource = {};

    for (const [key, value] of Object.entries(data)) {
        if (key === 'embedded') {
            continue;
        }

        resource[key] = {
            name,
            ...value,
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
                return 'relation';
            }

            return 'array';
    }
}

function generateResourceFile(resource, data) {
    const methods = Object.entries(data).map(([key, attribute]) => {
        if (key === 'id') {
            return;
        }

        let get, set = '';

        if (attribute._properties.type === 'relation') {
            const isSingle = !! attribute.resource.id;

            const url = attribute.resource.url;
            let [name, leftovers] = url.split('?');

            let resourceType = name.split('/').filter(i => isNaN(i)).map(i => ucfirst(pluralize.singular(i)));

            if (!! leftovers && resourceType.length > 1) {
                // resourceType[0] = pluralize.plural(resourceType[0])
            }

            resourceType = resourceType.join('');

            const returnType = isSingle ? resourceType : 'ResourceCollection';
            get = `
            /**
            * @return ${ isSingle ? resourceType : `ResourceCollection<${ resourceType }>` }|null
            */
            public function get${ ucfirst(key) }(): ?${ returnType } 
            {
                return $this->relation('${ key }.resource.embedded', ${ resourceType }::class ${ ! isSingle ? ', true);' : ');' } 
            }
            
            ${ ! isSingle ? '' : `
            /**
            * @return int|null
            */
            public function get${ ucfirst(key) }Id(): ?int 
            {
                return $this->get('${ key }.resource.id'); 
            }` }`

            set = `
            /**
             * @param ${ isSingle ? resourceType : `ResourceCollection<${ resourceType }>` }|null $${ key }
             * @return $this
             */
            public function set${ ucfirst(key) }(${ returnType } $${ key } = null): static 
            {
                $this->set('${ key }.resource.embedded', $${ key });
                
                return $this;
            }`
        } else {

            get = `
            /**
            * @return ${ attribute._properties.type }|null
            */
            public function get${ ucfirst(key) }(): ${ attribute._properties.type !== 'mixed' ? '?' : '' }${ attribute._properties.type }
            {
                return $this->get('${ key }');       
            }`

            set = `
            /**
             * @param ${ attribute._properties.type }|null $${ key }
             * @return $this
             */
            public function set${ ucfirst(key) }(${ attribute._properties.type } $${ key } = null): static
            {
                return $this->set('${ key }', $${ key });
            }`
        }


        return get + set;
    }).join("\n");


    let className = resource.split(/(?=[A-Z])/);
    let first = className[0];
    if (pluralize.isPlural(first)) {
        className.map(i => pluralize.singular(i));
    }
    className[0] = ucfirst(first);
    className = className.join('');

    const endpoint = resource.split(/(?=[A-Z])/).map(i => pluralize.plural(i).toLowerCase()).join('/{id}/');

    const content = getStub()
        .replaceAll('{{ class }}', className)
        .replace('{{ lightspeedResource }}', resource)
        .replace('{{ lightspeedResourceDocs }}', resource.toLowerCase())
        .replace('{{ methods }}', methods)
        .replace('{{ endpoint }}', `/${ endpoint }`);

    fs.writeFileSync(`${ __dirname }/generated/${ className }.php`, content);
}

function ucfirst(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

function getStub() {
    return readFile(`${ __dirname }/stubs/resource.stub`);
}