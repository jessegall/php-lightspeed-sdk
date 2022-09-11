<?php

namespace JesseGall\LightspeedSDK\Resources;

class Discount extends Resource
{


    /**
     * @return string
     */
    public function get0(): string
    {
        return $this->get('0');
    }

    /**
     * @param string $0
     * @return $this
     */
    public function set0(string $0): static
            {
                return $this->set('0', $0);
            }

/**
 * @return string
 */
public
function get1(): string
{
    return $this->get('1');
}

/**
 * @param string $1
 * @return $this
 */
public
function set1(string $1): static
            {
                return $this->set('1', $1);
            }

            /**
             * @return string
             */
            public function get2(): string
{
    return $this->get('2');
}
            /**
             * @param string $2
             * @return $this
             */
            public function set2(string $2): static
            {
                return $this->set('2', $2);
            }

            /**
             * @return string
             */
            public function get3(): string
{
    return $this->get('3');
}
            /**
             * @param string $3
             * @return $this
             */
            public function set3(string $3): static
            {
                return $this->set('3', $3);
            }

            /**
             * @return string
             */
            public function get4(): string
{
    return $this->get('4');
}
            /**
             * @param string $4
             * @return $this
             */
            public function set4(string $4): static
            {
                return $this->set('4', $4);
            }

            /**
             * @return string
             */
            public function get5(): string
{
    return $this->get('5');
}
            /**
             * @param string $5
             * @return $this
             */
            public function set5(string $5): static
            {
                return $this->set('5', $5);
            }

            /**
             * @return string
             */
            public function get6(): string
{
    return $this->get('6');
}
            /**
             * @param string $6
             * @return $this
             */
            public function set6(string $6): static
            {
                return $this->set('6', $6);
            }

            /**
             * @return bool
             */
            public function getId(): bool
{
    return $this->get('id');
}
            /**
             * @param bool $id
             * @return $this
             */
            public function setId(bool $id): static
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
            public function getIsActive(): bool
{
    return $this->get('isActive');
}
            /**
             * @param bool $isActive
             * @return $this
             */
            public function setIsActive(bool $isActive): static
{
    return $this->set('isActive', $isActive);
}

            /**
             * @return string
             */
            public function getStartDate(): string
{
    return $this->get('startDate');
}
            /**
             * @param string $startDate
             * @return $this
             */
            public function setStartDate(string $startDate): static
{
    return $this->set('startDate', $startDate);
}

            /**
             * @return string
             */
            public function getEndDate(): string
{
    return $this->get('endDate');
}
            /**
             * @param string $endDate
             * @return $this
             */
            public function setEndDate(string $endDate): static
{
    return $this->set('endDate', $endDate);
}

            /**
             * @return bool
             */
            public function getType(): bool
{
    return $this->get('type');
}
            /**
             * @param bool $type
             * @return $this
             */
            public function setType(bool $type): static
{
    return $this->set('type', $type);
}

            /**
             * @return int
             */
            public function getDiscount(): int
{
    return $this->get('discount');
}
            /**
             * @param int $discount
             * @return $this
             */
            public function setDiscount(int $discount): static
{
    return $this->set('discount', $discount);
}

            /**
             * @return string
             */
            public function getApplyTo(): string
{
    return $this->get('applyTo');
}
            /**
             * @param string $applyTo
             * @return $this
             */
            public function setApplyTo(string $applyTo): static
{
    return $this->set('applyTo', $applyTo);
}

            /**
             * @return string
             */
            public function getShipment(): string
{
    return $this->get('shipment');
}
            /**
             * @param string $shipment
             * @return $this
             */
            public function setShipment(string $shipment): static
{
    return $this->set('shipment', $shipment);
}

            /**
             * @return int
             */
            public function getUsageLimit(): int
{
    return $this->get('usageLimit');
}
            /**
             * @param int $usageLimit
             * @return $this
             */
            public function setUsageLimit(int $usageLimit): static
{
    return $this->set('usageLimit', $usageLimit);
}

            /**
             * @return int
             */
            public function getTimesUsed(): int
{
    return $this->get('timesUsed');
}
            /**
             * @param int $timesUsed
             * @return $this
             */
            public function setTimesUsed(int $timesUsed): static
{
    return $this->set('timesUsed', $timesUsed);
}

            /**
             * @return int
             */
            public function getMinimumAmount(): int
{
    return $this->get('minimumAmount');
}
            /**
             * @param int $minimumAmount
             * @return $this
             */
            public function setMinimumAmount(int $minimumAmount): static
{
    return $this->set('minimumAmount', $minimumAmount);
}

            /**
             * @return bool
             */
            public function getBefore_tax(): bool
{
    return $this->get('before_tax');
}
            /**
             * @param bool $before_tax
             * @return $this
             */
            public function setBefore_tax(bool $before_tax): static
{
    return $this->set('before_tax', $before_tax);
}

            /**
             * @return bool
             */
            public function getMinimum_after(): bool
{
    return $this->get('minimum_after');
}
            /**
             * @param bool $minimum_after
             * @return $this
             */
            public function setMinimum_after(bool $minimum_after): static
{
    return $this->set('minimum_after', $minimum_after);
}

            /**
             * @return string
             */
            public function getCode(): string
{
    return $this->get('code');
}
            /**
             * @param string $code
             * @return $this
             */
            public function setCode(string $code): static
{
    return $this->set('code', $code);
}

            /**
             * @return Category[]
             */
            public function getCategories(): array
{
    return $this->mapTo('categories', Category::class);
}
            /**
             * @param Category[] $categories
             * @return $this
             */
            public function setCategories(array $categories): static
{
    $this->set('categories', $categories);

    return $this;
}

            /**
             * @return bool
             */
            public function getIsVisible(): bool
{
    return $this->get('isVisible');
}
            /**
             * @param bool $isVisible
             * @return $this
             */
            public function setIsVisible(bool $isVisible): static
{
    return $this->set('isVisible', $isVisible);
}

            /**
             * @return int
             */
            public function getDepth(): int
{
    return $this->get('depth');
}
            /**
             * @param int $depth
             * @return $this
             */
            public function setDepth(int $depth): static
{
    return $this->set('depth', $depth);
}

            /**
             * @return array
             */
            public function getPath(): array
{
    return $this->get('path');
}
            /**
             * @param array $path
             * @return $this
             */
            public function setPath(array $path): static
{
    return $this->set('path', $path);
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
            public function getSorting(): string
{
    return $this->get('sorting');
}
            /**
             * @param string $sorting
             * @return $this
             */
            public function setSorting(string $sorting): static
{
    return $this->set('sorting', $sorting);
}

            /**
             * @return string
             */
            public function getUrl(): string
{
    return $this->get('url');
}
            /**
             * @param string $url
             * @return $this
             */
            public function setUrl(string $url): static
{
    return $this->set('url', $url);
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
            public function getFulltitle(): string
{
    return $this->get('fulltitle');
}
            /**
             * @param string $fulltitle
             * @return $this
             */
            public function setFulltitle(string $fulltitle): static
{
    return $this->set('fulltitle', $fulltitle);
}

            /**
             * @return string
             */
            public function getDescription(): string
{
    return $this->get('description');
}
            /**
             * @param string $description
             * @return $this
             */
            public function setDescription(string $description): static
{
    return $this->set('description', $description);
}

            /**
             * @return string
             */
            public function getContent(): string
{
    return $this->get('content');
}
            /**
             * @param string $content
             * @return $this
             */
            public function setContent(string $content): static
{
    return $this->set('content', $content);
}

            /**
             * @return bool
             */
            public function getImage(): bool
{
    return $this->get('image');
}
            /**
             * @param bool $image
             * @return $this
             */
            public function setImage(bool $image): static
{
    return $this->set('image', $image);
}

            /**
             * @return bool
             */
            public function getParent(): bool
{
    return $this->get('parent');
}
            /**
             * @param bool $parent
             * @return $this
             */
            public function setParent(bool $parent): static
{
    return $this->set('parent', $parent);
}

            /**
             * @return Child[]
             */
            public function getChildren(): array
{
    return $this->mapTo('children', Child::class);
}
            /**
             * @param Child[] $children
             * @return $this
             */
            public function setChildren(array $children): static
{
    $this->set('children', $children);

    return $this;
}

            /**
             * @return array
             */
            public function getResource(): array
{
    return $this->get('resource');
}
            /**
             * @param array $resource
             * @return $this
             */
            public function setResource(array $resource): static
{
    return $this->set('resource', $resource);
}

            /**
             * @return string
             */
            public function getLink(): string
{
    return $this->get('link');
}
            /**
             * @param string $link
             * @return $this
             */
            public function setLink(string $link): static
{
    return $this->set('link', $link);
}

            /**
             * @return array
             */
            public function getProducts(): array
{
    return $this->get('products');
}
            /**
             * @param array $products
             * @return $this
             */
            public function setProducts(array $products): static
{
    return $this->set('products', $products);
}

            /**
             * @return string
             */
            public function getVisibility(): string
{
    return $this->get('visibility');
}
            /**
             * @param string $visibility
             * @return $this
             */
            public function setVisibility(string $visibility): static
{
    return $this->set('visibility', $visibility);
}

            /**
             * @return bool
             */
            public function getHasMatrix(): bool
{
    return $this->get('hasMatrix');
}
            /**
             * @param bool $hasMatrix
             * @return $this
             */
            public function setHasMatrix(bool $hasMatrix): static
{
    return $this->set('hasMatrix', $hasMatrix);
}

            /**
             * @return string
             */
            public function getData01(): string
{
    return $this->get('data01');
}
            /**
             * @param string $data01
             * @return $this
             */
            public function setData01(string $data01): static
{
    return $this->set('data01', $data01);
}

            /**
             * @return string
             */
            public function getData02(): string
{
    return $this->get('data02');
}
            /**
             * @param string $data02
             * @return $this
             */
            public function setData02(string $data02): static
{
    return $this->set('data02', $data02);
}

            /**
             * @return string
             */
            public function getData03(): string
{
    return $this->get('data03');
}
            /**
             * @param string $data03
             * @return $this
             */
            public function setData03(string $data03): static
{
    return $this->set('data03', $data03);
}

            /**
             * @return array
             */
            public function getSet(): array
{
    return $this->get('set');
}
            /**
             * @param array $set
             * @return $this
             */
            public function setSet(array $set): static
{
    return $this->set('set', $set);
}

            /**
             * @return string
             */
            public function getName(): string
{
    return $this->get('name');
}
            /**
             * @param string $name
             * @return $this
             */
            public function setName(string $name): static
{
    return $this->set('name', $name);
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

            /**
             * @return array
             */
            public function getValues(): array
{
    return $this->get('values');
}
            /**
             * @param array $values
             * @return $this
             */
            public function setValues(array $values): static
{
    return $this->set('values', $values);
}

            /**
             * @return Brand
             */
            public function getBrand(): Brand
{
    return $this->mapTo('brand', Brand::class);
}
            /**
             * @param Brand $brand
             * @return $this
             */
            public function setBrand(Brand $brand): static
{
    $this->set('brand', $brand);

    return $this;
}

            /**
             * @return bool
             */
            public function getDeliverydate(): bool
{
    return $this->get('deliverydate');
}
            /**
             * @param bool $deliverydate
             * @return $this
             */
            public function setDeliverydate(bool $deliverydate): static
{
    return $this->set('deliverydate', $deliverydate);
}

            /**
             * @return bool
             */
            public function getImages(): bool
{
    return $this->get('images');
}
            /**
             * @param bool $images
             * @return $this
             */
            public function setImages(bool $images): static
{
    return $this->set('images', $images);
}

            /**
             * @return Relation[]
             */
            public function getRelations(): array
{
    return $this->mapTo('relations', Relation::class);
}
            /**
             * @param Relation[] $relations
             * @return $this
             */
            public function setRelations(array $relations): static
{
    $this->set('relations', $relations);

    return $this;
}

            /**
             * @return Metafield[]
             */
            public function getMetafields(): array
{
    return $this->mapTo('metafields', Metafield::class);
}
            /**
             * @param Metafield[] $metafields
             * @return $this
             */
            public function setMetafields(array $metafields): static
{
    $this->set('metafields', $metafields);

    return $this;
}

            /**
             * @return Review[]
             */
            public function getReviews(): array
{
    return $this->mapTo('reviews', Review::class);
}
            /**
             * @param Review[] $reviews
             * @return $this
             */
            public function setReviews(array $reviews): static
{
    $this->set('reviews', $reviews);

    return $this;
}

            /**
             * @return Attribute[]
             */
            public function getAttributes(): array
{
    return $this->mapTo('attributes', Attribute::class);
}
            /**
             * @param Attribute[] $attributes
             * @return $this
             */
            public function setAttributes(array $attributes): static
{
    $this->set('attributes', $attributes);

    return $this;
}

            /**
             * @return Supplier
             */
            public function getSupplier(): Supplier
{
    return $this->mapTo('supplier', Supplier::class);
}
            /**
             * @param Supplier $supplier
             * @return $this
             */
            public function setSupplier(Supplier $supplier): static
{
    $this->set('supplier', $supplier);

    return $this;
}

            /**
             * @return Tag[]
             */
            public function getTags(): array
{
    return $this->mapTo('tags', Tag::class);
}
            /**
             * @param Tag[] $tags
             * @return $this
             */
            public function setTags(array $tags): static
{
    $this->set('tags', $tags);

    return $this;
}

            /**
             * @return Variant[]
             */
            public function getVariants(): array
{
    return $this->mapTo('variants', Variant::class);
}
            /**
             * @param Variant[] $variants
             * @return $this
             */
            public function setVariants(array $variants): static
{
    $this->set('variants', $variants);

    return $this;
}

            /**
             * @return Movement[]
             */
            public function getMovements(): array
{
    return $this->mapTo('movements', Movement::class);
}
            /**
             * @param Movement[] $movements
             * @return $this
             */
            public function setMovements(array $movements): static
{
    $this->set('movements', $movements);

    return $this;
}

}
