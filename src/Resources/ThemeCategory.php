<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

class ThemeCategory extends Resource
{

   protected string $url = '/themes/{id}/categories';

   

            /**
            * @return int
            */
            public function getShopId(): int
            {
                return $this->get('shopId');       
            }
            /**
             * @param int $shopId
             * @return $this
             */
            public function setShopId(int $shopId): static
            {
                return $this->set('shopId', $shopId);
            }

            /**
            * @return int
            */
            public function getCategoryId(): int
            {
                return $this->get('categoryId');       
            }
            /**
             * @param int $categoryId
             * @return $this
             */
            public function setCategoryId(int $categoryId): static
            {
                return $this->set('categoryId', $categoryId);
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
