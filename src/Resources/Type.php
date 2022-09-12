<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class Type extends Resource
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
     * @return ResourceCollection<Attribute>
     */
    public function getAttributes(): ResourceCollection
    {
        return $this->relation('attributes.resource.embedded', Attribute::class, true);
    }


    /**
     * @param ResourceCollection<Attribute> $attributes
     * @return $this
     */
    public function setAttributes(ResourceCollection $attributes): static
    {
        $this->set('attributes', $attributes);

        return $this;
    }

}
