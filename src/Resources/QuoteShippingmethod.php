<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * QuoteShippingmethod
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/quoteshippingmethod
 */
class QuoteShippingmethod extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/quotes/{id}/shippingmethods';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'quoteShippingmethod';


    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->get('type');
    }

    /**
     * @param string|null $type
     * @return $this
     */
    public function setType(string $type = null): static
    {
        return $this->set('type', $type);
    }

    /**
     * @return int|null
     */
    public function getFreeAbove(): ?int
    {
        return $this->get('freeAbove');
    }

    /**
     * @param int|null $freeAbove
     * @return $this
     */
    public function setFreeAbove(int $freeAbove = null): static
    {
        return $this->set('freeAbove', $freeAbove);
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

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->get('description');
    }

    /**
     * @param string|null $description
     * @return $this
     */
    public function setDescription(string $description = null): static
    {
        return $this->set('description', $description);
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

    /**
     * @return bool|null
     */
    public function getTax(): ?bool
    {
        return $this->get('tax');
    }

    /**
     * @param bool|null $tax
     * @return $this
     */
    public function setTax(bool $tax = null): static
    {
        return $this->set('tax', $tax);
    }

}
