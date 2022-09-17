<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * QuotePaymentmethod
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/quotepaymentmethod
 */
class QuotePaymentmethod extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/quotes/{id}/paymentmethods';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'quotePaymentmethod';


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
     * @return int|null
     */
    public function getPriceExcl(): ?int
    {
        return $this->get('priceExcl');
    }

    /**
     * @param int|null $priceExcl
     * @return $this
     */
    public function setPriceExcl(int $priceExcl = null): static
    {
        return $this->set('priceExcl', $priceExcl);
    }

    /**
     * @return int|null
     */
    public function getPriceIncl(): ?int
    {
        return $this->get('priceIncl');
    }

    /**
     * @param int|null $priceIncl
     * @return $this
     */
    public function setPriceIncl(int $priceIncl = null): static
    {
        return $this->set('priceIncl', $priceIncl);
    }

}
