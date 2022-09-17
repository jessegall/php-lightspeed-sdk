<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * InvoiceItem
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/invoiceitem
 */
class InvoiceItem extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/invoices/{id}/items';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'invoiceItem';


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
     * @return mixed|null
     */
    public function getOrderProductId(): mixed
    {
        return $this->get('orderProductId');
    }

    /**
     * @param mixed|null $orderProductId
     * @return $this
     */
    public function setOrderProductId(mixed $orderProductId = null): static
    {
        return $this->set('orderProductId', $orderProductId);
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
     * @return int|null
     */
    public function getTaxRate(): ?int
    {
        return $this->get('taxRate');
    }

    /**
     * @param int|null $taxRate
     * @return $this
     */
    public function setTaxRate(int $taxRate = null): static
    {
        return $this->set('taxRate', $taxRate);
    }

    /**
     * @return int|null
     */
    public function getBasePriceExcl(): ?int
    {
        return $this->get('basePriceExcl');
    }

    /**
     * @param int|null $basePriceExcl
     * @return $this
     */
    public function setBasePriceExcl(int $basePriceExcl = null): static
    {
        return $this->set('basePriceExcl', $basePriceExcl);
    }

    /**
     * @return int|null
     */
    public function getBasePriceIncl(): ?int
    {
        return $this->get('basePriceIncl');
    }

    /**
     * @param int|null $basePriceIncl
     * @return $this
     */
    public function setBasePriceIncl(int $basePriceIncl = null): static
    {
        return $this->set('basePriceIncl', $basePriceIncl);
    }

    /**
     * @return int|null
     */
    public function getPriceExcl(): ?int
    {
        return $this->get('priceExcl');
    }

    /**
     * @param int|null $priceExcl
     * @return $this
     */
    public function setPriceExcl(int $priceExcl = null): static
    {
        return $this->set('priceExcl', $priceExcl);
    }

    /**
     * @return int|null
     */
    public function getPriceIncl(): ?int
    {
        return $this->get('priceIncl');
    }

    /**
     * @param int|null $priceIncl
     * @return $this
     */
    public function setPriceIncl(int $priceIncl = null): static
    {
        return $this->set('priceIncl', $priceIncl);
    }

    /**
     * @return int|null
     */
    public function getDiscountExcl(): ?int
    {
        return $this->get('discountExcl');
    }

    /**
     * @param int|null $discountExcl
     * @return $this
     */
    public function setDiscountExcl(int $discountExcl = null): static
    {
        return $this->set('discountExcl', $discountExcl);
    }

    /**
     * @return int|null
     */
    public function getDiscountIncl(): ?int
    {
        return $this->get('discountIncl');
    }

    /**
     * @param int|null $discountIncl
     * @return $this
     */
    public function setDiscountIncl(int $discountIncl = null): static
    {
        return $this->set('discountIncl', $discountIncl);
    }

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

}
