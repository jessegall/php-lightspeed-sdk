<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * TaxOverride
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/taxoverride
 */
class TaxOverride extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/taxes/{id}/overrides';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'taxOverride';


    /**
     * @return int|null
     */
    public function getRate(): ?int
    {
        return $this->get('rate');
    }

    /**
     * @param int|null $rate
     * @return $this
     */
    public function setRate(int $rate = null): static
    {
        return $this->set('rate', $rate);
    }

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

    /**
     * @return Tax|null
     */
    public function getTax(): ?Tax
    {
        return $this->relation('tax.resource.embedded', Tax::class);
    }


    /**
     * @return int|null
     */
    public function getTaxId(): ?int
    {
        return $this->get('tax.resource.id');
    }

    /**
     * @param Tax|null $tax
     * @return $this
     */
    public function setTax(Tax $tax = null): static
    {
        $this->set('tax.resource.embedded', $tax);

        return $this;
    }

}
