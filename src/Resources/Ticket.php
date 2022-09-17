<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Ticket
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/ticket
 */
class Ticket extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/tickets';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'ticket';


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
     * @return bool|null
     */
    public function getIsAnswered(): ?bool
    {
        return $this->get('isAnswered');
    }

    /**
     * @param bool|null $isAnswered
     * @return $this
     */
    public function setIsAnswered(bool $isAnswered = null): static
    {
        return $this->set('isAnswered', $isAnswered);
    }

    /**
     * @return bool|null
     */
    public function getIsClosed(): ?bool
    {
        return $this->get('isClosed');
    }

    /**
     * @param bool|null $isClosed
     * @return $this
     */
    public function setIsClosed(bool $isClosed = null): static
    {
        return $this->set('isClosed', $isClosed);
    }

    /**
     * @return bool|null
     */
    public function getIsTodo(): ?bool
    {
        return $this->get('isTodo');
    }

    /**
     * @param bool|null $isTodo
     * @return $this
     */
    public function setIsTodo(bool $isTodo = null): static
    {
        return $this->set('isTodo', $isTodo);
    }

    /**
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->get('subject');
    }

    /**
     * @param string|null $subject
     * @return $this
     */
    public function setSubject(string $subject = null): static
    {
        return $this->set('subject', $subject);
    }

    /**
     * @return string|null
     */
    public function getMemo(): ?string
    {
        return $this->get('memo');
    }

    /**
     * @param string|null $memo
     * @return $this
     */
    public function setMemo(string $memo = null): static
    {
        return $this->set('memo', $memo);
    }

    /**
     * @return bool|null
     */
    public function getDoNotifyAnswered(): ?bool
    {
        return $this->get('doNotifyAnswered');
    }

    /**
     * @param bool|null $doNotifyAnswered
     * @return $this
     */
    public function setDoNotifyAnswered(bool $doNotifyAnswered = null): static
    {
        return $this->set('doNotifyAnswered', $doNotifyAnswered);
    }

    /**
     * @return array|null
     */
    public function getLanguage(): ?array
    {
        return $this->get('language');
    }

    /**
     * @param array|null $language
     * @return $this
     */
    public function setLanguage(array $language = null): static
    {
        return $this->set('language', $language);
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
     * @return ResourceCollection<TicketMessage>|null
     */
    public function getMessages(): ?ResourceCollection
    {
        return $this->relation('messages.resource.embedded', TicketMessage::class, true);
    }


    /**
     * @param ResourceCollection<TicketMessage>|null $messages
     * @return $this
     */
    public function setMessages(ResourceCollection $messages = null): static
    {
        $this->set('messages.resource.embedded', $messages);

        return $this;
    }

}
