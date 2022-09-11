<?php

namespace JesseGall\LightspeedSDK\Resources;

class TaxOverride extends Resource
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
        return $this->mapTo('tax', Tax::class);
    }

    /**
     * @param Tax $tax
     * @return $this
     */
    public function setTax(Tax $tax): static
    {
        $this->set('tax', $tax);

        return $this;
    }

}
