<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Variant
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/variant
 */
class Variant extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/variants';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'variant';


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
    public function getIsDefault(): ?bool
    {
        return $this->get('isDefault');
    }

    /**
     * @param bool|null $isDefault
     * @return $this
     */
    public function setIsDefault(bool $isDefault = null): static
    {
        return $this->set('isDefault', $isDefault);
    }

    /**
     * @return int|null
     */
    public function getSortOrder(): ?int
    {
        return $this->get('sortOrder');
    }

    /**
     * @param int|null $sortOrder
     * @return $this
     */
    public function setSortOrder(int $sortOrder = null): static
    {
        return $this->set('sortOrder', $sortOrder);
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
     * @return string|null
     */
    public function getHs(): ?string
    {
        return $this->get('hs');
    }

    /**
     * @param string|null $hs
     * @return $this
     */
    public function setHs(string $hs = null): static
    {
        return $this->set('hs', $hs);
    }

    /**
     * @return int|null
     */
    public function getUnitPrice(): ?int
    {
        return $this->get('unitPrice');
    }

    /**
     * @param int|null $unitPrice
     * @return $this
     */
    public function setUnitPrice(int $unitPrice = null): static
    {
        return $this->set('unitPrice', $unitPrice);
    }

    /**
     * @return mixed|null
     */
    public function getUnitUnit(): mixed
    {
        return $this->get('unitUnit');
    }

    /**
     * @param mixed|null $unitUnit
     * @return $this
     */
    public function setUnitUnit(mixed $unitUnit = null): static
    {
        return $this->set('unitUnit', $unitUnit);
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
    public function getOldPriceExcl(): ?int
    {
        return $this->get('oldPriceExcl');
    }

    /**
     * @param int|null $oldPriceExcl
     * @return $this
     */
    public function setOldPriceExcl(int $oldPriceExcl = null): static
    {
        return $this->set('oldPriceExcl', $oldPriceExcl);
    }

    /**
     * @return int|null
     */
    public function getOldPriceIncl(): ?int
    {
        return $this->get('oldPriceIncl');
    }

    /**
     * @param int|null $oldPriceIncl
     * @return $this
     */
    public function setOldPriceIncl(int $oldPriceIncl = null): static
    {
        return $this->set('oldPriceIncl', $oldPriceIncl);
    }

    /**
     * @return string|null
     */
    public function getStockTracking(): ?string
    {
        return $this->get('stockTracking');
    }

    /**
     * @param string|null $stockTracking
     * @return $this
     */
    public function setStockTracking(string $stockTracking = null): static
    {
        return $this->set('stockTracking', $stockTracking);
    }

    /**
     * @return int|null
     */
    public function getStockLevel(): ?int
    {
        return $this->get('stockLevel');
    }

    /**
     * @param int|null $stockLevel
     * @return $this
     */
    public function setStockLevel(int $stockLevel = null): static
    {
        return $this->set('stockLevel', $stockLevel);
    }

    /**
     * @return int|null
     */
    public function getStockAlert(): ?int
    {
        return $this->get('stockAlert');
    }

    /**
     * @param int|null $stockAlert
     * @return $this
     */
    public function setStockAlert(int $stockAlert = null): static
    {
        return $this->set('stockAlert', $stockAlert);
    }

    /**
     * @return int|null
     */
    public function getStockMinimum(): ?int
    {
        return $this->get('stockMinimum');
    }

    /**
     * @param int|null $stockMinimum
     * @return $this
     */
    public function setStockMinimum(int $stockMinimum = null): static
    {
        return $this->set('stockMinimum', $stockMinimum);
    }

    /**
     * @return int|null
     */
    public function getStockSold(): ?int
    {
        return $this->get('stockSold');
    }

    /**
     * @param int|null $stockSold
     * @return $this
     */
    public function setStockSold(int $stockSold = null): static
    {
        return $this->set('stockSold', $stockSold);
    }

    /**
     * @return int|null
     */
    public function getStockBuyMininum(): ?int
    {
        return $this->get('stockBuyMininum');
    }

    /**
     * @param int|null $stockBuyMininum
     * @return $this
     */
    public function setStockBuyMininum(int $stockBuyMininum = null): static
    {
        return $this->set('stockBuyMininum', $stockBuyMininum);
    }

    /**
     * @return int|null
     */
    public function getStockBuyMinimum(): ?int
    {
        return $this->get('stockBuyMinimum');
    }

    /**
     * @param int|null $stockBuyMinimum
     * @return $this
     */
    public function setStockBuyMinimum(int $stockBuyMinimum = null): static
    {
        return $this->set('stockBuyMinimum', $stockBuyMinimum);
    }

    /**
     * @return int|null
     */
    public function getStockBuyMaximum(): ?int
    {
        return $this->get('stockBuyMaximum');
    }

    /**
     * @param int|null $stockBuyMaximum
     * @return $this
     */
    public function setStockBuyMaximum(int $stockBuyMaximum = null): static
    {
        return $this->set('stockBuyMaximum', $stockBuyMaximum);
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
     * @return string|null
     */
    public function getWeightValue(): ?string
    {
        return $this->get('weightValue');
    }

    /**
     * @param string|null $weightValue
     * @return $this
     */
    public function setWeightValue(string $weightValue = null): static
    {
        return $this->set('weightValue', $weightValue);
    }

    /**
     * @return string|null
     */
    public function getWeightUnit(): ?string
    {
        return $this->get('weightUnit');
    }

    /**
     * @param string|null $weightUnit
     * @return $this
     */
    public function setWeightUnit(string $weightUnit = null): static
    {
        return $this->set('weightUnit', $weightUnit);
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
    public function getVolumeValue(): ?int
    {
        return $this->get('volumeValue');
    }

    /**
     * @param int|null $volumeValue
     * @return $this
     */
    public function setVolumeValue(int $volumeValue = null): static
    {
        return $this->set('volumeValue', $volumeValue);
    }

    /**
     * @return string|null
     */
    public function getVolumeUnit(): ?string
    {
        return $this->get('volumeUnit');
    }

    /**
     * @param string|null $volumeUnit
     * @return $this
     */
    public function setVolumeUnit(string $volumeUnit = null): static
    {
        return $this->set('volumeUnit', $volumeUnit);
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
     * @return string|null
     */
    public function getSizeXValue(): ?string
    {
        return $this->get('sizeXValue');
    }

    /**
     * @param string|null $sizeXValue
     * @return $this
     */
    public function setSizeXValue(string $sizeXValue = null): static
    {
        return $this->set('sizeXValue', $sizeXValue);
    }

    /**
     * @return string|null
     */
    public function getSizeYValue(): ?string
    {
        return $this->get('sizeYValue');
    }

    /**
     * @param string|null $sizeYValue
     * @return $this
     */
    public function setSizeYValue(string $sizeYValue = null): static
    {
        return $this->set('sizeYValue', $sizeYValue);
    }

    /**
     * @return string|null
     */
    public function getSizeZValue(): ?string
    {
        return $this->get('sizeZValue');
    }

    /**
     * @param string|null $sizeZValue
     * @return $this
     */
    public function setSizeZValue(string $sizeZValue = null): static
    {
        return $this->set('sizeZValue', $sizeZValue);
    }

    /**
     * @return string|null
     */
    public function getSizeUnit(): ?string
    {
        return $this->get('sizeUnit');
    }

    /**
     * @param string|null $sizeUnit
     * @return $this
     */
    public function setSizeUnit(string $sizeUnit = null): static
    {
        return $this->set('sizeUnit', $sizeUnit);
    }

    /**
     * @return bool|null
     */
    public function getMatrix(): ?bool
    {
        return $this->get('matrix');
    }

    /**
     * @param bool|null $matrix
     * @return $this
     */
    public function setMatrix(bool $matrix = null): static
    {
        return $this->set('matrix', $matrix);
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
    public function getTaxType(): ?string
    {
        return $this->get('taxType');
    }

    /**
     * @param string|null $taxType
     * @return $this
     */
    public function setTaxType(string $taxType = null): static
    {
        return $this->set('taxType', $taxType);
    }

    /**
     * @return Image|null
     */
    public function getImage(): ?Image
    {
        return $this->get('image');
    }

    /**
     * @param Image|null $image
     * @return $this
     */
    public function setImage(Image $image = null): static
    {
        return $this->set('image', $image);
    }

    /**
     * @return bool|null
     */
    public function getTax(): ?bool
    {
        return $this->get('tax');
    }

    /**
     * @param bool|null $tax
     * @return $this
     */
    public function setTax(bool $tax = null): static
    {
        return $this->set('tax', $tax);
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
     * @return ResourceCollection<VariantMovement>|null
     */
    public function getMovements(): ?ResourceCollection
    {
        return $this->relation('movements.resource.embedded', VariantMovement::class, true);
    }


    /**
     * @param ResourceCollection<VariantMovement>|null $movements
     * @return $this
     */
    public function setMovements(ResourceCollection $movements = null): static
    {
        $this->set('movements.resource.embedded', $movements);

        return $this;
    }

    /**
     * @return ResourceCollection<VariantMetafield>|null
     */
    public function getMetafields(): ?ResourceCollection
    {
        return $this->relation('metafields.resource.embedded', VariantMetafield::class, true);
    }


    /**
     * @param ResourceCollection<VariantMetafield>|null $metafields
     * @return $this
     */
    public function setMetafields(ResourceCollection $metafields = null): static
    {
        $this->set('metafields.resource.embedded', $metafields);

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getAdditionalcost(): ?bool
    {
        return $this->get('additionalcost');
    }

    /**
     * @param bool|null $additionalcost
     * @return $this
     */
    public function setAdditionalcost(bool $additionalcost = null): static
    {
        return $this->set('additionalcost', $additionalcost);
    }

    /**
     * @return array|null
     */
    public function getOptions(): ?array
    {
        return $this->get('options');
    }

    /**
     * @param array|null $options
     * @return $this
     */
    public function setOptions(array $options = null): static
    {
        return $this->set('options', $options);
    }

}
