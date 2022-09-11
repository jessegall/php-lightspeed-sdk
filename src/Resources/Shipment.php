<?php

namespace JesseGall\LightspeedSDK\Resources;

class Shipment extends Resource
{


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->get('id');
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id): static
    {
        return $this->set('id', $id);
    }

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
     * @return string
     */
    public function getTrackingCode(): string
    {
        return $this->get('trackingCode');
    }

    /**
     * @param string $trackingCode
     * @return $this
     */
    public function setTrackingCode(string $trackingCode): static
    {
        return $this->set('trackingCode', $trackingCode);
    }

    /**
     * @return bool
     */
    public function getDoNotifyShipped(): bool
    {
        return $this->get('doNotifyShipped');
    }

    /**
     * @param bool $doNotifyShipped
     * @return $this
     */
    public function setDoNotifyShipped(bool $doNotifyShipped): static
    {
        return $this->set('doNotifyShipped', $doNotifyShipped);
    }

    /**
     * @return bool
     */
    public function getDoNotifyReadyForPickup(): bool
    {
        return $this->get('doNotifyReadyForPickup');
    }

    /**
     * @param bool $doNotifyReadyForPickup
     * @return $this
     */
    public function setDoNotifyReadyForPickup(bool $doNotifyReadyForPickup): static
    {
        return $this->set('doNotifyReadyForPickup', $doNotifyReadyForPickup);
    }

    /**
     * @return bool
     */
    public function getDoNotifyTrackingCode(): bool
    {
        return $this->get('doNotifyTrackingCode');
    }

    /**
     * @param bool $doNotifyTrackingCode
     * @return $this
     */
    public function setDoNotifyTrackingCode(bool $doNotifyTrackingCode): static
    {
        return $this->set('doNotifyTrackingCode', $doNotifyTrackingCode);
    }

    /**
     * @return int
     */
    public function getTotalWeight(): int
    {
        return $this->get('totalWeight');
    }

    /**
     * @param int $totalWeight
     * @return $this
     */
    public function setTotalWeight(int $totalWeight): static
    {
        return $this->set('totalWeight', $totalWeight);
    }

    /**
     * @return int
     */
    public function getTotalSizeX(): int
    {
        return $this->get('totalSizeX');
    }

    /**
     * @param int $totalSizeX
     * @return $this
     */
    public function setTotalSizeX(int $totalSizeX): static
    {
        return $this->set('totalSizeX', $totalSizeX);
    }

    /**
     * @return int
     */
    public function getTotalSizeY(): int
    {
        return $this->get('totalSizeY');
    }

    /**
     * @param int $totalSizeY
     * @return $this
     */
    public function setTotalSizeY(int $totalSizeY): static
    {
        return $this->set('totalSizeY', $totalSizeY);
    }

    /**
     * @return int
     */
    public function getTotalSizeZ(): int
    {
        return $this->get('totalSizeZ');
    }

    /**
     * @param int $totalSizeZ
     * @return $this
     */
    public function setTotalSizeZ(int $totalSizeZ): static
    {
        return $this->set('totalSizeZ', $totalSizeZ);
    }

    /**
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        return $this->mapTo('customer', Customer::class);
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
     * @return Order
     */
    public function getOrder(): Order
    {
        return $this->mapTo('order', Order::class);
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
     * @return Product[]
     */
    public function getProducts(): array
    {
        return $this->mapTo('products', Product::class);
    }

    /**
     * @param Product[] $products
     * @return $this
     */
    public function setProducts(array $products): static
    {
        $this->set('products', $products);

        return $this;
    }

    /**
     * @return Metafield[]
     */
    public function getMetafields(): array
    {
        return $this->mapTo('metafields', Metafield::class);
    }

    /**
     * @param Metafield[] $metafields
     * @return $this
     */
    public function setMetafields(array $metafields): static
    {
        $this->set('metafields', $metafields);

        return $this;
    }

    /**
     * @return Event[]
     */
    public function getEvents(): array
    {
        return $this->mapTo('events', Event::class);
    }

    /**
     * @param Event[] $events
     * @return $this
     */
    public function setEvents(array $events): static
    {
        $this->set('events', $events);

        return $this;
    }

}
