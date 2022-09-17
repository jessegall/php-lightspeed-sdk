<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Type
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/type
 */
class Type extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/types';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'type';


    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->get('title');
    }

    /**
     * @param string|null $title
     * @return $this
     */
    public function setTitle(string $title = null): static
    {
        return $this->set('title', $title);
    }

    /**
     * @return ResourceCollection<TypesAttribute>|null
     */
    public function getAttributes(): ?ResourceCollection
    {
        return $this->relation('attributes.resource.embedded', TypesAttribute::class, true);
    }


    /**
     * @param ResourceCollection<TypesAttribute>|null $attributes
     * @return $this
     */
    public function setAttributes(ResourceCollection $attributes = null): static
    {
        $this->set('attributes.resource.embedded', $attributes);

        return $this;
    }

}
