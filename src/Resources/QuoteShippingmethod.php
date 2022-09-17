<?php

namespace JesseGall\LightspeedSDK\Resources;

class QuoteShippingmethod extends Resource
{

    protected string $endpoint = '/quotes/{id}/shippingmethods';

    protected string $handle = 'quoteShippingmethod';

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->get('type');
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type): static
    {
        return $this->set('type', $type);
    }

    /**
     * @return int
     */
    public function getFreeAbove(): int
    {
        return $this->get('freeAbove');
    }

    /**
     * @param int $freeAbove
     * @return $this
     */
    public function setFreeAbove(int $freeAbove): static
    {
        return $this->set('freeAbove', $freeAbove);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->get('title');
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title): static
    {
        return $this->set('title', $title);
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->get('description');
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description): static
    {
        return $this->set('description', $description);
    }

    /**
     * @return float
     */
    public function getPriceExcl(): float
    {
        return $this->get('priceExcl');
    }

    /**
     * @param float $priceExcl
     * @return $this
     */
    public function setPriceExcl(float $priceExcl): static
    {
        return $this->set('priceExcl', $priceExcl);
    }

    /**
     * @return float
     */
    public function getPriceIncl(): float
    {
        return $this->get('priceIncl');
    }

    /**
     * @param float $priceIncl
     * @return $this
     */
    public function setPriceIncl(float $priceIncl): static
    {
        return $this->set('priceIncl', $priceIncl);
    }

    /**
     * @return bool
     */
    public function getTax(): bool
    {
        return $this->get('tax');
    }

    /**
     * @param bool $tax
     * @return $this
     */
    public function setTax(bool $tax): static
    {
        return $this->set('tax', $tax);
    }

}
