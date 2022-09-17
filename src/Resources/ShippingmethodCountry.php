<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * ShippingmethodCountry
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/shippingmethodcountry
 */
class ShippingmethodCountry extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/shippingmethods/{id}/countries';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'shippingmethodCountry';


    /**
     * @return array|null
     */
    public function getCountry(): ?array
    {
        return $this->get('country');
    }

    /**
     * @param array|null $country
     * @return $this
     */
    public function setCountry(array $country = null): static
    {
        return $this->set('country', $country);
    }

}
