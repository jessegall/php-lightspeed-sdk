<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * DiscountRule
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/discountrule
 */
class DiscountRule extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/discounts/{id}/rules';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'discountRule';


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
    public function getPosition(): ?int
    {
        return $this->get('position');
    }

    /**
     * @param int|null $position
     * @return $this
     */
    public function setPosition(int $position = null): static
    {
        return $this->set('position', $position);
    }

    /**
     * @return int|null
     */
    public function getMaximumUses(): ?int
    {
        return $this->get('maximumUses');
    }

    /**
     * @param int|null $maximumUses
     * @return $this
     */
    public function setMaximumUses(int $maximumUses = null): static
    {
        return $this->set('maximumUses', $maximumUses);
    }

    /**
     * @return int|null
     */
    public function getCountUsed(): ?int
    {
        return $this->get('countUsed');
    }

    /**
     * @param int|null $countUsed
     * @return $this
     */
    public function setCountUsed(int $countUsed = null): static
    {
        return $this->set('countUsed', $countUsed);
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
    public function getModifiedAt(): ?string
    {
        return $this->get('modifiedAt');
    }

    /**
     * @param string|null $modifiedAt
     * @return $this
     */
    public function setModifiedAt(string $modifiedAt = null): static
    {
        return $this->set('modifiedAt', $modifiedAt);
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
     * @return bool|null
     */
    public function getIsStop(): ?bool
    {
        return $this->get('isStop');
    }

    /**
     * @param bool|null $isStop
     * @return $this
     */
    public function setIsStop(bool $isStop = null): static
    {
        return $this->set('isStop', $isStop);
    }

    /**
     * @return string|null
     */
    public function getDiscountAmount(): ?string
    {
        return $this->get('discountAmount');
    }

    /**
     * @param string|null $discountAmount
     * @return $this
     */
    public function setDiscountAmount(string $discountAmount = null): static
    {
        return $this->set('discountAmount', $discountAmount);
    }

    /**
     * @return string|null
     */
    public function getDiscountType(): ?string
    {
        return $this->get('discountType');
    }

    /**
     * @param string|null $discountType
     * @return $this
     */
    public function setDiscountType(string $discountType = null): static
    {
        return $this->set('discountType', $discountType);
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
    public function getCustomer_groups(): ?array
    {
        return $this->get('customer_groups');
    }

    /**
     * @param array|null $customer_groups
     * @return $this
     */
    public function setCustomer_groups(array $customer_groups = null): static
    {
        return $this->set('customer_groups', $customer_groups);
    }

    /**
     * @return string|null
     */
    public function getMinCategoryAmount(): ?string
    {
        return $this->get('minCategoryAmount');
    }

    /**
     * @param string|null $minCategoryAmount
     * @return $this
     */
    public function setMinCategoryAmount(string $minCategoryAmount = null): static
    {
        return $this->set('minCategoryAmount', $minCategoryAmount);
    }

    /**
     * @return string|null
     */
    public function getMinCategoryProducts(): ?string
    {
        return $this->get('minCategoryProducts');
    }

    /**
     * @param string|null $minCategoryProducts
     * @return $this
     */
    public function setMinCategoryProducts(string $minCategoryProducts = null): static
    {
        return $this->set('minCategoryProducts', $minCategoryProducts);
    }

}
