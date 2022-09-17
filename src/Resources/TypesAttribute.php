<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * TypesAttribute
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/typesattribute
 */
class TypesAttribute extends Resource
{

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

    /**
     * @return Attribute|null
     */
    public function getAttribute(): ?Attribute
    {
        return $this->relation('attribute.resource.embedded', Attribute::class);
    }


    /**
     * @return int|null
     */
    public function getAttributeId(): ?int
    {
        return $this->get('attribute.resource.id');
    }

    /**
     * @param Attribute|null $attribute
     * @return $this
     */
    public function setAttribute(Attribute $attribute = null): static
    {
        $this->set('attribute.resource.embedded', $attribute);

        return $this;
    }

}
