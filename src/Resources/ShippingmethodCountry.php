<?php

namespace JesseGall\LightspeedSDK\Resources;

class ShippingmethodCountry extends Resource
{

    protected string $apiUrl = '/shippingmethods/{id}/countries';

    protected string $handle = 'shippingmethodCountry';
    /**
     * @return array
     */
    public function getCountry(): array
    {
        return $this->get('country');
    }

    /**
     * @param array $country
     * @return $this
     */
    public function setCountry(array $country): static
    {
        return $this->set('country', $country);
    }

}
