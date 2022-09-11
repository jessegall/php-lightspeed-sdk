<?php

namespace JesseGall\LightspeedSDK\Resources;

class Shippingmethod extends Resource
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
        return $this->mapTo('countries.resource.embedded', Country::class);
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
     * @return Value[]
     */
    public function getValues(): array
    {
        return $this->mapTo('values.resource.embedded', Value::class);
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
