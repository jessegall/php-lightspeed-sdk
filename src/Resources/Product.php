<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class Product extends Resource
{

    protected string $url = '/products';


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
     * @return Brand
     */
    public function getBrand(): Brand
    {
        return $this->relation('brand.resource.embedded', Brand::class);
    }


    /**
     * @return int
     */
    public function getBrandId(): int
    {
        return $this->get('brand.resource.id');
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
     * @return ResourceCollection<CategoriesProduct>
     */
    public function getCategories(): ResourceCollection
    {
        return $this->relation('categories.resource.embedded', CategoriesProduct::class, true);
    }


    /**
     * @param ResourceCollection<CategoriesProduct> $categories
     * @return $this
     */
    public function setCategories(ResourceCollection $categories): static
    {
        $this->set('categories', $categories);

        return $this;
    }

    /**
     * @return Deliverydate
     */
    public function getDeliverydate(): Deliverydate
    {
        return $this->relation('deliverydate.resource.embedded', Deliverydate::class);
    }


    /**
     * @return int
     */
    public function getDeliverydateId(): int
    {
        return $this->get('deliverydate.resource.id');
    }

    /**
     * @param Deliverydate $deliverydate
     * @return $this
     */
    public function setDeliverydate(Deliverydate $deliverydate): static
    {
        $this->set('deliverydate', $deliverydate);

        return $this;
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
     * @return ResourceCollection<ProductImage>
     */
    public function getImages(): ResourceCollection
    {
        return $this->relation('images.resource.embedded', ProductImage::class, true);
    }


    /**
     * @param ResourceCollection<ProductImage> $images
     * @return $this
     */
    public function setImages(ResourceCollection $images): static
    {
        $this->set('images', $images);

        return $this;
    }

    /**
     * @return ResourceCollection<ProductRelation>
     */
    public function getRelations(): ResourceCollection
    {
        return $this->relation('relations.resource.embedded', ProductRelation::class, true);
    }


    /**
     * @param ResourceCollection<ProductRelation> $relations
     * @return $this
     */
    public function setRelations(ResourceCollection $relations): static
    {
        $this->set('relations', $relations);

        return $this;
    }

    /**
     * @return ResourceCollection<ProductMetafield>
     */
    public function getMetafields(): ResourceCollection
    {
        return $this->relation('metafields.resource.embedded', ProductMetafield::class, true);
    }


    /**
     * @param ResourceCollection<ProductMetafield> $metafields
     * @return $this
     */
    public function setMetafields(ResourceCollection $metafields): static
    {
        $this->set('metafields', $metafields);

        return $this;
    }

    /**
     * @return ResourceCollection<Review>
     */
    public function getReviews(): ResourceCollection
    {
        return $this->relation('reviews.resource.embedded', Review::class, true);
    }


    /**
     * @param ResourceCollection<Review> $reviews
     * @return $this
     */
    public function setReviews(ResourceCollection $reviews): static
    {
        $this->set('reviews', $reviews);

        return $this;
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
     * @return ResourceCollection<ProductAttribute>
     */
    public function getAttributes(): ResourceCollection
    {
        return $this->relation('attributes.resource.embedded', ProductAttribute::class, true);
    }


    /**
     * @param ResourceCollection<ProductAttribute> $attributes
     * @return $this
     */
    public function setAttributes(ResourceCollection $attributes): static
    {
        $this->set('attributes', $attributes);

        return $this;
    }

    /**
     * @return Supplier
     */
    public function getSupplier(): Supplier
    {
        return $this->relation('supplier.resource.embedded', Supplier::class);
    }


    /**
     * @return int
     */
    public function getSupplierId(): int
    {
        return $this->get('supplier.resource.id');
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
     * @return ResourceCollection<TagsProduct>
     */
    public function getTags(): ResourceCollection
    {
        return $this->relation('tags.resource.embedded', TagsProduct::class, true);
    }


    /**
     * @param ResourceCollection<TagsProduct> $tags
     * @return $this
     */
    public function setTags(ResourceCollection $tags): static
    {
        $this->set('tags', $tags);

        return $this;
    }

    /**
     * @return ResourceCollection<Variant>
     */
    public function getVariants(): ResourceCollection
    {
        return $this->relation('variants.resource.embedded', Variant::class, true);
    }


    /**
     * @param ResourceCollection<Variant> $variants
     * @return $this
     */
    public function setVariants(ResourceCollection $variants): static
    {
        $this->set('variants', $variants);

        return $this;
    }

    /**
     * @return ResourceCollection<VariantMovement>
     */
    public function getMovements(): ResourceCollection
    {
        return $this->relation('movements.resource.embedded', VariantMovement::class, true);
    }


    /**
     * @param ResourceCollection<VariantMovement> $movements
     * @return $this
     */
    public function setMovements(ResourceCollection $movements): static
    {
        $this->set('movements', $movements);

        return $this;
    }

}
