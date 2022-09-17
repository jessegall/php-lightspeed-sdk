<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Category
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/category
 */
class Category extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/categories';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'category';


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
     * @return int|null
     */
    public function getDepth(): ?int
    {
        return $this->get('depth');
    }

    /**
     * @param int|null $depth
     * @return $this
     */
    public function setDepth(int $depth = null): static
    {
        return $this->set('depth', $depth);
    }

    /**
     * @return array|null
     */
    public function getPath(): ?array
    {
        return $this->get('path');
    }

    /**
     * @param array|null $path
     * @return $this
     */
    public function setPath(array $path = null): static
    {
        return $this->set('path', $path);
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->get('type');
    }

    /**
     * @param string|null $type
     * @return $this
     */
    public function setType(string $type = null): static
    {
        return $this->set('type', $type);
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
    public function getSorting(): ?string
    {
        return $this->get('sorting');
    }

    /**
     * @param string|null $sorting
     * @return $this
     */
    public function setSorting(string $sorting = null): static
    {
        return $this->set('sorting', $sorting);
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
     * @return bool|null
     */
    public function getImage(): ?bool
    {
        return $this->get('image');
    }

    /**
     * @param bool|null $image
     * @return $this
     */
    public function setImage(bool $image = null): static
    {
        return $this->set('image', $image);
    }

    /**
     * @return Category|null
     */
    public function getParent(): ?Category
    {
        return $this->relation('parent.resource.embedded', Category::class);
    }


    /**
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->get('parent.resource.id');
    }

    /**
     * @param Category|null $parent
     * @return $this
     */
    public function setParent(Category $parent = null): static
    {
        $this->set('parent.resource.embedded', $parent);

        return $this;
    }

    /**
     * @return ResourceCollection<Category>|null
     */
    public function getChildren(): ?ResourceCollection
    {
        return $this->relation('children.resource.embedded', Category::class, true);
    }


    /**
     * @param ResourceCollection<Category>|null $children
     * @return $this
     */
    public function setChildren(ResourceCollection $children = null): static
    {
        $this->set('children.resource.embedded', $children);

        return $this;
    }

    /**
     * @return ResourceCollection<CategoriesProduct>|null
     */
    public function getProducts(): ?ResourceCollection
    {
        return $this->relation('products.resource.embedded', CategoriesProduct::class, true);
    }


    /**
     * @param ResourceCollection<CategoriesProduct>|null $products
     * @return $this
     */
    public function setProducts(ResourceCollection $products = null): static
    {
        $this->set('products.resource.embedded', $products);

        return $this;
    }

}
