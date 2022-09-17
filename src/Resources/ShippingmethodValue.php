<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * ShippingmethodValue
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/shippingmethodvalue
 */
class ShippingmethodValue extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/shippingmethods/{id}/values';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'shippingmethodValue';


    /**
     * @return int|null
     */
    public function getWeightMinimum(): ?int
    {
        return $this->get('weightMinimum');
    }

    /**
     * @param int|null $weightMinimum
     * @return $this
     */
    public function setWeightMinimum(int $weightMinimum = null): static
    {
        return $this->set('weightMinimum', $weightMinimum);
    }

    /**
     * @return int|null
     */
    public function getWeightMaximim(): ?int
    {
        return $this->get('weightMaximim');
    }

    /**
     * @param int|null $weightMaximim
     * @return $this
     */
    public function setWeightMaximim(int $weightMaximim = null): static
    {
        return $this->set('weightMaximim', $weightMaximim);
    }

    /**
     * @return float|null
     */
    public function getPriceExcl(): ?float
    {
        return $this->get('priceExcl');
    }

    /**
     * @param float|null $priceExcl
     * @return $this
     */
    public function setPriceExcl(float $priceExcl = null): static
    {
        return $this->set('priceExcl', $priceExcl);
    }

    /**
     * @return float|null
     */
    public function getPriceIncl(): ?float
    {
        return $this->get('priceIncl');
    }

    /**
     * @param float|null $priceIncl
     * @return $this
     */
    public function setPriceIncl(float $priceIncl = null): static
    {
        return $this->set('priceIncl', $priceIncl);
    }

}
