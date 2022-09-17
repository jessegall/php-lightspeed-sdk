<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * Tax
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/tax
 */
class Tax extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/taxes';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'tax';


    /**
     * @return bool|null
     */
    public function getIsDefault(): ?bool
    {
        return $this->get('isDefault');
    }

    /**
     * @param bool|null $isDefault
     * @return $this
     */
    public function setIsDefault(bool $isDefault = null): static
    {
        return $this->set('isDefault', $isDefault);
    }

    /**
     * @return float|null
     */
    public function getRate(): ?float
    {
        return $this->get('rate');
    }

    /**
     * @param float|null $rate
     * @return $this
     */
    public function setRate(float $rate = null): static
    {
        return $this->set('rate', $rate);
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->get('title');
    }

    /**
     * @param string|null $title
     * @return $this
     */
    public function setTitle(string $title = null): static
    {
        return $this->set('title', $title);
    }

}
