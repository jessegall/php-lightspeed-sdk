<?php

namespace JesseGall\LightspeedSDK\Resources;

class ProductRelation extends Resource
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
        return $this->mapTo('relatedProduct', RelatedProduct::class);
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
