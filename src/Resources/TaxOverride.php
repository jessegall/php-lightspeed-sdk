<?php

namespace JesseGall\LightspeedSDK\Resources;

class TaxOverride extends Resource
{

    protected string $url = '/taxes/{id}/overrides';


    /**
     * @return int
     */
    public function getRate(): int
    {
        return $this->get('rate');
    }

    /**
     * @param int $rate
     * @return $this
     */
    public function setRate(int $rate): static
    {
        return $this->set('rate', $rate);
    }

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

    /**
     * @return Tax
     */
    public function getTax(): Tax
    {
        return $this->relation('tax.resource.embedded', Tax::class);
    }


    /**
     * @return int
     */
    public function getTaxId(): int
    {
        return $this->get('tax.resource.id');
    }

    /**
     * @param Tax $tax
     * @return $this
     */
    public function setTax(Tax $tax): static
    {
        $this->set('tax.resource.embedded', $tax);

        return $this;
    }

}
