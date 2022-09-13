<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class Type extends Resource
{

    protected string $url = '/types';


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
     * @return ResourceCollection<TypesAttribute>
     */
    public function getAttributes(): ResourceCollection
    {
        return $this->relation('attributes.resource.embedded', TypesAttribute::class, true);
    }


    /**
     * @param ResourceCollection<TypesAttribute> $attributes
     * @return $this
     */
    public function setAttributes(ResourceCollection $attributes): static
    {
        $this->set('attributes.resource.embedded', $attributes);

        return $this;
    }

}
