<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class Ticket extends Resource
{

    protected string $endpoint = '/tickets';

    protected string $handle = 'ticket';

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
     * @return bool
     */
    public function getIsAnswered(): bool
    {
        return $this->get('isAnswered');
    }

    /**
     * @param bool $isAnswered
     * @return $this
     */
    public function setIsAnswered(bool $isAnswered): static
    {
        return $this->set('isAnswered', $isAnswered);
    }

    /**
     * @return bool
     */
    public function getIsClosed(): bool
    {
        return $this->get('isClosed');
    }

    /**
     * @param bool $isClosed
     * @return $this
     */
    public function setIsClosed(bool $isClosed): static
    {
        return $this->set('isClosed', $isClosed);
    }

    /**
     * @return bool
     */
    public function getIsTodo(): bool
    {
        return $this->get('isTodo');
    }

    /**
     * @param bool $isTodo
     * @return $this
     */
    public function setIsTodo(bool $isTodo): static
    {
        return $this->set('isTodo', $isTodo);
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->get('subject');
    }

    /**
     * @param string $subject
     * @return $this
     */
    public function setSubject(string $subject): static
    {
        return $this->set('subject', $subject);
    }

    /**
     * @return string
     */
    public function getMemo(): string
    {
        return $this->get('memo');
    }

    /**
     * @param string $memo
     * @return $this
     */
    public function setMemo(string $memo): static
    {
        return $this->set('memo', $memo);
    }

    /**
     * @return bool
     */
    public function getDoNotifyAnswered(): bool
    {
        return $this->get('doNotifyAnswered');
    }

    /**
     * @param bool $doNotifyAnswered
     * @return $this
     */
    public function setDoNotifyAnswered(bool $doNotifyAnswered): static
    {
        return $this->set('doNotifyAnswered', $doNotifyAnswered);
    }

    /**
     * @return array
     */
    public function getLanguage(): array
    {
        return $this->get('language');
    }

    /**
     * @param array $language
     * @return $this
     */
    public function setLanguage(array $language): static
    {
        return $this->set('language', $language);
    }

    /**
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        return $this->relation('customer.resource.embedded', Customer::class);
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
        $this->set('customer.resource.embedded', $customer);

        return $this;
    }

    /**
     * @return ResourceCollection<TicketMessage>
     */
    public function getMessages(): ResourceCollection
    {
        return $this->relation('messages.resource.embedded', TicketMessage::class, true);
    }


    /**
     * @param ResourceCollection<TicketMessage> $messages
     * @return $this
     */
    public function setMessages(ResourceCollection $messages): static
    {
        $this->set('messages.resource.embedded', $messages);

        return $this;
    }

}
