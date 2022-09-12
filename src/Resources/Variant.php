<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class Variant extends Resource
{


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
    public function getIsDefault(): bool
    {
        return $this->get('isDefault');
    }

    /**
     * @param bool $isDefault
     * @return $this
     */
    public function setIsDefault(bool $isDefault): static
    {
        return $this->set('isDefault', $isDefault);
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
     * @return string
     */
    public function getHs(): string
    {
        return $this->get('hs');
    }

    /**
     * @param string $hs
     * @return $this
     */
    public function setHs(string $hs): static
    {
        return $this->set('hs', $hs);
    }

    /**
     * @return int
     */
    public function getUnitPrice(): int
    {
        return $this->get('unitPrice');
    }

    /**
     * @param int $unitPrice
     * @return $this
     */
    public function setUnitPrice(int $unitPrice): static
    {
        return $this->set('unitPrice', $unitPrice);
    }

    /**
     * @return mixed
     */
    public function getUnitUnit(): mixed
    {
        return $this->get('unitUnit');
    }

    /**
     * @param mixed $unitUnit
     * @return $this
     */
    public function setUnitUnit(mixed $unitUnit): static
    {
        return $this->set('unitUnit', $unitUnit);
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
    public function getOldPriceExcl(): int
    {
        return $this->get('oldPriceExcl');
    }

    /**
     * @param int $oldPriceExcl
     * @return $this
     */
    public function setOldPriceExcl(int $oldPriceExcl): static
    {
        return $this->set('oldPriceExcl', $oldPriceExcl);
    }

    /**
     * @return int
     */
    public function getOldPriceIncl(): int
    {
        return $this->get('oldPriceIncl');
    }

    /**
     * @param int $oldPriceIncl
     * @return $this
     */
    public function setOldPriceIncl(int $oldPriceIncl): static
    {
        return $this->set('oldPriceIncl', $oldPriceIncl);
    }

    /**
     * @return string
     */
    public function getStockTracking(): string
    {
        return $this->get('stockTracking');
    }

    /**
     * @param string $stockTracking
     * @return $this
     */
    public function setStockTracking(string $stockTracking): static
    {
        return $this->set('stockTracking', $stockTracking);
    }

    /**
     * @return int
     */
    public function getStockLevel(): int
    {
        return $this->get('stockLevel');
    }

    /**
     * @param int $stockLevel
     * @return $this
     */
    public function setStockLevel(int $stockLevel): static
    {
        return $this->set('stockLevel', $stockLevel);
    }

    /**
     * @return int
     */
    public function getStockAlert(): int
    {
        return $this->get('stockAlert');
    }

    /**
     * @param int $stockAlert
     * @return $this
     */
    public function setStockAlert(int $stockAlert): static
    {
        return $this->set('stockAlert', $stockAlert);
    }

    /**
     * @return int
     */
    public function getStockMinimum(): int
    {
        return $this->get('stockMinimum');
    }

    /**
     * @param int $stockMinimum
     * @return $this
     */
    public function setStockMinimum(int $stockMinimum): static
    {
        return $this->set('stockMinimum', $stockMinimum);
    }

    /**
     * @return int
     */
    public function getStockSold(): int
    {
        return $this->get('stockSold');
    }

    /**
     * @param int $stockSold
     * @return $this
     */
    public function setStockSold(int $stockSold): static
    {
        return $this->set('stockSold', $stockSold);
    }

    /**
     * @return int
     */
    public function getStockBuyMininum(): int
    {
        return $this->get('stockBuyMininum');
    }

    /**
     * @param int $stockBuyMininum
     * @return $this
     */
    public function setStockBuyMininum(int $stockBuyMininum): static
    {
        return $this->set('stockBuyMininum', $stockBuyMininum);
    }

    /**
     * @return int
     */
    public function getStockBuyMinimum(): int
    {
        return $this->get('stockBuyMinimum');
    }

    /**
     * @param int $stockBuyMinimum
     * @return $this
     */
    public function setStockBuyMinimum(int $stockBuyMinimum): static
    {
        return $this->set('stockBuyMinimum', $stockBuyMinimum);
    }

    /**
     * @return int
     */
    public function getStockBuyMaximum(): int
    {
        return $this->get('stockBuyMaximum');
    }

    /**
     * @param int $stockBuyMaximum
     * @return $this
     */
    public function setStockBuyMaximum(int $stockBuyMaximum): static
    {
        return $this->set('stockBuyMaximum', $stockBuyMaximum);
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
     * @return string
     */
    public function getWeightValue(): string
    {
        return $this->get('weightValue');
    }

    /**
     * @param string $weightValue
     * @return $this
     */
    public function setWeightValue(string $weightValue): static
    {
        return $this->set('weightValue', $weightValue);
    }

    /**
     * @return string
     */
    public function getWeightUnit(): string
    {
        return $this->get('weightUnit');
    }

    /**
     * @param string $weightUnit
     * @return $this
     */
    public function setWeightUnit(string $weightUnit): static
    {
        return $this->set('weightUnit', $weightUnit);
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
    public function getVolumeValue(): int
    {
        return $this->get('volumeValue');
    }

    /**
     * @param int $volumeValue
     * @return $this
     */
    public function setVolumeValue(int $volumeValue): static
    {
        return $this->set('volumeValue', $volumeValue);
    }

    /**
     * @return string
     */
    public function getVolumeUnit(): string
    {
        return $this->get('volumeUnit');
    }

    /**
     * @param string $volumeUnit
     * @return $this
     */
    public function setVolumeUnit(string $volumeUnit): static
    {
        return $this->set('volumeUnit', $volumeUnit);
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
     * @return string
     */
    public function getSizeXValue(): string
    {
        return $this->get('sizeXValue');
    }

    /**
     * @param string $sizeXValue
     * @return $this
     */
    public function setSizeXValue(string $sizeXValue): static
    {
        return $this->set('sizeXValue', $sizeXValue);
    }

    /**
     * @return string
     */
    public function getSizeYValue(): string
    {
        return $this->get('sizeYValue');
    }

    /**
     * @param string $sizeYValue
     * @return $this
     */
    public function setSizeYValue(string $sizeYValue): static
    {
        return $this->set('sizeYValue', $sizeYValue);
    }

    /**
     * @return string
     */
    public function getSizeZValue(): string
    {
        return $this->get('sizeZValue');
    }

    /**
     * @param string $sizeZValue
     * @return $this
     */
    public function setSizeZValue(string $sizeZValue): static
    {
        return $this->set('sizeZValue', $sizeZValue);
    }

    /**
     * @return string
     */
    public function getSizeUnit(): string
    {
        return $this->get('sizeUnit');
    }

    /**
     * @param string $sizeUnit
     * @return $this
     */
    public function setSizeUnit(string $sizeUnit): static
    {
        return $this->set('sizeUnit', $sizeUnit);
    }

    /**
     * @return bool
     */
    public function getMatrix(): bool
    {
        return $this->get('matrix');
    }

    /**
     * @param bool $matrix
     * @return $this
     */
    public function setMatrix(bool $matrix): static
    {
        return $this->set('matrix', $matrix);
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
    public function getTaxType(): string
    {
        return $this->get('taxType');
    }

    /**
     * @param string $taxType
     * @return $this
     */
    public function setTaxType(string $taxType): static
    {
        return $this->set('taxType', $taxType);
    }

    /**
     * @return array
     */
    public function getImage(): array
    {
        return $this->get('image');
    }

    /**
     * @param array $image
     * @return $this
     */
    public function setImage(array $image): static
    {
        return $this->set('image', $image);
    }

    /**
     * @return bool
     */
    public function getTax(): bool
    {
        return $this->get('tax');
    }

    /**
     * @param bool $tax
     * @return $this
     */
    public function setTax(bool $tax): static
    {
        return $this->set('tax', $tax);
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
        $this->set('product', $product);

        return $this;
    }

    /**
     * @return ResourceCollection<Movement>
     */
    public function getMovements(): ResourceCollection
    {
        return $this->relation('movements.resource.embedded', Movement::class);
    }


    /**
     * @param ResourceCollection<Movement> $movements
     * @return $this
     */
    public function setMovements(ResourceCollection $movements): static
    {
        $this->set('movements', $movements);

        return $this;
    }

    /**
     * @return ResourceCollection<Metafield>
     */
    public function getMetafields(): ResourceCollection
    {
        return $this->relation('metafields.resource.embedded', Metafield::class);
    }


    /**
     * @param ResourceCollection<Metafield> $metafields
     * @return $this
     */
    public function setMetafields(ResourceCollection $metafields): static
    {
        $this->set('metafields', $metafields);

        return $this;
    }

    /**
     * @return bool
     */
    public function getAdditionalcost(): bool
    {
        return $this->get('additionalcost');
    }

    /**
     * @param bool $additionalcost
     * @return $this
     */
    public function setAdditionalcost(bool $additionalcost): static
    {
        return $this->set('additionalcost', $additionalcost);
    }

    /**
     * @return array
     */
    public function getOptions(): array
    {
        return $this->get('options');
    }

    /**
     * @param array $options
     * @return $this
     */
    public function setOptions(array $options): static
    {
        return $this->set('options', $options);
    }

}
