<?php

namespace JesseGall\LightspeedSDK\Resources;

class Discount extends Resource
{


    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->get('createdAt');
    }

    /**
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt(string $createdAt): static
    {
        return $this->set('createdAt', $createdAt);
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->get('updatedAt');
    }

    /**
     * @param string $updatedAt
     * @return $this
     */
    public function setUpdatedAt(string $updatedAt): static
    {
        return $this->set('updatedAt', $updatedAt);
    }

    /**
     * @return bool
     */
    public function getIsActive(): bool
    {
        return $this->get('isActive');
    }

    /**
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive(bool $isActive): static
    {
        return $this->set('isActive', $isActive);
    }

    /**
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->get('startDate');
    }

    /**
     * @param string $startDate
     * @return $this
     */
    public function setStartDate(string $startDate): static
    {
        return $this->set('startDate', $startDate);
    }

    /**
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->get('endDate');
    }

    /**
     * @param string $endDate
     * @return $this
     */
    public function setEndDate(string $endDate): static
    {
        return $this->set('endDate', $endDate);
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
     * @return int
     */
    public function getDiscount(): int
    {
        return $this->get('discount');
    }

    /**
     * @param int $discount
     * @return $this
     */
    public function setDiscount(int $discount): static
    {
        return $this->set('discount', $discount);
    }

    /**
     * @return string
     */
    public function getApplyTo(): string
    {
        return $this->get('applyTo');
    }

    /**
     * @param string $applyTo
     * @return $this
     */
    public function setApplyTo(string $applyTo): static
    {
        return $this->set('applyTo', $applyTo);
    }

    /**
     * @return string
     */
    public function getShipment(): string
    {
        return $this->get('shipment');
    }

    /**
     * @param string $shipment
     * @return $this
     */
    public function setShipment(string $shipment): static
    {
        return $this->set('shipment', $shipment);
    }

    /**
     * @return int
     */
    public function getUsageLimit(): int
    {
        return $this->get('usageLimit');
    }

    /**
     * @param int $usageLimit
     * @return $this
     */
    public function setUsageLimit(int $usageLimit): static
    {
        return $this->set('usageLimit', $usageLimit);
    }

    /**
     * @return int
     */
    public function getTimesUsed(): int
    {
        return $this->get('timesUsed');
    }

    /**
     * @param int $timesUsed
     * @return $this
     */
    public function setTimesUsed(int $timesUsed): static
    {
        return $this->set('timesUsed', $timesUsed);
    }

    /**
     * @return int
     */
    public function getMinimumAmount(): int
    {
        return $this->get('minimumAmount');
    }

    /**
     * @param int $minimumAmount
     * @return $this
     */
    public function setMinimumAmount(int $minimumAmount): static
    {
        return $this->set('minimumAmount', $minimumAmount);
    }

    /**
     * @return bool
     */
    public function getBefore_tax(): bool
    {
        return $this->get('before_tax');
    }

    /**
     * @param bool $before_tax
     * @return $this
     */
    public function setBefore_tax(bool $before_tax): static
    {
        return $this->set('before_tax', $before_tax);
    }

    /**
     * @return bool
     */
    public function getMinimum_after(): bool
    {
        return $this->get('minimum_after');
    }

    /**
     * @param bool $minimum_after
     * @return $this
     */
    public function setMinimum_after(bool $minimum_after): static
    {
        return $this->set('minimum_after', $minimum_after);
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->get('code');
    }

    /**
     * @param string $code
     * @return $this
     */
    public function setCode(string $code): static
    {
        return $this->set('code', $code);
    }

    /**
     * @return array
     */
    public function getCategories(): array
    {
        return $this->get('categories');
    }

    /**
     * @param array $categories
     * @return $this
     */
    public function setCategories(array $categories): static
    {
        return $this->set('categories', $categories);
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->get('products');
    }

    /**
     * @param array $products
     * @return $this
     */
    public function setProducts(array $products): static
    {
        return $this->set('products', $products);
    }

}
