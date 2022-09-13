<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class Category extends Resource
{

    protected string $url = '/categories';


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
     * @return string
     */
    public function getType(): string
    {
        return $this->get('type');
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type): static
    {
        return $this->set('type', $type);
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
     * @return Category
     */
    public function getParent(): Category
    {
        return $this->relation('parent.resource.embedded', Category::class);
    }


    /**
     * @return int
     */
    public function getParentId(): int
    {
        return $this->get('parent.resource.id');
    }

    /**
     * @param Category $parent
     * @return $this
     */
    public function setParent(Category $parent): static
    {
        $this->set('parent.resource.embedded', $parent);

        return $this;
    }

    /**
     * @return ResourceCollection<Category>
     */
    public function getChildren(): ResourceCollection
    {
        return $this->relation('children.resource.embedded', Category::class, true);
    }


    /**
     * @param ResourceCollection<Category> $children
     * @return $this
     */
    public function setChildren(ResourceCollection $children): static
    {
        $this->set('children.resource.embedded', $children);

        return $this;
    }

    /**
     * @return ResourceCollection<CategoriesProduct>
     */
    public function getProducts(): ResourceCollection
    {
        return $this->relation('products.resource.embedded', CategoriesProduct::class, true);
    }


    /**
     * @param ResourceCollection<CategoriesProduct> $products
     * @return $this
     */
    public function setProducts(ResourceCollection $products): static
    {
        $this->set('products.resource.embedded', $products);

        return $this;
    }

}
