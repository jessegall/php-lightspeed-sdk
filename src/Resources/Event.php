<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * Event
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/event
 */
class Event extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/events';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'event';


    /**
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->get('createdAt');
    }

    /**
     * @param string|null $createdAt
     * @return $this
     */
    public function setCreatedAt(string $createdAt = null): static
    {
        return $this->set('createdAt', $createdAt);
    }

    /**
     * @return string|null
     */
    public function getChannel(): ?string
    {
        return $this->get('channel');
    }

    /**
     * @param string|null $channel
     * @return $this
     */
    public function setChannel(string $channel = null): static
    {
        return $this->set('channel', $channel);
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->get('type');
    }

    /**
     * @param string|null $type
     * @return $this
     */
    public function setType(string $type = null): static
    {
        return $this->set('type', $type);
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->get('message');
    }

    /**
     * @param string|null $message
     * @return $this
     */
    public function setMessage(string $message = null): static
    {
        return $this->set('message', $message);
    }

    /**
     * @return mixed|null
     */
    public function getComment(): mixed
    {
        return $this->get('comment');
    }

    /**
     * @param mixed|null $comment
     * @return $this
     */
    public function setComment(mixed $comment = null): static
    {
        return $this->set('comment', $comment);
    }

    /**
     * @return Order|null
     */
    public function getOrder(): ?Order
    {
        return $this->relation('order.resource.embedded', Order::class);
    }


    /**
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->get('order.resource.id');
    }

    /**
     * @param Order|null $order
     * @return $this
     */
    public function setOrder(Order $order = null): static
    {
        $this->set('order.resource.embedded', $order);

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getInvoice(): ?bool
    {
        return $this->get('invoice');
    }

    /**
     * @param bool|null $invoice
     * @return $this
     */
    public function setInvoice(bool $invoice = null): static
    {
        return $this->set('invoice', $invoice);
    }

    /**
     * @return bool|null
     */
    public function getShipment(): ?bool
    {
        return $this->get('shipment');
    }

    /**
     * @param bool|null $shipment
     * @return $this
     */
    public function setShipment(bool $shipment = null): static
    {
        return $this->set('shipment', $shipment);
    }

}
