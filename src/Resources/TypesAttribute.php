<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\LightspeedSDK\Resources\Concerns\LightspeedAttributeResource;

/**
 * TypesAttribute
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/typesattribute
 */
class TypesAttribute extends Resource
{
    use LightspeedAttributeResource;

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/types/{id}/attributes';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'typesAttribute';


    /**
     * @return int|null
     */
    public function getSortOrder(): ?int
    {
        return $this->get('sortOrder');
    }

    /**
     * @param int|null $sortOrder
     * @return $this
     */
    public function setSortOrder(int $sortOrder = null): static
    {
        return $this->set('sortOrder', $sortOrder);
    }

    /**
     * @return Type|null
     */
    public function getType(): ?Type
    {
        return $this->relation('type.resource.embedded', Type::class);
    }


    /**
     * @return int|null
     */
    public function getTypeId(): ?int
    {
        return $this->get('type.resource.id');
    }

    /**
     * @param Type|null $type
     * @return $this
     */
    public function setType(Type $type = null): static
    {
        $this->set('type.resource.embedded', $type);

        return $this;
    }

}
