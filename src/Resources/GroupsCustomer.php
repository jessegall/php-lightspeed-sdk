<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

class GroupsCustomer extends Resource
{

   protected string $url = '/groups/{id}/customers';

   

            /**
            * @return Group
            */
            public function getGroup(): Group 
            {
                return $this->relation('group.resource.embedded', Group::class ); 
            }
            
            
            /**
            * @return int
            */
            public function getGroupId(): int 
            {
                return $this->get('group.resource.id'); 
            }
            /**
             * @param Group $group
             * @return $this
             */
            public function setGroup(Group $group): static 
            {
                $this->set('group', $group);
                
                return $this;
            }

            /**
            * @return Customer
            */
            public function getCustomer(): Customer 
            {
                return $this->relation('customer.resource.embedded', Customer::class ); 
            }
            
            
            /**
            * @return int
            */
            public function getCustomerId(): int 
            {
                return $this->get('customer.resource.id'); 
            }
            /**
             * @param Customer $customer
             * @return $this
             */
            public function setCustomer(Customer $customer): static 
            {
                $this->set('customer', $customer);
                
                return $this;
            }

}
