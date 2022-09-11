<?php

namespace JesseGall\LightspeedSDK\Resources;

class Ticket extends Resource
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
     * @return string
     */
    public function getCode(): string
    {
        return $this->get('code');
    }

    /**
     * @param string $code
     * @return $this
     */
    public function setCode(string $code): static
    {
        return $this->set('code', $code);
    }

    /**
     * @return string
     */
    public function getLocale(): string
    {
        return $this->get('locale');
    }

    /**
     * @param string $locale
     * @return $this
     */
    public function setLocale(string $locale): static
    {
        return $this->set('locale', $locale);
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
     * @return Message[]
     */
    public function getMessages(): array
    {
        return $this->mapTo('messages', Message::class);
    }

    /**
     * @param Message[] $messages
     * @return $this
     */
    public function setMessages(array $messages): static
    {
        $this->set('messages', $messages);

        return $this;
    }

}
