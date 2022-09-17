<?php

namespace JesseGall\LightspeedSDK\Resources;

class InvoiceItem extends Resource
{

    protected string $apiUrl = '/invoices/{id}/items';

    protected string $handle = 'invoiceItem';

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->get('type');
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type): static
    {
        return $this->set('type', $type);
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
     * @return mixed
     */
    public function getOrderProductId(): mixed
    {
        return $this->get('orderProductId');
    }

    /**
     * @param mixed $orderProductId
     * @return $this
     */
    public function setOrderProductId(mixed $orderProductId): static
    {
        return $this->set('orderProductId', $orderProductId);
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
     * @return int
     */
    public function getTaxRate(): int
    {
        return $this->get('taxRate');
    }

    /**
     * @param int $taxRate
     * @return $this
     */
    public function setTaxRate(int $taxRate): static
    {
        return $this->set('taxRate', $taxRate);
    }

    /**
     * @return int
     */
    public function getBasePriceExcl(): int
    {
        return $this->get('basePriceExcl');
    }

    /**
     * @param int $basePriceExcl
     * @return $this
     */
    public function setBasePriceExcl(int $basePriceExcl): static
    {
        return $this->set('basePriceExcl', $basePriceExcl);
    }

    /**
     * @return int
     */
    public function getBasePriceIncl(): int
    {
        return $this->get('basePriceIncl');
    }

    /**
     * @param int $basePriceIncl
     * @return $this
     */
    public function setBasePriceIncl(int $basePriceIncl): static
    {
        return $this->set('basePriceIncl', $basePriceIncl);
    }

    /**
     * @return int
     */
    public function getPriceExcl(): int
    {
        return $this->get('priceExcl');
    }

    /**
     * @param int $priceExcl
     * @return $this
     */
    public function setPriceExcl(int $priceExcl): static
    {
        return $this->set('priceExcl', $priceExcl);
    }

    /**
     * @return int
     */
    public function getPriceIncl(): int
    {
        return $this->get('priceIncl');
    }

    /**
     * @param int $priceIncl
     * @return $this
     */
    public function setPriceIncl(int $priceIncl): static
    {
        return $this->set('priceIncl', $priceIncl);
    }

    /**
     * @return int
     */
    public function getDiscountExcl(): int
    {
        return $this->get('discountExcl');
    }

    /**
     * @param int $discountExcl
     * @return $this
     */
    public function setDiscountExcl(int $discountExcl): static
    {
        return $this->set('discountExcl', $discountExcl);
    }

    /**
     * @return int
     */
    public function getDiscountIncl(): int
    {
        return $this->get('discountIncl');
    }

    /**
     * @param int $discountIncl
     * @return $this
     */
    public function setDiscountIncl(int $discountIncl): static
    {
        return $this->set('discountIncl', $discountIncl);
    }

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

}
