<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

class Paymentmethod extends Resource
{

   protected string $url = '/paymentmethods';

   

            /**
            * @return string
            */
            public function getKey(): string
            {
                return $this->get('key');       
            }
            /**
             * @param string $key
             * @return $this
             */
            public function setKey(string $key): static
            {
                return $this->set('key', $key);
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

}
