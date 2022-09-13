<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

class CategoriesProduct extends Resource
{

   protected string $url = '/categories/{id}/products';

   

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
                return $this->relation('category.resource.embedded', Category::class ); 
            }
            
            
            /**
            * @return int
            */
            public function getCategoryId(): int 
            {
                return $this->get('category.resource.id'); 
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
            * @return Product
            */
            public function getProduct(): Product 
            {
                return $this->relation('product.resource.embedded', Product::class ); 
            }
            
            
            /**
            * @return int
            */
            public function getProductId(): int 
            {
                return $this->get('product.resource.id'); 
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
