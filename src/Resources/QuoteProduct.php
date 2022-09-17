<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * QuoteProduct
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/quoteproduct
 */
class QuoteProduct extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/quotes/{id}/products';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'quoteProduct';


    /**
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->get('createdAt');
    }

    /**
     * @param string|null $createdAt
     * @return $this
     */
    public function setCreatedAt(string $createdAt = null): static
    {
        return $this->set('createdAt', $createdAt);
    }

    /**
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->get('updatedAt');
    }

    /**
     * @param string|null $updatedAt
     * @return $this
     */
    public function setUpdatedAt(string $updatedAt = null): static
    {
        return $this->set('updatedAt', $updatedAt);
    }

    /**
     * @return bool|null
     */
    public function getIsCustom(): ?bool
    {
        return $this->get('isCustom');
    }

    /**
     * @param bool|null $isCustom
     * @return $this
     */
    public function setIsCustom(bool $isCustom = null): static
    {
        return $this->set('isCustom', $isCustom);
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
     * @return int|null
     */
    public function getBaseWeight(): ?int
    {
        return $this->get('baseWeight');
    }

    /**
     * @param int|null $baseWeight
     * @return $this
     */
    public function setBaseWeight(int $baseWeight = null): static
    {
        return $this->set('baseWeight', $baseWeight);
    }

    /**
     * @return int|null
     */
    public function getBaseVolume(): ?int
    {
        return $this->get('baseVolume');
    }

    /**
     * @param int|null $baseVolume
     * @return $this
     */
    public function setBaseVolume(int $baseVolume = null): static
    {
        return $this->set('baseVolume', $baseVolume);
    }

    /**
     * @return int|null
     */
    public function getBaseColli(): ?int
    {
        return $this->get('baseColli');
    }

    /**
     * @param int|null $baseColli
     * @return $this
     */
    public function setBaseColli(int $baseColli = null): static
    {
        return $this->set('baseColli', $baseColli);
    }

    /**
     * @return int|null
     */
    public function getBasePriceCost(): ?int
    {
        return $this->get('basePriceCost');
    }

    /**
     * @param int|null $basePriceCost
     * @return $this
     */
    public function setBasePriceCost(int $basePriceCost = null): static
    {
        return $this->set('basePriceCost', $basePriceCost);
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
     * @return float|null
     */
    public function getBasePriceIncl(): ?float
    {
        return $this->get('basePriceIncl');
    }

    /**
     * @param float|null $basePriceIncl
     * @return $this
     */
    public function setBasePriceIncl(float $basePriceIncl = null): static
    {
        return $this->set('basePriceIncl', $basePriceIncl);
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
     * @return bool|null
     */
    public function getHasDiscount(): ?bool
    {
        return $this->get('hasDiscount');
    }

    /**
     * @param bool|null $hasDiscount
     * @return $this
     */
    public function setHasDiscount(bool $hasDiscount = null): static
    {
        return $this->set('hasDiscount', $hasDiscount);
    }

    /**
     * @return int|null
     */
    public function getDiscountPercentage(): ?int
    {
        return $this->get('discountPercentage');
    }

    /**
     * @param int|null $discountPercentage
     * @return $this
     */
    public function setDiscountPercentage(int $discountPercentage = null): static
    {
        return $this->set('discountPercentage', $discountPercentage);
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
     * @return float|null
     */
    public function getPriceTax(): ?float
    {
        return $this->get('priceTax');
    }

    /**
     * @param float|null $priceTax
     * @return $this
     */
    public function setPriceTax(float $priceTax = null): static
    {
        return $this->set('priceTax', $priceTax);
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
     * @return int|null
     */
    public function getAdditionalCostIncl(): ?int
    {
        return $this->get('additionalCostIncl');
    }

    /**
     * @param int|null $additionalCostIncl
     * @return $this
     */
    public function setAdditionalCostIncl(int $additionalCostIncl = null): static
    {
        return $this->set('additionalCostIncl', $additionalCostIncl);
    }

    /**
     * @return int|null
     */
    public function getAdditionalCostExcl(): ?int
    {
        return $this->get('additionalCostExcl');
    }

    /**
     * @param int|null $additionalCostExcl
     * @return $this
     */
    public function setAdditionalCostExcl(int $additionalCostExcl = null): static
    {
        return $this->set('additionalCostExcl', $additionalCostExcl);
    }

    /**
     * @return int|null
     */
    public function getBaseAdditionalCostIncl(): ?int
    {
        return $this->get('baseAdditionalCostIncl');
    }

    /**
     * @param int|null $baseAdditionalCostIncl
     * @return $this
     */
    public function setBaseAdditionalCostIncl(int $baseAdditionalCostIncl = null): static
    {
        return $this->set('baseAdditionalCostIncl', $baseAdditionalCostIncl);
    }

    /**
     * @return int|null
     */
    public function getBaseAdditionalCostExcl(): ?int
    {
        return $this->get('baseAdditionalCostExcl');
    }

    /**
     * @param int|null $baseAdditionalCostExcl
     * @return $this
     */
    public function setBaseAdditionalCostExcl(int $baseAdditionalCostExcl = null): static
    {
        return $this->set('baseAdditionalCostExcl', $baseAdditionalCostExcl);
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
