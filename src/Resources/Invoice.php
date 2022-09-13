<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

class Invoice extends Resource
{

   protected string $url = '/invoices';

   

            /**
            * @return string
            */
            public function getCreatedAt(): string
            {
                return $this->get('createdAt');       
            }
            /**
             * @param string $createdAt
             * @return $this
             */
            public function setCreatedAt(string $createdAt): static
            {
                return $this->set('createdAt', $createdAt);
            }

            /**
            * @return string
            */
            public function getUpdatedAt(): string
            {
                return $this->get('updatedAt');       
            }
            /**
             * @param string $updatedAt
             * @return $this
             */
            public function setUpdatedAt(string $updatedAt): static
            {
                return $this->set('updatedAt', $updatedAt);
            }

            /**
            * @return string
            */
            public function getNumber(): string
            {
                return $this->get('number');       
            }
            /**
             * @param string $number
             * @return $this
             */
            public function setNumber(string $number): static
            {
                return $this->set('number', $number);
            }

            /**
            * @return string
            */
            public function getStatus(): string
            {
                return $this->get('status');       
            }
            /**
             * @param string $status
             * @return $this
             */
            public function setStatus(string $status): static
            {
                return $this->set('status', $status);
            }

            /**
            * @return bool
            */
            public function getIsVatShifted(): bool
            {
                return $this->get('isVatShifted');       
            }
            /**
             * @param bool $isVatShifted
             * @return $this
             */
            public function setIsVatShifted(bool $isVatShifted): static
            {
                return $this->set('isVatShifted', $isVatShifted);
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

            /**
            * @return bool
            */
            public function getDoNotifyNew(): bool
            {
                return $this->get('doNotifyNew');       
            }
            /**
             * @param bool $doNotifyNew
             * @return $this
             */
            public function setDoNotifyNew(bool $doNotifyNew): static
            {
                return $this->set('doNotifyNew', $doNotifyNew);
            }

            /**
            * @return bool
            */
            public function getDoNotifyPaid(): bool
            {
                return $this->get('doNotifyPaid');       
            }
            /**
             * @param bool $doNotifyPaid
             * @return $this
             */
            public function setDoNotifyPaid(bool $doNotifyPaid): static
            {
                return $this->set('doNotifyPaid', $doNotifyPaid);
            }

            /**
            * @return Invoice
            */
            public function getInvoice(): Invoice 
            {
                return $this->relation('invoice.resource.embedded', Invoice::class ); 
            }
            
            
            /**
            * @return int
            */
            public function getInvoiceId(): int 
            {
                return $this->get('invoice.resource.id'); 
            }
            /**
             * @param Invoice $invoice
             * @return $this
             */
            public function setInvoice(Invoice $invoice): static 
            {
                $this->set('invoice', $invoice);
                
                return $this;
            }

            /**
            * @return bool
            */
            public function getIsCreditNote(): bool
            {
                return $this->get('isCreditNote');       
            }
            /**
             * @param bool $isCreditNote
             * @return $this
             */
            public function setIsCreditNote(bool $isCreditNote): static
            {
                return $this->set('isCreditNote', $isCreditNote);
            }

            /**
            * @return bool
            */
            public function getCreditNote(): bool
            {
                return $this->get('creditNote');       
            }
            /**
             * @param bool $creditNote
             * @return $this
             */
            public function setCreditNote(bool $creditNote): static
            {
                return $this->set('creditNote', $creditNote);
            }

            /**
            * @return Order
            */
            public function getOrder(): Order 
            {
                return $this->relation('order.resource.embedded', Order::class ); 
            }
            
            
            /**
            * @return int
            */
            public function getOrderId(): int 
            {
                return $this->get('order.resource.id'); 
            }
            /**
             * @param Order $order
             * @return $this
             */
            public function setOrder(Order $order): static 
            {
                $this->set('order', $order);
                
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

            /**
            * @return ResourceCollection<InvoiceItem>
            */
            public function getItems(): ResourceCollection 
            {
                return $this->relation('items.resource.embedded', InvoiceItem::class , true); 
            }
            
            
            /**
             * @param ResourceCollection<InvoiceItem> $items
             * @return $this
             */
            public function setItems(ResourceCollection $items): static 
            {
                $this->set('items', $items);
                
                return $this;
            }

            /**
            * @return ResourceCollection<InvoiceMetafield>
            */
            public function getMetafields(): ResourceCollection 
            {
                return $this->relation('metafields.resource.embedded', InvoiceMetafield::class , true); 
            }
            
            
            /**
             * @param ResourceCollection<InvoiceMetafield> $metafields
             * @return $this
             */
            public function setMetafields(ResourceCollection $metafields): static 
            {
                $this->set('metafields', $metafields);
                
                return $this;
            }

            /**
            * @return ResourceCollection<OrderEvent>
            */
            public function getEvents(): ResourceCollection 
            {
                return $this->relation('events.resource.embedded', OrderEvent::class , true);
            }
            
            
            /**
             * @param ResourceCollection<OrderEvent> $events
             * @return $this
             */
            public function setEvents(ResourceCollection $events): static 
            {
                $this->set('events', $events);
                
                return $this;
            }

}
