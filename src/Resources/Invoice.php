<?php

namespace JesseGall\LightspeedSDK\Resources;

class Invoice extends Resource
{


    /**
     * @return bool
     */
    public function getId(): bool
    {
        return $this->get('id');
    }

    /**
     * @param bool $id
     * @return $this
     */
    public function setId(bool $id): static
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
        return $this->mapTo('invoice', Invoice::class);
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
     * @return array
     */
    public function getResource(): array
    {
        return $this->get('resource');
    }

    /**
     * @param array $resource
     * @return $this
     */
    public function setResource(array $resource): static
    {
        return $this->set('resource', $resource);
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->get('url');
    }

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl(string $url): static
    {
        return $this->set('url', $url);
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->get('link');
    }

    /**
     * @param string $link
     * @return $this
     */
    public function setLink(string $link): static
    {
        return $this->set('link', $link);
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
     * @return Item[]
     */
    public function getItems(): array
    {
        return $this->mapTo('items', Item::class);
    }

    /**
     * @param Item[] $items
     * @return $this
     */
    public function setItems(array $items): static
    {
        $this->set('items', $items);

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
