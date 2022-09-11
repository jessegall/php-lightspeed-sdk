<?php

namespace JesseGall\LightspeedSDK\Resources;

class TypesAttribute extends Resource
{


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->get('id');
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id): static
    {
        return $this->set('id', $id);
    }

    /**
     * @return int
     */
    public function getSortOrder(): int
    {
        return $this->get('sortOrder');
    }

    /**
     * @param int $sortOrder
     * @return $this
     */
    public function setSortOrder(int $sortOrder): static
    {
        return $this->set('sortOrder', $sortOrder);
    }

    /**
     * @return Type
     */
    public function getType(): Type
    {
        return $this->mapTo('type', Type::class);
    }

    /**
     * @param Type $type
     * @return $this
     */
    public function setType(Type $type): static
    {
        $this->set('type', $type);

        return $this;
    }

    /**
     * @return Attribute
     */
    public function getAttribute(): Attribute
    {
        return $this->mapTo('attribute', Attribute::class);
    }

    /**
     * @param Attribute $attribute
     * @return $this
     */
    public function setAttribute(Attribute $attribute): static
    {
        $this->set('attribute', $attribute);

        return $this;
    }

}
