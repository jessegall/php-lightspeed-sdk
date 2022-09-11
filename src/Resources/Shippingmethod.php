<?php

namespace JesseGall\LightspeedSDK\Resources;

class Shippingmethod extends Resource
{


    /**
     * @return bool
     */
    public function getId(): bool
    {
        return $this->get('id');
    }

    /**
     * @param bool $id
     * @return $this
     */
    public function setId(bool $id): static
    {
        return $this->set('id', $id);
    }

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
     * @return bool
     */
    public function getIsBackofficeOnly(): bool
    {
        return $this->get('isBackofficeOnly');
    }

    /**
     * @param bool $isBackofficeOnly
     * @return $this
     */
    public function setIsBackofficeOnly(bool $isBackofficeOnly): static
    {
        return $this->set('isBackofficeOnly', $isBackofficeOnly);
    }

    /**
     * @return int
     */
    public function getSortOrder(): int
    {
        return $this->get('sortOrder');
    }

    /**
     * @param int $sortOrder
     * @return $this
     */
    public function setSortOrder(int $sortOrder): static
    {
        return $this->set('sortOrder', $sortOrder);
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
     * @return int
     */
    public function getPaymentPriceExcl(): int
    {
        return $this->get('paymentPriceExcl');
    }

    /**
     * @param int $paymentPriceExcl
     * @return $this
     */
    public function setPaymentPriceExcl(int $paymentPriceExcl): static
    {
        return $this->set('paymentPriceExcl', $paymentPriceExcl);
    }

    /**
     * @return int
     */
    public function getPaymentPriceIncl(): int
    {
        return $this->get('paymentPriceIncl');
    }

    /**
     * @param int $paymentPriceIncl
     * @return $this
     */
    public function setPaymentPriceIncl(int $paymentPriceIncl): static
    {
        return $this->set('paymentPriceIncl', $paymentPriceIncl);
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

    /**
     * @return Country[]
     */
    public function getCountries(): array
    {
        return $this->mapTo('countries', Country::class);
    }

    /**
     * @param Country[] $countries
     * @return $this
     */
    public function setCountries(array $countries): static
    {
        $this->set('countries', $countries);

        return $this;
    }

    /**
     * @return array
     */
    public function getResource(): array
    {
        return $this->get('resource');
    }

    /**
     * @param array $resource
     * @return $this
     */
    public function setResource(array $resource): static
    {
        return $this->set('resource', $resource);
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->get('url');
    }

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl(string $url): static
    {
        return $this->set('url', $url);
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->get('link');
    }

    /**
     * @param string $link
     * @return $this
     */
    public function setLink(string $link): static
    {
        return $this->set('link', $link);
    }

    /**
     * @return Value[]
     */
    public function getValues(): array
    {
        return $this->mapTo('values', Value::class);
    }

    /**
     * @param Value[] $values
     * @return $this
     */
    public function setValues(array $values): static
    {
        $this->set('values', $values);

        return $this;
    }

}
