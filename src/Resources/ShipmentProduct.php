<?php

namespace JesseGall\LightspeedSDK\Resources;

class ShipmentProduct extends Resource
{

    protected string $apiUrl = '/shipments/{id}/products';

    protected string $handle = 'shipmentProduct';

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->get('quantity');
    }

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity): static
    {
        return $this->set('quantity', $quantity);
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
     * @return string
     */
    public function getVariant(): string
    {
        return $this->get('variant');
    }

    /**
     * @param string $variant
     * @return $this
     */
    public function setVariant(string $variant): static
    {
        return $this->set('variant', $variant);
    }

    /**
     * @return string
     */
    public function getArticleCode(): string
    {
        return $this->get('articleCode');
    }

    /**
     * @param string $articleCode
     * @return $this
     */
    public function setArticleCode(string $articleCode): static
    {
        return $this->set('articleCode', $articleCode);
    }

    /**
     * @return string
     */
    public function getEan(): string
    {
        return $this->get('ean');
    }

    /**
     * @param string $ean
     * @return $this
     */
    public function setEan(string $ean): static
    {
        return $this->set('ean', $ean);
    }

    /**
     * @return string
     */
    public function getSku(): string
    {
        return $this->get('sku');
    }

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku(string $sku): static
    {
        return $this->set('sku', $sku);
    }

    /**
     * @return array
     */
    public function getCustomData(): array
    {
        return $this->get('customData');
    }

    /**
     * @param array $customData
     * @return $this
     */
    public function setCustomData(array $customData): static
    {
        return $this->set('customData', $customData);
    }

}
