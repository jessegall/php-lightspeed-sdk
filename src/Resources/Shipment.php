<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Shipment
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/shipment
 */
class Shipment extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/shipments';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'shipment';


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
    public function getUpdatedAt(): ?string
    {
        return $this->get('updatedAt');
    }

    /**
     * @param string|null $updatedAt
     * @return $this
     */
    public function setUpdatedAt(string $updatedAt = null): static
    {
        return $this->set('updatedAt', $updatedAt);
    }

    /**
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->get('number');
    }

    /**
     * @param string|null $number
     * @return $this
     */
    public function setNumber(string $number = null): static
    {
        return $this->set('number', $number);
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->get('status');
    }

    /**
     * @param string|null $status
     * @return $this
     */
    public function setStatus(string $status = null): static
    {
        return $this->set('status', $status);
    }

    /**
     * @return string|null
     */
    public function getTrackingCode(): ?string
    {
        return $this->get('trackingCode');
    }

    /**
     * @param string|null $trackingCode
     * @return $this
     */
    public function setTrackingCode(string $trackingCode = null): static
    {
        return $this->set('trackingCode', $trackingCode);
    }

    /**
     * @return bool|null
     */
    public function getDoNotifyShipped(): ?bool
    {
        return $this->get('doNotifyShipped');
    }

    /**
     * @param bool|null $doNotifyShipped
     * @return $this
     */
    public function setDoNotifyShipped(bool $doNotifyShipped = null): static
    {
        return $this->set('doNotifyShipped', $doNotifyShipped);
    }

    /**
     * @return bool|null
     */
    public function getDoNotifyReadyForPickup(): ?bool
    {
        return $this->get('doNotifyReadyForPickup');
    }

    /**
     * @param bool|null $doNotifyReadyForPickup
     * @return $this
     */
    public function setDoNotifyReadyForPickup(bool $doNotifyReadyForPickup = null): static
    {
        return $this->set('doNotifyReadyForPickup', $doNotifyReadyForPickup);
    }

    /**
     * @return bool|null
     */
    public function getDoNotifyTrackingCode(): ?bool
    {
        return $this->get('doNotifyTrackingCode');
    }

    /**
     * @param bool|null $doNotifyTrackingCode
     * @return $this
     */
    public function setDoNotifyTrackingCode(bool $doNotifyTrackingCode = null): static
    {
        return $this->set('doNotifyTrackingCode', $doNotifyTrackingCode);
    }

    /**
     * @return int|null
     */
    public function getTotalWeight(): ?int
    {
        return $this->get('totalWeight');
    }

    /**
     * @param int|null $totalWeight
     * @return $this
     */
    public function setTotalWeight(int $totalWeight = null): static
    {
        return $this->set('totalWeight', $totalWeight);
    }

    /**
     * @return int|null
     */
    public function getTotalSizeX(): ?int
    {
        return $this->get('totalSizeX');
    }

    /**
     * @param int|null $totalSizeX
     * @return $this
     */
    public function setTotalSizeX(int $totalSizeX = null): static
    {
        return $this->set('totalSizeX', $totalSizeX);
    }

    /**
     * @return int|null
     */
    public function getTotalSizeY(): ?int
    {
        return $this->get('totalSizeY');
    }

    /**
     * @param int|null $totalSizeY
     * @return $this
     */
    public function setTotalSizeY(int $totalSizeY = null): static
    {
        return $this->set('totalSizeY', $totalSizeY);
    }

    /**
     * @return int|null
     */
    public function getTotalSizeZ(): ?int
    {
        return $this->get('totalSizeZ');
    }

    /**
     * @param int|null $totalSizeZ
     * @return $this
     */
    public function setTotalSizeZ(int $totalSizeZ = null): static
    {
        return $this->set('totalSizeZ', $totalSizeZ);
    }

    /**
     * @return Customer|null
     */
    public function getCustomer(): ?Customer
    {
        return $this->relation('customer.resource.embedded', Customer::class);
    }


    /**
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->get('customer.resource.id');
    }

    /**
     * @param Customer|null $customer
     * @return $this
     */
    public function setCustomer(Customer $customer = null): static
    {
        $this->set('customer.resource.embedded', $customer);

        return $this;
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
     * @return ResourceCollection<ShipmentProduct>|null
     */
    public function getProducts(): ?ResourceCollection
    {
        return $this->relation('products.resource.embedded', ShipmentProduct::class, true);
    }


    /**
     * @param ResourceCollection<ShipmentProduct>|null $products
     * @return $this
     */
    public function setProducts(ResourceCollection $products = null): static
    {
        $this->set('products.resource.embedded', $products);

        return $this;
    }

    /**
     * @return ResourceCollection<ShipmentMetafield>|null
     */
    public function getMetafields(): ?ResourceCollection
    {
        return $this->relation('metafields.resource.embedded', ShipmentMetafield::class, true);
    }


    /**
     * @param ResourceCollection<ShipmentMetafield>|null $metafields
     * @return $this
     */
    public function setMetafields(ResourceCollection $metafields = null): static
    {
        $this->set('metafields.resource.embedded', $metafields);

        return $this;
    }

    /**
     * @return ResourceCollection<OrderEvent>|null
     */
    public function getEvents(): ?ResourceCollection
    {
        return $this->relation('events.resource.embedded', OrderEvent::class, true);
    }


    /**
     * @param ResourceCollection<OrderEvent>|null $events
     * @return $this
     */
    public function setEvents(ResourceCollection $events = null): static
    {
        $this->set('events.resource.embedded', $events);

        return $this;
    }

}
