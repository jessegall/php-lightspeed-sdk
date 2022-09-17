<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Product
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/product
 */
class Product extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/products';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'product';


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
    public function getIsVisible(): ?bool
    {
        return $this->get('isVisible');
    }

    /**
     * @param bool|null $isVisible
     * @return $this
     */
    public function setIsVisible(bool $isVisible = null): static
    {
        return $this->set('isVisible', $isVisible);
    }

    /**
     * @return string|null
     */
    public function getVisibility(): ?string
    {
        return $this->get('visibility');
    }

    /**
     * @param string|null $visibility
     * @return $this
     */
    public function setVisibility(string $visibility = null): static
    {
        return $this->set('visibility', $visibility);
    }

    /**
     * @return bool|null
     */
    public function getHasMatrix(): ?bool
    {
        return $this->get('hasMatrix');
    }

    /**
     * @param bool|null $hasMatrix
     * @return $this
     */
    public function setHasMatrix(bool $hasMatrix = null): static
    {
        return $this->set('hasMatrix', $hasMatrix);
    }

    /**
     * @return string|null
     */
    public function getData01(): ?string
    {
        return $this->get('data01');
    }

    /**
     * @param string|null $data01
     * @return $this
     */
    public function setData01(string $data01 = null): static
    {
        return $this->set('data01', $data01);
    }

    /**
     * @return string|null
     */
    public function getData02(): ?string
    {
        return $this->get('data02');
    }

    /**
     * @param string|null $data02
     * @return $this
     */
    public function setData02(string $data02 = null): static
    {
        return $this->set('data02', $data02);
    }

    /**
     * @return string|null
     */
    public function getData03(): ?string
    {
        return $this->get('data03');
    }

    /**
     * @param string|null $data03
     * @return $this
     */
    public function setData03(string $data03 = null): static
    {
        return $this->set('data03', $data03);
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->get('url');
    }

    /**
     * @param string|null $url
     * @return $this
     */
    public function setUrl(string $url = null): static
    {
        return $this->set('url', $url);
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
    public function getFulltitle(): ?string
    {
        return $this->get('fulltitle');
    }

    /**
     * @param string|null $fulltitle
     * @return $this
     */
    public function setFulltitle(string $fulltitle = null): static
    {
        return $this->set('fulltitle', $fulltitle);
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->get('description');
    }

    /**
     * @param string|null $description
     * @return $this
     */
    public function setDescription(string $description = null): static
    {
        return $this->set('description', $description);
    }

    /**
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->get('content');
    }

    /**
     * @param string|null $content
     * @return $this
     */
    public function setContent(string $content = null): static
    {
        return $this->set('content', $content);
    }

    /**
     * @return array|null
     */
    public function getSet(): ?array
    {
        return $this->get('set');
    }

    /**
     * @param array|null $set
     * @return $this
     */
    public function setSet(array $set = null): static
    {
        return $this->set('set', $set);
    }

    /**
     * @return Brand|null
     */
    public function getBrand(): ?Brand
    {
        return $this->relation('brand.resource.embedded', Brand::class);
    }


    /**
     * @return int|null
     */
    public function getBrandId(): ?int
    {
        return $this->get('brand.resource.id');
    }

    /**
     * @param Brand|null $brand
     * @return $this
     */
    public function setBrand(Brand $brand = null): static
    {
        $this->set('brand.resource.embedded', $brand);

        return $this;
    }

    /**
     * @return ResourceCollection<CategoriesProduct>|null
     */
    public function getCategories(): ?ResourceCollection
    {
        return $this->relation('categories.resource.embedded', CategoriesProduct::class, true);
    }


    /**
     * @param ResourceCollection<CategoriesProduct>|null $categories
     * @return $this
     */
    public function setCategories(ResourceCollection $categories = null): static
    {
        $this->set('categories.resource.embedded', $categories);

        return $this;
    }

    /**
     * @return Deliverydate|null
     */
    public function getDeliverydate(): ?Deliverydate
    {
        return $this->relation('deliverydate.resource.embedded', Deliverydate::class);
    }


    /**
     * @return int|null
     */
    public function getDeliverydateId(): ?int
    {
        return $this->get('deliverydate.resource.id');
    }

    /**
     * @param Deliverydate|null $deliverydate
     * @return $this
     */
    public function setDeliverydate(Deliverydate $deliverydate = null): static
    {
        $this->set('deliverydate.resource.embedded', $deliverydate);

        return $this;
    }

    /**
     * @return array|null
     */
    public function getImage(): ?array
    {
        return $this->get('image');
    }

    /**
     * @param array|null $image
     * @return $this
     */
    public function setImage(array $image = null): static
    {
        return $this->set('image', $image);
    }

    /**
     * @return ResourceCollection<ProductImage>|null
     */
    public function getImages(): ?ResourceCollection
    {
        return $this->relation('images.resource.embedded', ProductImage::class, true);
    }


    /**
     * @param ResourceCollection<ProductImage>|null $images
     * @return $this
     */
    public function setImages(ResourceCollection $images = null): static
    {
        $this->set('images.resource.embedded', $images);

        return $this;
    }

    /**
     * @return ResourceCollection<ProductRelation>|null
     */
    public function getRelations(): ?ResourceCollection
    {
        return $this->relation('relations.resource.embedded', ProductRelation::class, true);
    }


    /**
     * @param ResourceCollection<ProductRelation>|null $relations
     * @return $this
     */
    public function setRelations(ResourceCollection $relations = null): static
    {
        $this->set('relations.resource.embedded', $relations);

        return $this;
    }

    /**
     * @return ResourceCollection<ProductMetafield>|null
     */
    public function getMetafields(): ?ResourceCollection
    {
        return $this->relation('metafields.resource.embedded', ProductMetafield::class, true);
    }


    /**
     * @param ResourceCollection<ProductMetafield>|null $metafields
     * @return $this
     */
    public function setMetafields(ResourceCollection $metafields = null): static
    {
        $this->set('metafields.resource.embedded', $metafields);

        return $this;
    }

    /**
     * @return ResourceCollection<Review>|null
     */
    public function getReviews(): ?ResourceCollection
    {
        return $this->relation('reviews.resource.embedded', Review::class, true);
    }


    /**
     * @param ResourceCollection<Review>|null $reviews
     * @return $this
     */
    public function setReviews(ResourceCollection $reviews = null): static
    {
        $this->set('reviews.resource.embedded', $reviews);

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getType(): ?bool
    {
        return $this->get('type');
    }

    /**
     * @param bool|null $type
     * @return $this
     */
    public function setType(bool $type = null): static
    {
        return $this->set('type', $type);
    }

    /**
     * @return ResourceCollection<ProductAttribute>|null
     */
    public function getAttributes(): ?ResourceCollection
    {
        return $this->relation('attributes.resource.embedded', ProductAttribute::class, true);
    }


    /**
     * @param ResourceCollection<ProductAttribute>|null $attributes
     * @return $this
     */
    public function setAttributes(ResourceCollection $attributes = null): static
    {
        $this->set('attributes.resource.embedded', $attributes);

        return $this;
    }

    /**
     * @return Supplier|null
     */
    public function getSupplier(): ?Supplier
    {
        return $this->relation('supplier.resource.embedded', Supplier::class);
    }


    /**
     * @return int|null
     */
    public function getSupplierId(): ?int
    {
        return $this->get('supplier.resource.id');
    }

    /**
     * @param Supplier|null $supplier
     * @return $this
     */
    public function setSupplier(Supplier $supplier = null): static
    {
        $this->set('supplier.resource.embedded', $supplier);

        return $this;
    }

    /**
     * @return ResourceCollection<TagsProduct>|null
     */
    public function getTags(): ?ResourceCollection
    {
        return $this->relation('tags.resource.embedded', TagsProduct::class, true);
    }


    /**
     * @param ResourceCollection<TagsProduct>|null $tags
     * @return $this
     */
    public function setTags(ResourceCollection $tags = null): static
    {
        $this->set('tags.resource.embedded', $tags);

        return $this;
    }

    /**
     * @return ResourceCollection<Variant>|null
     */
    public function getVariants(): ?ResourceCollection
    {
        return $this->relation('variants.resource.embedded', Variant::class, true);
    }


    /**
     * @param ResourceCollection<Variant>|null $variants
     * @return $this
     */
    public function setVariants(ResourceCollection $variants = null): static
    {
        $this->set('variants.resource.embedded', $variants);

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

}
