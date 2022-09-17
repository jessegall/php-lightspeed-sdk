<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Shippingmethod
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/shippingmethod
 */
class Shippingmethod extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/shippingmethods';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'shippingmethod';


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
     * @return bool|null
     */
    public function getIsBackofficeOnly(): ?bool
    {
        return $this->get('isBackofficeOnly');
    }

    /**
     * @param bool|null $isBackofficeOnly
     * @return $this
     */
    public function setIsBackofficeOnly(bool $isBackofficeOnly = null): static
    {
        return $this->set('isBackofficeOnly', $isBackofficeOnly);
    }

    /**
     * @return int|null
     */
    public function getSortOrder(): ?int
    {
        return $this->get('sortOrder');
    }

    /**
     * @param int|null $sortOrder
     * @return $this
     */
    public function setSortOrder(int $sortOrder = null): static
    {
        return $this->set('sortOrder', $sortOrder);
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
     * @return int|null
     */
    public function getPaymentPriceExcl(): ?int
    {
        return $this->get('paymentPriceExcl');
    }

    /**
     * @param int|null $paymentPriceExcl
     * @return $this
     */
    public function setPaymentPriceExcl(int $paymentPriceExcl = null): static
    {
        return $this->set('paymentPriceExcl', $paymentPriceExcl);
    }

    /**
     * @return int|null
     */
    public function getPaymentPriceIncl(): ?int
    {
        return $this->get('paymentPriceIncl');
    }

    /**
     * @param int|null $paymentPriceIncl
     * @return $this
     */
    public function setPaymentPriceIncl(int $paymentPriceIncl = null): static
    {
        return $this->set('paymentPriceIncl', $paymentPriceIncl);
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

    /**
     * @return ResourceCollection<ShippingmethodCountry>|null
     */
    public function getCountries(): ?ResourceCollection
    {
        return $this->relation('countries.resource.embedded', ShippingmethodCountry::class, true);
    }


    /**
     * @param ResourceCollection<ShippingmethodCountry>|null $countries
     * @return $this
     */
    public function setCountries(ResourceCollection $countries = null): static
    {
        $this->set('countries.resource.embedded', $countries);

        return $this;
    }

    /**
     * @return ResourceCollection<ShippingmethodValue>|null
     */
    public function getValues(): ?ResourceCollection
    {
        return $this->relation('values.resource.embedded', ShippingmethodValue::class, true);
    }


    /**
     * @param ResourceCollection<ShippingmethodValue>|null $values
     * @return $this
     */
    public function setValues(ResourceCollection $values = null): static
    {
        $this->set('values.resource.embedded', $values);

        return $this;
    }

}
