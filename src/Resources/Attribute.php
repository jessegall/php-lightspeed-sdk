<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class Attribute extends Resource
{


    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->get('title');
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title): static
    {
        return $this->set('title', $title);
    }

    /**
     * @return string
     */
    public function getDefaultValue(): string
    {
        return $this->get('defaultValue');
    }

    /**
     * @param string $defaultValue
     * @return $this
     */
    public function setDefaultValue(string $defaultValue): static
    {
        return $this->set('defaultValue', $defaultValue);
    }

    /**
     * @return ResourceCollection<Type>
     */
    public function getTypes(): ResourceCollection
    {
        return $this->relation('types.resource.embedded', Type::class);
    }


    /**
     * @param ResourceCollection<Type> $types
     * @return $this
     */
    public function setTypes(ResourceCollection $types): static
    {
        $this->set('types', $types);

        return $this;
    }

}
