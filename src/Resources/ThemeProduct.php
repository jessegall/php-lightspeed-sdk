<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

class ThemeProduct extends Resource
{

   protected string $url = '/themes/{id}/products';

   

            /**
            * @return int
            */
            public function getProductId(): int
            {
                return $this->get('productId');       
            }
            /**
             * @param int $productId
             * @return $this
             */
            public function setProductId(int $productId): static
            {
                return $this->set('productId', $productId);
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

}
