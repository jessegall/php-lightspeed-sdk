<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * ThemeCategory
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/themecategory
 */
class ThemeCategory extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/themes/{id}/categories';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'themeCategory';


    /**
     * @return int|null
     */
    public function getShopId(): ?int
    {
        return $this->get('shopId');
    }

    /**
     * @param int|null $shopId
     * @return $this
     */
    public function setShopId(int $shopId = null): static
    {
        return $this->set('shopId', $shopId);
    }

    /**
     * @return int|null
     */
    public function getCategoryId(): ?int
    {
        return $this->get('categoryId');
    }

    /**
     * @param int|null $categoryId
     * @return $this
     */
    public function setCategoryId(int $categoryId = null): static
    {
        return $this->set('categoryId', $categoryId);
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

}
