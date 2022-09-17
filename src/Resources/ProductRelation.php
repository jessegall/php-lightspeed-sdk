<?php

namespace JesseGall\LightspeedSDK\Resources;

class ProductRelation extends Resource
{

    protected string $endpoint = '/products/{id}/relations';

    protected string $handle = 'productRelation';

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
     * @return Product
     */
    public function getRelatedProduct(): Product
    {
        return $this->relation('relatedProduct.resource.embedded', Product::class);
    }


    /**
     * @return int
     */
    public function getRelatedProductId(): int
    {
        return $this->get('relatedProduct.resource.id');
    }

    /**
     * @param Product $relatedProduct
     * @return $this
     */
    public function setRelatedProduct(Product $relatedProduct): static
    {
        $this->set('relatedProduct.resource.embedded', $relatedProduct);

        return $this;
    }

}
