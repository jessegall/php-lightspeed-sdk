<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * Discount
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/discount
 */
class Discount extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/discounts';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'discount';


    /**
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->get('createdAt');
    }

    /**
     * @param string|null $createdAt
     * @return $this
     */
    public function setCreatedAt(string $createdAt = null): static
    {
        return $this->set('createdAt', $createdAt);
    }

    /**
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->get('updatedAt');
    }

    /**
     * @param string|null $updatedAt
     * @return $this
     */
    public function setUpdatedAt(string $updatedAt = null): static
    {
        return $this->set('updatedAt', $updatedAt);
    }

    /**
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->get('isActive');
    }

    /**
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive(bool $isActive = null): static
    {
        return $this->set('isActive', $isActive);
    }

    /**
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->get('startDate');
    }

    /**
     * @param string|null $startDate
     * @return $this
     */
    public function setStartDate(string $startDate = null): static
    {
        return $this->set('startDate', $startDate);
    }

    /**
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->get('endDate');
    }

    /**
     * @param string|null $endDate
     * @return $this
     */
    public function setEndDate(string $endDate = null): static
    {
        return $this->set('endDate', $endDate);
    }

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
    public function getDiscount(): ?int
    {
        return $this->get('discount');
    }

    /**
     * @param int|null $discount
     * @return $this
     */
    public function setDiscount(int $discount = null): static
    {
        return $this->set('discount', $discount);
    }

    /**
     * @return string|null
     */
    public function getApplyTo(): ?string
    {
        return $this->get('applyTo');
    }

    /**
     * @param string|null $applyTo
     * @return $this
     */
    public function setApplyTo(string $applyTo = null): static
    {
        return $this->set('applyTo', $applyTo);
    }

    /**
     * @return string|null
     */
    public function getShipment(): ?string
    {
        return $this->get('shipment');
    }

    /**
     * @param string|null $shipment
     * @return $this
     */
    public function setShipment(string $shipment = null): static
    {
        return $this->set('shipment', $shipment);
    }

    /**
     * @return int|null
     */
    public function getUsageLimit(): ?int
    {
        return $this->get('usageLimit');
    }

    /**
     * @param int|null $usageLimit
     * @return $this
     */
    public function setUsageLimit(int $usageLimit = null): static
    {
        return $this->set('usageLimit', $usageLimit);
    }

    /**
     * @return int|null
     */
    public function getTimesUsed(): ?int
    {
        return $this->get('timesUsed');
    }

    /**
     * @param int|null $timesUsed
     * @return $this
     */
    public function setTimesUsed(int $timesUsed = null): static
    {
        return $this->set('timesUsed', $timesUsed);
    }

    /**
     * @return int|null
     */
    public function getMinimumAmount(): ?int
    {
        return $this->get('minimumAmount');
    }

    /**
     * @param int|null $minimumAmount
     * @return $this
     */
    public function setMinimumAmount(int $minimumAmount = null): static
    {
        return $this->set('minimumAmount', $minimumAmount);
    }

    /**
     * @return bool|null
     */
    public function getBefore_tax(): ?bool
    {
        return $this->get('before_tax');
    }

    /**
     * @param bool|null $before_tax
     * @return $this
     */
    public function setBefore_tax(bool $before_tax = null): static
    {
        return $this->set('before_tax', $before_tax);
    }

    /**
     * @return bool|null
     */
    public function getMinimum_after(): ?bool
    {
        return $this->get('minimum_after');
    }

    /**
     * @param bool|null $minimum_after
     * @return $this
     */
    public function setMinimum_after(bool $minimum_after = null): static
    {
        return $this->set('minimum_after', $minimum_after);
    }

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->get('code');
    }

    /**
     * @param string|null $code
     * @return $this
     */
    public function setCode(string $code = null): static
    {
        return $this->set('code', $code);
    }

    /**
     * @return array|null
     */
    public function getCategories(): ?array
    {
        return $this->get('categories');
    }

    /**
     * @param array|null $categories
     * @return $this
     */
    public function setCategories(array $categories = null): static
    {
        return $this->set('categories', $categories);
    }

    /**
     * @return array|null
     */
    public function getProducts(): ?array
    {
        return $this->get('products');
    }

    /**
     * @param array|null $products
     * @return $this
     */
    public function setProducts(array $products = null): static
    {
        return $this->set('products', $products);
    }

}
