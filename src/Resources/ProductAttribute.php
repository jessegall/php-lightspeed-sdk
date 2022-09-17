<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * ProductAttribute
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/productattribute
 */
class ProductAttribute extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/products/{id}/attributes';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'productAttribute';


    /**
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->get('value');
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setValue(string $value = null): static
    {
        return $this->set('value', $value);
    }

    /**
     * @return array|null
     */
    public function getAttribute(): ?array
    {
        return $this->get('attribute');
    }

    /**
     * @param array|null $attribute
     * @return $this
     */
    public function setAttribute(array $attribute = null): static
    {
        return $this->set('attribute', $attribute);
    }

}
