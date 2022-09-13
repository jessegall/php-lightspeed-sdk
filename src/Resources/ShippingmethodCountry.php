<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

class ShippingmethodCountry extends Resource
{

   protected string $url = '/shippingmethods/{id}/countries';

   

            /**
            * @return array
            */
            public function getCountry(): array
            {
                return $this->get('country');       
            }
            /**
             * @param array $country
             * @return $this
             */
            public function setCountry(array $country): static
            {
                return $this->set('country', $country);
            }

}
