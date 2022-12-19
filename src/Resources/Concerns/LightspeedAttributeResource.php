<?php

namespace JesseGall\LightspeedSDK\Resources\Concerns;

use JesseGall\LightspeedSDK\Resources\Attribute;

trait LightspeedAttributeResource
{

    /**
     * @return int|null
     */
    public function getAttributeId(): ?int
    {
        return $this->get('attribute.resource.id');
    }


    /**
     * @return array|null
     */
    public function getAttribute(): ?Attribute
    {
        return $this->relation('attribute', Attribute::class);
    }

    /**
     * @param Attribute|null $attribute
     * @return $this
     */
    public function setAttribute(Attribute $attribute = null): static
    {
        return $this->set('attribute', $attribute);
    }

}