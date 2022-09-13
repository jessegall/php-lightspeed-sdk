<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

class AccountRatelimit extends Resource
{

   protected string $url = '/accounts/{id}/ratelimits';

   
            /**
            * @return array
            */
            public function getLimit5Min(): array
            {
                return $this->get('limit5Min');       
            }
            /**
             * @param array $limit5Min
             * @return $this
             */
            public function setLimit5Min(array $limit5Min): static
            {
                return $this->set('limit5Min', $limit5Min);
            }

            /**
            * @return array
            */
            public function getLimitHour(): array
            {
                return $this->get('limitHour');       
            }
            /**
             * @param array $limitHour
             * @return $this
             */
            public function setLimitHour(array $limitHour): static
            {
                return $this->set('limitHour', $limitHour);
            }

            /**
            * @return array
            */
            public function getLimitDay(): array
            {
                return $this->get('limitDay');       
            }
            /**
             * @param array $limitDay
             * @return $this
             */
            public function setLimitDay(array $limitDay): static
            {
                return $this->set('limitDay', $limitDay);
            }

}
