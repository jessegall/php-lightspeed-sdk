<?php

namespace JesseGall\LightspeedSDK\Resources;

class ThemeProduct extends Resource
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
    public function getProductId(): int
    {
        return $this->get('productId');
    }

    /**
     * @param int $productId
     * @return $this
     */
    public function setProductId(int $productId): static
    {
        return $this->set('productId', $productId);
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

}
