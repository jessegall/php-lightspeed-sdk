<?php

namespace JesseGall\LightspeedSDK\Resources;

class DiscountRule extends Resource
{


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
    public function getPosition(): int
    {
        return $this->get('position');
    }

    /**
     * @param int $position
     * @return $this
     */
    public function setPosition(int $position): static
    {
        return $this->set('position', $position);
    }

    /**
     * @return int
     */
    public function getMaximumUses(): int
    {
        return $this->get('maximumUses');
    }

    /**
     * @param int $maximumUses
     * @return $this
     */
    public function setMaximumUses(int $maximumUses): static
    {
        return $this->set('maximumUses', $maximumUses);
    }

    /**
     * @return int
     */
    public function getCountUsed(): int
    {
        return $this->get('countUsed');
    }

    /**
     * @param int $countUsed
     * @return $this
     */
    public function setCountUsed(int $countUsed): static
    {
        return $this->set('countUsed', $countUsed);
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
    public function getModifiedAt(): string
    {
        return $this->get('modifiedAt');
    }

    /**
     * @param string $modifiedAt
     * @return $this
     */
    public function setModifiedAt(string $modifiedAt): static
    {
        return $this->set('modifiedAt', $modifiedAt);
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
     * @return bool
     */
    public function getIsStop(): bool
    {
        return $this->get('isStop');
    }

    /**
     * @param bool $isStop
     * @return $this
     */
    public function setIsStop(bool $isStop): static
    {
        return $this->set('isStop', $isStop);
    }

    /**
     * @return string
     */
    public function getDiscountAmount(): string
    {
        return $this->get('discountAmount');
    }

    /**
     * @param string $discountAmount
     * @return $this
     */
    public function setDiscountAmount(string $discountAmount): static
    {
        return $this->set('discountAmount', $discountAmount);
    }

    /**
     * @return string
     */
    public function getDiscountType(): string
    {
        return $this->get('discountType');
    }

    /**
     * @param string $discountType
     * @return $this
     */
    public function setDiscountType(string $discountType): static
    {
        return $this->set('discountType', $discountType);
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
    public function getCustomer_groups(): array
    {
        return $this->get('customer_groups');
    }

    /**
     * @param array $customer_groups
     * @return $this
     */
    public function setCustomer_groups(array $customer_groups): static
    {
        return $this->set('customer_groups', $customer_groups);
    }

    /**
     * @return string
     */
    public function getMinCategoryAmount(): string
    {
        return $this->get('minCategoryAmount');
    }

    /**
     * @param string $minCategoryAmount
     * @return $this
     */
    public function setMinCategoryAmount(string $minCategoryAmount): static
    {
        return $this->set('minCategoryAmount', $minCategoryAmount);
    }

    /**
     * @return string
     */
    public function getMinCategoryProducts(): string
    {
        return $this->get('minCategoryProducts');
    }

    /**
     * @param string $minCategoryProducts
     * @return $this
     */
    public function setMinCategoryProducts(string $minCategoryProducts): static
    {
        return $this->set('minCategoryProducts', $minCategoryProducts);
    }

}
