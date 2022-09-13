<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

class Event extends Resource
{

   protected string $url = '/events';

   

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
            public function getChannel(): string
            {
                return $this->get('channel');       
            }
            /**
             * @param string $channel
             * @return $this
             */
            public function setChannel(string $channel): static
            {
                return $this->set('channel', $channel);
            }

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
            * @return string
            */
            public function getMessage(): string
            {
                return $this->get('message');       
            }
            /**
             * @param string $message
             * @return $this
             */
            public function setMessage(string $message): static
            {
                return $this->set('message', $message);
            }

            /**
            * @return mixed
            */
            public function getComment(): mixed
            {
                return $this->get('comment');       
            }
            /**
             * @param mixed $comment
             * @return $this
             */
            public function setComment(mixed $comment): static
            {
                return $this->set('comment', $comment);
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
            * @return bool
            */
            public function getInvoice(): bool
            {
                return $this->get('invoice');       
            }
            /**
             * @param bool $invoice
             * @return $this
             */
            public function setInvoice(bool $invoice): static
            {
                return $this->set('invoice', $invoice);
            }

            /**
            * @return bool
            */
            public function getShipment(): bool
            {
                return $this->get('shipment');       
            }
            /**
             * @param bool $shipment
             * @return $this
             */
            public function setShipment(bool $shipment): static
            {
                return $this->set('shipment', $shipment);
            }

}
