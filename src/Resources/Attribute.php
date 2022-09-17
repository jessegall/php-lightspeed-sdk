<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Attribute
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/attribute
 */
class Attribute extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/attributes';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'attribute';


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
     * @return string|null
     */
    public function getDefaultValue(): ?string
    {
        return $this->get('defaultValue');
    }

    /**
     * @param string|null $defaultValue
     * @return $this
     */
    public function setDefaultValue(string $defaultValue = null): static
    {
        return $this->set('defaultValue', $defaultValue);
    }

    /**
     * @return ResourceCollection<TypesAttribute>|null
     */
    public function getTypes(): ?ResourceCollection
    {
        return $this->relation('types.resource.embedded', TypesAttribute::class, true);
    }


    /**
     * @param ResourceCollection<TypesAttribute>|null $types
     * @return $this
     */
    public function setTypes(ResourceCollection $types = null): static
    {
        $this->set('types.resource.embedded', $types);

        return $this;
    }

}
