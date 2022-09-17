<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * OrderProduct
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/orderproduct
 */
class OrderProduct extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/orders/{id}/products';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'orderProduct';


    /**
     * @return string|null
     */
    public function getSupplierTitle(): ?string
    {
        return $this->get('supplierTitle');
    }

    /**
     * @param string|null $supplierTitle
     * @return $this
     */
    public function setSupplierTitle(string $supplierTitle = null): static
    {
        return $this->set('supplierTitle', $supplierTitle);
    }

    /**
     * @return string|null
     */
    public function getBrandTitle(): ?string
    {
        return $this->get('brandTitle');
    }

    /**
     * @param string|null $brandTitle
     * @return $this
     */
    public function setBrandTitle(string $brandTitle = null): static
    {
        return $this->set('brandTitle', $brandTitle);
    }

    /**
     * @return string|null
     */
    public function getProductTitle(): ?string
    {
        return $this->get('productTitle');
    }

    /**
     * @param string|null $productTitle
     * @return $this
     */
    public function setProductTitle(string $productTitle = null): static
    {
        return $this->set('productTitle', $productTitle);
    }

    /**
     * @return string|null
     */
    public function getVariantTitle(): ?string
    {
        return $this->get('variantTitle');
    }

    /**
     * @param string|null $variantTitle
     * @return $this
     */
    public function setVariantTitle(string $variantTitle = null): static
    {
        return $this->set('variantTitle', $variantTitle);
    }

    /**
     * @return float|null
     */
    public function getTaxRate(): ?float
    {
        return $this->get('taxRate');
    }

    /**
     * @param float|null $taxRate
     * @return $this
     */
    public function setTaxRate(float $taxRate = null): static
    {
        return $this->set('taxRate', $taxRate);
    }

    /**
     * @return array|null
     */
    public function getTaxRates(): ?array
    {
        return $this->get('taxRates');
    }

    /**
     * @param array|null $taxRates
     * @return $this
     */
    public function setTaxRates(array $taxRates = null): static
    {
        return $this->set('taxRates', $taxRates);
    }

    /**
     * @return int|null
     */
    public function getQuantityOrdered(): ?int
    {
        return $this->get('quantityOrdered');
    }

    /**
     * @param int|null $quantityOrdered
     * @return $this
     */
    public function setQuantityOrdered(int $quantityOrdered = null): static
    {
        return $this->set('quantityOrdered', $quantityOrdered);
    }

    /**
     * @return int|null
     */
    public function getQuantityInvoiced(): ?int
    {
        return $this->get('quantityInvoiced');
    }

    /**
     * @param int|null $quantityInvoiced
     * @return $this
     */
    public function setQuantityInvoiced(int $quantityInvoiced = null): static
    {
        return $this->set('quantityInvoiced', $quantityInvoiced);
    }

    /**
     * @return int|null
     */
    public function getQuantityShipped(): ?int
    {
        return $this->get('quantityShipped');
    }

    /**
     * @param int|null $quantityShipped
     * @return $this
     */
    public function setQuantityShipped(int $quantityShipped = null): static
    {
        return $this->set('quantityShipped', $quantityShipped);
    }

    /**
     * @return int|null
     */
    public function getQuantityRefunded(): ?int
    {
        return $this->get('quantityRefunded');
    }

    /**
     * @param int|null $quantityRefunded
     * @return $this
     */
    public function setQuantityRefunded(int $quantityRefunded = null): static
    {
        return $this->set('quantityRefunded', $quantityRefunded);
    }

    /**
     * @return int|null
     */
    public function getQuantityReturned(): ?int
    {
        return $this->get('quantityReturned');
    }

    /**
     * @param int|null $quantityReturned
     * @return $this
     */
    public function setQuantityReturned(int $quantityReturned = null): static
    {
        return $this->set('quantityReturned', $quantityReturned);
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
    public function getWeight(): ?int
    {
        return $this->get('weight');
    }

    /**
     * @param int|null $weight
     * @return $this
     */
    public function setWeight(int $weight = null): static
    {
        return $this->set('weight', $weight);
    }

    /**
     * @return int|null
     */
    public function getVolume(): ?int
    {
        return $this->get('volume');
    }

    /**
     * @param int|null $volume
     * @return $this
     */
    public function setVolume(int $volume = null): static
    {
        return $this->set('volume', $volume);
    }

    /**
     * @return int|null
     */
    public function getColli(): ?int
    {
        return $this->get('colli');
    }

    /**
     * @param int|null $colli
     * @return $this
     */
    public function setColli(int $colli = null): static
    {
        return $this->set('colli', $colli);
    }

    /**
     * @return int|null
     */
    public function getSizeX(): ?int
    {
        return $this->get('sizeX');
    }

    /**
     * @param int|null $sizeX
     * @return $this
     */
    public function setSizeX(int $sizeX = null): static
    {
        return $this->set('sizeX', $sizeX);
    }

    /**
     * @return int|null
     */
    public function getSizeY(): ?int
    {
        return $this->get('sizeY');
    }

    /**
     * @param int|null $sizeY
     * @return $this
     */
    public function setSizeY(int $sizeY = null): static
    {
        return $this->set('sizeY', $sizeY);
    }

    /**
     * @return int|null
     */
    public function getSizeZ(): ?int
    {
        return $this->get('sizeZ');
    }

    /**
     * @param int|null $sizeZ
     * @return $this
     */
    public function setSizeZ(int $sizeZ = null): static
    {
        return $this->set('sizeZ', $sizeZ);
    }

    /**
     * @return int|null
     */
    public function getPriceCost(): ?int
    {
        return $this->get('priceCost');
    }

    /**
     * @param int|null $priceCost
     * @return $this
     */
    public function setPriceCost(int $priceCost = null): static
    {
        return $this->set('priceCost', $priceCost);
    }

    /**
     * @return int|null
     */
    public function getCustomExcl(): ?int
    {
        return $this->get('customExcl');
    }

    /**
     * @param int|null $customExcl
     * @return $this
     */
    public function setCustomExcl(int $customExcl = null): static
    {
        return $this->set('customExcl', $customExcl);
    }

    /**
     * @return int|null
     */
    public function getCustomIncl(): ?int
    {
        return $this->get('customIncl');
    }

    /**
     * @param int|null $customIncl
     * @return $this
     */
    public function setCustomIncl(int $customIncl = null): static
    {
        return $this->set('customIncl', $customIncl);
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
     * @return float|null
     */
    public function getPriceIncl(): ?float
    {
        return $this->get('priceIncl');
    }

    /**
     * @param float|null $priceIncl
     * @return $this
     */
    public function setPriceIncl(float $priceIncl = null): static
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
     * @return float|null
     */
    public function getDiscountIncl(): ?float
    {
        return $this->get('discountIncl');
    }

    /**
     * @param float|null $discountIncl
     * @return $this
     */
    public function setDiscountIncl(float $discountIncl = null): static
    {
        return $this->set('discountIncl', $discountIncl);
    }

    /**
     * @return bool|null
     */
    public function getCustomFields(): ?bool
    {
        return $this->get('customFields');
    }

    /**
     * @param bool|null $customFields
     * @return $this
     */
    public function setCustomFields(bool $customFields = null): static
    {
        return $this->set('customFields', $customFields);
    }

    /**
     * @return Product|null
     */
    public function getProduct(): ?Product
    {
        return $this->relation('product.resource.embedded', Product::class);
    }


    /**
     * @return int|null
     */
    public function getProductId(): ?int
    {
        return $this->get('product.resource.id');
    }

    /**
     * @param Product|null $product
     * @return $this
     */
    public function setProduct(Product $product = null): static
    {
        $this->set('product.resource.embedded', $product);

        return $this;
    }

    /**
     * @return Variant|null
     */
    public function getVariant(): ?Variant
    {
        return $this->relation('variant.resource.embedded', Variant::class);
    }


    /**
     * @return int|null
     */
    public function getVariantId(): ?int
    {
        return $this->get('variant.resource.id');
    }

    /**
     * @param Variant|null $variant
     * @return $this
     */
    public function setVariant(Variant $variant = null): static
    {
        $this->set('variant.resource.embedded', $variant);

        return $this;
    }

}
