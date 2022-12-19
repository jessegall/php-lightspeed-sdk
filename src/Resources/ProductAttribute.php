<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\LightspeedSDK\Resources\Concerns\LightspeedAttributeResource;

/**
 * ProductAttribute
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/productattribute
 */
class ProductAttribute extends Resource
{
    use LightspeedAttributeResource;

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

}
