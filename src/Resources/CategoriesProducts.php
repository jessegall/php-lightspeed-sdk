<?php

namespace JesseGall\LightspeedSDK\Resources;

class CategoriesProducts extends Resource
{


    /**
     * @return array
     */
    public function get0(): array
    {
        return $this->get('0');
    }

    /**
     * @param array $0
     * @return $this
     */
    public function set0(array $0): static
            {
                return $this->set('0', $0);
            }

/**
 * @return array
 */
public
function get1(): array
{
    return $this->get('1');
}

/**
 * @param array $1
 * @return $this
 */
public
function set1(array $1): static
            {
                return $this->set('1', $1);
            }

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
             * @return Category
             */
            public function getCategory(): Category
{
    return $this->mapTo('category', Category::class);
}
            /**
             * @param Category $category
             * @return $this
             */
            public function setCategory(Category $category): static
{
    $this->set('category', $category);

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
             * @return Product
             */
            public function getProduct(): Product
{
    return $this->mapTo('product', Product::class);
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

}
