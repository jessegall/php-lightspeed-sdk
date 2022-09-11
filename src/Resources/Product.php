<?php

namespace JesseGall\LightspeedSDK\Resources;

class Product extends Resource
{


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
     * @return Deliverydate
     */
    public function getDeliverydate(): Deliverydate
    {
        return $this->mapTo('deliverydate', Deliverydate::class);
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
     * @return string
     */
    public function getExtension(): string
    {
        return $this->get('extension');
    }

    /**
     * @param string $extension
     * @return $this
     */
    public function setExtension(string $extension): static
    {
        return $this->set('extension', $extension);
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->get('size');
    }

    /**
     * @param int $size
     * @return $this
     */
    public function setSize(int $size): static
    {
        return $this->set('size', $size);
    }

    /**
     * @return string
     */
    public function getThumb(): string
    {
        return $this->get('thumb');
    }

    /**
     * @param string $thumb
     * @return $this
     */
    public function setThumb(string $thumb): static
    {
        return $this->set('thumb', $thumb);
    }

    /**
     * @return string
     */
    public function getSrc(): string
    {
        return $this->get('src');
    }

    /**
     * @param string $src
     * @return $this
     */
    public function setSrc(string $src): static
    {
        return $this->set('src', $src);
    }

    /**
     * @return Image[]
     */
    public function getImages(): array
    {
        return $this->mapTo('images', Image::class);
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
