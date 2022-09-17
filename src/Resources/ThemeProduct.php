<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * ThemeProduct
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/themeproduct
 */
class ThemeProduct extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/themes/{id}/products';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'themeProduct';


    /**
     * @return int|null
     */
    public function getProductId(): ?int
    {
        return $this->get('productId');
    }

    /**
     * @param int|null $productId
     * @return $this
     */
    public function setProductId(int $productId = null): static
    {
        return $this->set('productId', $productId);
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
