<?php

namespace JesseGall\LightspeedSDK\Resources;

class OrderProduct extends Resource
{

    protected string $apiUrl = '/orders/{id}/products';

    protected string $handle = 'orderProduct';

    /**
     * @return string
     */
    public function getSupplierTitle(): string
    {
        return $this->get('supplierTitle');
    }

    /**
     * @param string $supplierTitle
     * @return $this
     */
    public function setSupplierTitle(string $supplierTitle): static
    {
        return $this->set('supplierTitle', $supplierTitle);
    }

    /**
     * @return string
     */
    public function getBrandTitle(): string
    {
        return $this->get('brandTitle');
    }

    /**
     * @param string $brandTitle
     * @return $this
     */
    public function setBrandTitle(string $brandTitle): static
    {
        return $this->set('brandTitle', $brandTitle);
    }

    /**
     * @return string
     */
    public function getProductTitle(): string
    {
        return $this->get('productTitle');
    }

    /**
     * @param string $productTitle
     * @return $this
     */
    public function setProductTitle(string $productTitle): static
    {
        return $this->set('productTitle', $productTitle);
    }

    /**
     * @return string
     */
    public function getVariantTitle(): string
    {
        return $this->get('variantTitle');
    }

    /**
     * @param string $variantTitle
     * @return $this
     */
    public function setVariantTitle(string $variantTitle): static
    {
        return $this->set('variantTitle', $variantTitle);
    }

    /**
     * @return float
     */
    public function getTaxRate(): float
    {
        return $this->get('taxRate');
    }

    /**
     * @param float $taxRate
     * @return $this
     */
    public function setTaxRate(float $taxRate): static
    {
        return $this->set('taxRate', $taxRate);
    }

    /**
     * @return array
     */
    public function getTaxRates(): array
    {
        return $this->get('taxRates');
    }

    /**
     * @param array $taxRates
     * @return $this
     */
    public function setTaxRates(array $taxRates): static
    {
        return $this->set('taxRates', $taxRates);
    }

    /**
     * @return int
     */
    public function getQuantityOrdered(): int
    {
        return $this->get('quantityOrdered');
    }

    /**
     * @param int $quantityOrdered
     * @return $this
     */
    public function setQuantityOrdered(int $quantityOrdered): static
    {
        return $this->set('quantityOrdered', $quantityOrdered);
    }

    /**
     * @return int
     */
    public function getQuantityInvoiced(): int
    {
        return $this->get('quantityInvoiced');
    }

    /**
     * @param int $quantityInvoiced
     * @return $this
     */
    public function setQuantityInvoiced(int $quantityInvoiced): static
    {
        return $this->set('quantityInvoiced', $quantityInvoiced);
    }

    /**
     * @return int
     */
    public function getQuantityShipped(): int
    {
        return $this->get('quantityShipped');
    }

    /**
     * @param int $quantityShipped
     * @return $this
     */
    public function setQuantityShipped(int $quantityShipped): static
    {
        return $this->set('quantityShipped', $quantityShipped);
    }

    /**
     * @return int
     */
    public function getQuantityRefunded(): int
    {
        return $this->get('quantityRefunded');
    }

    /**
     * @param int $quantityRefunded
     * @return $this
     */
    public function setQuantityRefunded(int $quantityRefunded): static
    {
        return $this->set('quantityRefunded', $quantityRefunded);
    }

    /**
     * @return int
     */
    public function getQuantityReturned(): int
    {
        return $this->get('quantityReturned');
    }

    /**
     * @param int $quantityReturned
     * @return $this
     */
    public function setQuantityReturned(int $quantityReturned): static
    {
        return $this->set('quantityReturned', $quantityReturned);
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
    public function getWeight(): int
    {
        return $this->get('weight');
    }

    /**
     * @param int $weight
     * @return $this
     */
    public function setWeight(int $weight): static
    {
        return $this->set('weight', $weight);
    }

    /**
     * @return int
     */
    public function getVolume(): int
    {
        return $this->get('volume');
    }

    /**
     * @param int $volume
     * @return $this
     */
    public function setVolume(int $volume): static
    {
        return $this->set('volume', $volume);
    }

    /**
     * @return int
     */
    public function getColli(): int
    {
        return $this->get('colli');
    }

    /**
     * @param int $colli
     * @return $this
     */
    public function setColli(int $colli): static
    {
        return $this->set('colli', $colli);
    }

    /**
     * @return int
     */
    public function getSizeX(): int
    {
        return $this->get('sizeX');
    }

    /**
     * @param int $sizeX
     * @return $this
     */
    public function setSizeX(int $sizeX): static
    {
        return $this->set('sizeX', $sizeX);
    }

    /**
     * @return int
     */
    public function getSizeY(): int
    {
        return $this->get('sizeY');
    }

    /**
     * @param int $sizeY
     * @return $this
     */
    public function setSizeY(int $sizeY): static
    {
        return $this->set('sizeY', $sizeY);
    }

    /**
     * @return int
     */
    public function getSizeZ(): int
    {
        return $this->get('sizeZ');
    }

    /**
     * @param int $sizeZ
     * @return $this
     */
    public function setSizeZ(int $sizeZ): static
    {
        return $this->set('sizeZ', $sizeZ);
    }

    /**
     * @return int
     */
    public function getPriceCost(): int
    {
        return $this->get('priceCost');
    }

    /**
     * @param int $priceCost
     * @return $this
     */
    public function setPriceCost(int $priceCost): static
    {
        return $this->set('priceCost', $priceCost);
    }

    /**
     * @return int
     */
    public function getCustomExcl(): int
    {
        return $this->get('customExcl');
    }

    /**
     * @param int $customExcl
     * @return $this
     */
    public function setCustomExcl(int $customExcl): static
    {
        return $this->set('customExcl', $customExcl);
    }

    /**
     * @return int
     */
    public function getCustomIncl(): int
    {
        return $this->get('customIncl');
    }

    /**
     * @param int $customIncl
     * @return $this
     */
    public function setCustomIncl(int $customIncl): static
    {
        return $this->set('customIncl', $customIncl);
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
     * @return float
     */
    public function getPriceIncl(): float
    {
        return $this->get('priceIncl');
    }

    /**
     * @param float $priceIncl
     * @return $this
     */
    public function setPriceIncl(float $priceIncl): static
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
     * @return float
     */
    public function getDiscountIncl(): float
    {
        return $this->get('discountIncl');
    }

    /**
     * @param float $discountIncl
     * @return $this
     */
    public function setDiscountIncl(float $discountIncl): static
    {
        return $this->set('discountIncl', $discountIncl);
    }

    /**
     * @return bool
     */
    public function getCustomFields(): bool
    {
        return $this->get('customFields');
    }

    /**
     * @param bool $customFields
     * @return $this
     */
    public function setCustomFields(bool $customFields): static
    {
        return $this->set('customFields', $customFields);
    }

    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->relation('product.resource.embedded', Product::class);
    }


    /**
     * @return int
     */
    public function getProductId(): int
    {
        return $this->get('product.resource.id');
    }

    /**
     * @param Product $product
     * @return $this
     */
    public function setProduct(Product $product): static
    {
        $this->set('product.resource.embedded', $product);

        return $this;
    }

    /**
     * @return Variant
     */
    public function getVariant(): Variant
    {
        return $this->relation('variant.resource.embedded', Variant::class);
    }


    /**
     * @return int
     */
    public function getVariantId(): int
    {
        return $this->get('variant.resource.id');
    }

    /**
     * @param Variant $variant
     * @return $this
     */
    public function setVariant(Variant $variant): static
    {
        $this->set('variant.resource.embedded', $variant);

        return $this;
    }

}
