<?php

namespace JesseGall\LightspeedSDK\Resources;

class QuoteProduct extends Resource
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
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->get('createdAt');
    }

    /**
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt(string $createdAt): static
    {
        return $this->set('createdAt', $createdAt);
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->get('updatedAt');
    }

    /**
     * @param string $updatedAt
     * @return $this
     */
    public function setUpdatedAt(string $updatedAt): static
    {
        return $this->set('updatedAt', $updatedAt);
    }

    /**
     * @return bool
     */
    public function getIsCustom(): bool
    {
        return $this->get('isCustom');
    }

    /**
     * @param bool $isCustom
     * @return $this
     */
    public function setIsCustom(bool $isCustom): static
    {
        return $this->set('isCustom', $isCustom);
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
     * @return int
     */
    public function getBaseWeight(): int
    {
        return $this->get('baseWeight');
    }

    /**
     * @param int $baseWeight
     * @return $this
     */
    public function setBaseWeight(int $baseWeight): static
    {
        return $this->set('baseWeight', $baseWeight);
    }

    /**
     * @return int
     */
    public function getBaseVolume(): int
    {
        return $this->get('baseVolume');
    }

    /**
     * @param int $baseVolume
     * @return $this
     */
    public function setBaseVolume(int $baseVolume): static
    {
        return $this->set('baseVolume', $baseVolume);
    }

    /**
     * @return int
     */
    public function getBaseColli(): int
    {
        return $this->get('baseColli');
    }

    /**
     * @param int $baseColli
     * @return $this
     */
    public function setBaseColli(int $baseColli): static
    {
        return $this->set('baseColli', $baseColli);
    }

    /**
     * @return int
     */
    public function getBasePriceCost(): int
    {
        return $this->get('basePriceCost');
    }

    /**
     * @param int $basePriceCost
     * @return $this
     */
    public function setBasePriceCost(int $basePriceCost): static
    {
        return $this->set('basePriceCost', $basePriceCost);
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
     * @return float
     */
    public function getBasePriceIncl(): float
    {
        return $this->get('basePriceIncl');
    }

    /**
     * @param float $basePriceIncl
     * @return $this
     */
    public function setBasePriceIncl(float $basePriceIncl): static
    {
        return $this->set('basePriceIncl', $basePriceIncl);
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
     * @return bool
     */
    public function getHasDiscount(): bool
    {
        return $this->get('hasDiscount');
    }

    /**
     * @param bool $hasDiscount
     * @return $this
     */
    public function setHasDiscount(bool $hasDiscount): static
    {
        return $this->set('hasDiscount', $hasDiscount);
    }

    /**
     * @return int
     */
    public function getDiscountPercentage(): int
    {
        return $this->get('discountPercentage');
    }

    /**
     * @param int $discountPercentage
     * @return $this
     */
    public function setDiscountPercentage(int $discountPercentage): static
    {
        return $this->set('discountPercentage', $discountPercentage);
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
     * @return float
     */
    public function getPriceTax(): float
    {
        return $this->get('priceTax');
    }

    /**
     * @param float $priceTax
     * @return $this
     */
    public function setPriceTax(float $priceTax): static
    {
        return $this->set('priceTax', $priceTax);
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
     * @return int
     */
    public function getAdditionalCostIncl(): int
    {
        return $this->get('additionalCostIncl');
    }

    /**
     * @param int $additionalCostIncl
     * @return $this
     */
    public function setAdditionalCostIncl(int $additionalCostIncl): static
    {
        return $this->set('additionalCostIncl', $additionalCostIncl);
    }

    /**
     * @return int
     */
    public function getAdditionalCostExcl(): int
    {
        return $this->get('additionalCostExcl');
    }

    /**
     * @param int $additionalCostExcl
     * @return $this
     */
    public function setAdditionalCostExcl(int $additionalCostExcl): static
    {
        return $this->set('additionalCostExcl', $additionalCostExcl);
    }

    /**
     * @return int
     */
    public function getBaseAdditionalCostIncl(): int
    {
        return $this->get('baseAdditionalCostIncl');
    }

    /**
     * @param int $baseAdditionalCostIncl
     * @return $this
     */
    public function setBaseAdditionalCostIncl(int $baseAdditionalCostIncl): static
    {
        return $this->set('baseAdditionalCostIncl', $baseAdditionalCostIncl);
    }

    /**
     * @return int
     */
    public function getBaseAdditionalCostExcl(): int
    {
        return $this->get('baseAdditionalCostExcl');
    }

    /**
     * @param int $baseAdditionalCostExcl
     * @return $this
     */
    public function setBaseAdditionalCostExcl(int $baseAdditionalCostExcl): static
    {
        return $this->set('baseAdditionalCostExcl', $baseAdditionalCostExcl);
    }

    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->mapTo('product.resource.embedded', Product::class);
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
        $this->set('product', $product);

        return $this;
    }

    /**
     * @return Variant
     */
    public function getVariant(): Variant
    {
        return $this->mapTo('variant.resource.embedded', Variant::class);
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
        $this->set('variant', $variant);

        return $this;
    }

}
