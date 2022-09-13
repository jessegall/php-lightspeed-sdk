<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

class CustomerLogin extends Resource
{

   protected string $url = '/customers/{id}/logins';

   
            /**
            * @return bool
            */
            public function getLoggedin(): bool
            {
                return $this->get('loggedin');       
            }
            /**
             * @param bool $loggedin
             * @return $this
             */
            public function setLoggedin(bool $loggedin): static
            {
                return $this->set('loggedin', $loggedin);
            }

}
