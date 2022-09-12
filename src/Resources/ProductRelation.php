<?php

namespace JesseGall\LightspeedSDK\Resources;

class ProductRelation extends Resource
{


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
     * @return RelatedProduct
     */
    public function getRelatedProduct(): RelatedProduct
    {
        return $this->relation('relatedProduct.resource.embedded', RelatedProduct::class);
    }


    /**
     * @return int
     */
    public function getRelatedProductId(): int
    {
        return $this->get('relatedProduct.resource.id');
    }

    /**
     * @param RelatedProduct $relatedProduct
     * @return $this
     */
    public function setRelatedProduct(RelatedProduct $relatedProduct): static
    {
        $this->set('relatedProduct', $relatedProduct);

        return $this;
    }

}
