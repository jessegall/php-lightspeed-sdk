<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Invoice
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/invoice
 */
class Invoice extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/invoices';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'invoice';


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
     * @return bool|null
     */
    public function getIsVatShifted(): ?bool
    {
        return $this->get('isVatShifted');
    }

    /**
     * @param bool|null $isVatShifted
     * @return $this
     */
    public function setIsVatShifted(bool $isVatShifted = null): static
    {
        return $this->set('isVatShifted', $isVatShifted);
    }

    /**
     * @return float|null
     */
    public function getPriceExcl(): ?float
    {
        return $this->get('priceExcl');
    }

    /**
     * @param float|null $priceExcl
     * @return $this
     */
    public function setPriceExcl(float $priceExcl = null): static
    {
        return $this->set('priceExcl', $priceExcl);
    }

    /**
     * @return float|null
     */
    public function getPriceIncl(): ?float
    {
        return $this->get('priceIncl');
    }

    /**
     * @param float|null $priceIncl
     * @return $this
     */
    public function setPriceIncl(float $priceIncl = null): static
    {
        return $this->set('priceIncl', $priceIncl);
    }

    /**
     * @return bool|null
     */
    public function getDoNotifyNew(): ?bool
    {
        return $this->get('doNotifyNew');
    }

    /**
     * @param bool|null $doNotifyNew
     * @return $this
     */
    public function setDoNotifyNew(bool $doNotifyNew = null): static
    {
        return $this->set('doNotifyNew', $doNotifyNew);
    }

    /**
     * @return bool|null
     */
    public function getDoNotifyPaid(): ?bool
    {
        return $this->get('doNotifyPaid');
    }

    /**
     * @param bool|null $doNotifyPaid
     * @return $this
     */
    public function setDoNotifyPaid(bool $doNotifyPaid = null): static
    {
        return $this->set('doNotifyPaid', $doNotifyPaid);
    }

    /**
     * @return Invoice|null
     */
    public function getInvoice(): ?Invoice
    {
        return $this->relation('invoice.resource.embedded', Invoice::class);
    }


    /**
     * @return int|null
     */
    public function getInvoiceId(): ?int
    {
        return $this->get('invoice.resource.id');
    }

    /**
     * @param Invoice|null $invoice
     * @return $this
     */
    public function setInvoice(Invoice $invoice = null): static
    {
        $this->set('invoice.resource.embedded', $invoice);

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsCreditNote(): ?bool
    {
        return $this->get('isCreditNote');
    }

    /**
     * @param bool|null $isCreditNote
     * @return $this
     */
    public function setIsCreditNote(bool $isCreditNote = null): static
    {
        return $this->set('isCreditNote', $isCreditNote);
    }

    /**
     * @return bool|null
     */
    public function getCreditNote(): ?bool
    {
        return $this->get('creditNote');
    }

    /**
     * @param bool|null $creditNote
     * @return $this
     */
    public function setCreditNote(bool $creditNote = null): static
    {
        return $this->set('creditNote', $creditNote);
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
     * @return ResourceCollection<InvoiceItem>|null
     */
    public function getItems(): ?ResourceCollection
    {
        return $this->relation('items.resource.embedded', InvoiceItem::class, true);
    }


    /**
     * @param ResourceCollection<InvoiceItem>|null $items
     * @return $this
     */
    public function setItems(ResourceCollection $items = null): static
    {
        $this->set('items.resource.embedded', $items);

        return $this;
    }

    /**
     * @return ResourceCollection<InvoiceMetafield>|null
     */
    public function getMetafields(): ?ResourceCollection
    {
        return $this->relation('metafields.resource.embedded', InvoiceMetafield::class, true);
    }


    /**
     * @param ResourceCollection<InvoiceMetafield>|null $metafields
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
