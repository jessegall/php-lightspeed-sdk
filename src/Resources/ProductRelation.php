<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * ProductRelation
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/productrelation
 */
class ProductRelation extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/products/{id}/relations';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'productRelation';


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
     * @return Product|null
     */
    public function getRelatedProduct(): ?Product
    {
        return $this->relation('relatedProduct.resource.embedded', Product::class);
    }


    /**
     * @return int|null
     */
    public function getRelatedProductId(): ?int
    {
        return $this->get('relatedProduct.resource.id');
    }

    /**
     * @param Product|null $relatedProduct
     * @return $this
     */
    public function setRelatedProduct(Product $relatedProduct = null): static
    {
        $this->set('relatedProduct.resource.embedded', $relatedProduct);

        return $this;
    }

}
