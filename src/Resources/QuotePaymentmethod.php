<?php

namespace JesseGall\LightspeedSDK\Resources;

class QuotePaymentmethod extends Resource
{

    protected string $apiUrl = '/quotes/{id}/paymentmethods';

    protected string $handle = 'quotePaymentmethod';

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
     * @return int
     */
    public function getPriceExcl(): int
    {
        return $this->get('priceExcl');
    }

    /**
     * @param int $priceExcl
     * @return $this
     */
    public function setPriceExcl(int $priceExcl): static
    {
        return $this->set('priceExcl', $priceExcl);
    }

    /**
     * @return int
     */
    public function getPriceIncl(): int
    {
        return $this->get('priceIncl');
    }

    /**
     * @param int $priceIncl
     * @return $this
     */
    public function setPriceIncl(int $priceIncl): static
    {
        return $this->set('priceIncl', $priceIncl);
    }

}
