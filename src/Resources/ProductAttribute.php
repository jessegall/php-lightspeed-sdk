<?php

namespace JesseGall\LightspeedSDK\Resources;

class ProductAttribute extends Resource
{

    protected string $url = '/products/{id}/attributes';


    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->get('value');
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setValue(string $value): static
    {
        return $this->set('value', $value);
    }

    /**
     * @return array
     */
    public function getAttribute(): array
    {
        return $this->get('attribute');
    }

    /**
     * @param array $attribute
     * @return $this
     */
    public function setAttribute(array $attribute): static
    {
        return $this->set('attribute', $attribute);
    }

}
