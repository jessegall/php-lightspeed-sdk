<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * CategoriesProduct
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/categoryproduct
 */
class CategoriesProduct extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/categories/{id}/products';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'categoriesProduct';


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
     * @return Category|null
     */
    public function getCategory(): ?Category
    {
        return $this->relation('category.resource.embedded', Category::class);
    }


    /**
     * @return int|null
     */
    public function getCategoryId(): ?int
    {
        return $this->get('category.resource.id');
    }

    /**
     * @param Category|null $category
     * @return $this
     */
    public function setCategory(Category $category = null): static
    {
        $this->set('category.resource.embedded', $category);

        return $this;
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

}
