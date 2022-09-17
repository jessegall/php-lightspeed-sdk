<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * ShipmentProduct
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/shipmentproduct
 */
class ShipmentProduct extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/shipments/{id}/products';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'shipmentProduct';


    /**
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->get('quantity');
    }

    /**
     * @param int|null $quantity
     * @return $this
     */
    public function setQuantity(int $quantity = null): static
    {
        return $this->set('quantity', $quantity);
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
     * @return string|null
     */
    public function getVariant(): ?string
    {
        return $this->get('variant');
    }

    /**
     * @param string|null $variant
     * @return $this
     */
    public function setVariant(string $variant = null): static
    {
        return $this->set('variant', $variant);
    }

    /**
     * @return string|null
     */
    public function getArticleCode(): ?string
    {
        return $this->get('articleCode');
    }

    /**
     * @param string|null $articleCode
     * @return $this
     */
    public function setArticleCode(string $articleCode = null): static
    {
        return $this->set('articleCode', $articleCode);
    }

    /**
     * @return string|null
     */
    public function getEan(): ?string
    {
        return $this->get('ean');
    }

    /**
     * @param string|null $ean
     * @return $this
     */
    public function setEan(string $ean = null): static
    {
        return $this->set('ean', $ean);
    }

    /**
     * @return string|null
     */
    public function getSku(): ?string
    {
        return $this->get('sku');
    }

    /**
     * @param string|null $sku
     * @return $this
     */
    public function setSku(string $sku = null): static
    {
        return $this->set('sku', $sku);
    }

    /**
     * @return array|null
     */
    public function getCustomData(): ?array
    {
        return $this->get('customData');
    }

    /**
     * @param array|null $customData
     * @return $this
     */
    public function setCustomData(array $customData = null): static
    {
        return $this->set('customData', $customData);
    }

}
