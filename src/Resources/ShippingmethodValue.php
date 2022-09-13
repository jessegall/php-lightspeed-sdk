<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

class ShippingmethodValue extends Resource
{

   protected string $url = '/shippingmethods/{id}/values';

   

            /**
            * @return int
            */
            public function getWeightMinimum(): int
            {
                return $this->get('weightMinimum');       
            }
            /**
             * @param int $weightMinimum
             * @return $this
             */
            public function setWeightMinimum(int $weightMinimum): static
            {
                return $this->set('weightMinimum', $weightMinimum);
            }

            /**
            * @return int
            */
            public function getWeightMaximim(): int
            {
                return $this->get('weightMaximim');       
            }
            /**
             * @param int $weightMaximim
             * @return $this
             */
            public function setWeightMaximim(int $weightMaximim): static
            {
                return $this->set('weightMaximim', $weightMaximim);
            }

            /**
            * @return float
            */
            public function getPriceExcl(): float
            {
                return $this->get('priceExcl');       
            }
            /**
             * @param float $priceExcl
             * @return $this
             */
            public function setPriceExcl(float $priceExcl): static
            {
                return $this->set('priceExcl', $priceExcl);
            }

            /**
            * @return float
            */
            public function getPriceIncl(): float
            {
                return $this->get('priceIncl');       
            }
            /**
             * @param float $priceIncl
             * @return $this
             */
            public function setPriceIncl(float $priceIncl): static
            {
                return $this->set('priceIncl', $priceIncl);
            }

}
