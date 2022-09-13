<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

class Account extends Resource
{

   protected string $url = '/accounts';

   

            /**
            * @return bool
            */
            public function getAppId(): bool
            {
                return $this->get('appId');       
            }
            /**
             * @param bool $appId
             * @return $this
             */
            public function setAppId(bool $appId): static
            {
                return $this->set('appId', $appId);
            }

            /**
            * @return string
            */
            public function getApiKey(): string
            {
                return $this->get('apiKey');       
            }
            /**
             * @param string $apiKey
             * @return $this
             */
            public function setApiKey(string $apiKey): static
            {
                return $this->set('apiKey', $apiKey);
            }

            /**
            * @return ResourceCollection<AccountSignout>
            */
            public function getSignout(): ResourceCollection 
            {
                return $this->relation('signout.resource.embedded', AccountSignout::class , true); 
            }
            
            
            /**
             * @param ResourceCollection<AccountSignout> $signout
             * @return $this
             */
            public function setSignout(ResourceCollection $signout): static 
            {
                $this->set('signout', $signout);
                
                return $this;
            }

            /**
            * @return ResourceCollection<AccountPermissions>
            */
            public function getPermissions(): ResourceCollection 
            {
                return $this->relation('permissions.resource.embedded', AccountPermissions::class , true); 
            }
            
            
            /**
             * @param ResourceCollection<AccountPermissions> $permissions
             * @return $this
             */
            public function setPermissions(ResourceCollection $permissions): static 
            {
                $this->set('permissions', $permissions);
                
                return $this;
            }

            /**
            * @return ResourceCollection<AccountRatelimit>
            */
            public function getRatelimit(): ResourceCollection 
            {
                return $this->relation('ratelimit.resource.embedded', AccountRatelimit::class , true); 
            }
            
            
            /**
             * @param ResourceCollection<AccountRatelimit> $ratelimit
             * @return $this
             */
            public function setRatelimit(ResourceCollection $ratelimit): static 
            {
                $this->set('ratelimit', $ratelimit);
                
                return $this;
            }

            /**
            * @return ResourceCollection<AccountMetafield>
            */
            public function getMetafields(): ResourceCollection 
            {
                return $this->relation('metafields.resource.embedded', AccountMetafield::class , true); 
            }
            
            
            /**
             * @param ResourceCollection<AccountMetafield> $metafields
             * @return $this
             */
            public function setMetafields(ResourceCollection $metafields): static 
            {
                $this->set('metafields', $metafields);
                
                return $this;
            }

}
