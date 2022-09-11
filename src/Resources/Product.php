<?php

namespace JesseGall\LightspeedSDK\Resources;

class Product extends Resource
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
        return $this->mapTo('brand.resource.embedded', Brand::class);
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
     * @return Category[]
     */
    public function getCategories(): array
    {
        return $this->mapTo('categories.resource.embedded', Category::class);
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
     * @return Deliverydate
     */
    public function getDeliverydate(): Deliverydate
    {
        return $this->mapTo('deliverydate.resource.embedded', Deliverydate::class);
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
     * @return Image[]
     */
    public function getImages(): array
    {
        return $this->mapTo('images.resource.embedded', Image::class);
    }


    /**
     * @param Image[] $images
     * @return $this
     */
    public function setImages(array $images): static
    {
        $this->set('images', $images);

        return $this;
    }

    /**
     * @return Relation[]
     */
    public function getRelations(): array
    {
        return $this->mapTo('relations.resource.embedded', Relation::class);
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
        return $this->mapTo('metafields.resource.embedded', Metafield::class);
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
        return $this->mapTo('reviews.resource.embedded', Review::class);
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
     * @return Attribute[]
     */
    public function getAttributes(): array
    {
        return $this->mapTo('attributes.resource.embedded', Attribute::class);
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
        return $this->mapTo('supplier.resource.embedded', Supplier::class);
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
     * @return Tag[]
     */
    public function getTags(): array
    {
        return $this->mapTo('tags.resource.embedded', Tag::class);
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
        return $this->mapTo('variants.resource.embedded', Variant::class);
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
        return $this->mapTo('movements.resource.embedded', Movement::class);
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
