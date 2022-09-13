<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

class Shippingmethod extends Resource
{

   protected string $url = '/shippingmethods';

   

            /**
            * @return string
            */
            public function getType(): string
            {
                return $this->get('type');       
            }
            /**
             * @param string $type
             * @return $this
             */
            public function setType(string $type): static
            {
                return $this->set('type', $type);
            }

            /**
            * @return bool
            */
            public function getIsBackofficeOnly(): bool
            {
                return $this->get('isBackofficeOnly');       
            }
            /**
             * @param bool $isBackofficeOnly
             * @return $this
             */
            public function setIsBackofficeOnly(bool $isBackofficeOnly): static
            {
                return $this->set('isBackofficeOnly', $isBackofficeOnly);
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

            /**
            * @return int
            */
            public function getFreeAbove(): int
            {
                return $this->get('freeAbove');       
            }
            /**
             * @param int $freeAbove
             * @return $this
             */
            public function setFreeAbove(int $freeAbove): static
            {
                return $this->set('freeAbove', $freeAbove);
            }

            /**
            * @return int
            */
            public function getPaymentPriceExcl(): int
            {
                return $this->get('paymentPriceExcl');       
            }
            /**
             * @param int $paymentPriceExcl
             * @return $this
             */
            public function setPaymentPriceExcl(int $paymentPriceExcl): static
            {
                return $this->set('paymentPriceExcl', $paymentPriceExcl);
            }

            /**
            * @return int
            */
            public function getPaymentPriceIncl(): int
            {
                return $this->get('paymentPriceIncl');       
            }
            /**
             * @param int $paymentPriceIncl
             * @return $this
             */
            public function setPaymentPriceIncl(int $paymentPriceIncl): static
            {
                return $this->set('paymentPriceIncl', $paymentPriceIncl);
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

            /**
            * @return string
            */
            public function getDescription(): string
            {
                return $this->get('description');       
            }
            /**
             * @param string $description
             * @return $this
             */
            public function setDescription(string $description): static
            {
                return $this->set('description', $description);
            }

            /**
            * @return bool
            */
            public function getTax(): bool
            {
                return $this->get('tax');       
            }
            /**
             * @param bool $tax
             * @return $this
             */
            public function setTax(bool $tax): static
            {
                return $this->set('tax', $tax);
            }

            /**
            * @return ResourceCollection<ShippingmethodCountry>
            */
            public function getCountries(): ResourceCollection 
            {
                return $this->relation('countries.resource.embedded', ShippingmethodCountry::class , true); 
            }
            
            
            /**
             * @param ResourceCollection<ShippingmethodCountry> $countries
             * @return $this
             */
            public function setCountries(ResourceCollection $countries): static 
            {
                $this->set('countries', $countries);
                
                return $this;
            }

            /**
            * @return ResourceCollection<ShippingmethodValue>
            */
            public function getValues(): ResourceCollection 
            {
                return $this->relation('values.resource.embedded', ShippingmethodValue::class , true); 
            }
            
            
            /**
             * @param ResourceCollection<ShippingmethodValue> $values
             * @return $this
             */
            public function setValues(ResourceCollection $values): static 
            {
                $this->set('values', $values);
                
                return $this;
            }

}
