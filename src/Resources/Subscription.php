<?php

namespace JesseGall\LightspeedSDK\Resources;

class Subscription extends Resource
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
     * @return bool
     */
    public function getIsConfirmed(): bool
    {
        return $this->get('isConfirmed');
    }

    /**
     * @param bool $isConfirmed
     * @return $this
     */
    public function setIsConfirmed(bool $isConfirmed): static
    {
        return $this->set('isConfirmed', $isConfirmed);
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->get('email');
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email): static
    {
        return $this->set('email', $email);
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->get('firstname');
    }

    /**
     * @param string $firstname
     * @return $this
     */
    public function setFirstname(string $firstname): static
    {
        return $this->set('firstname', $firstname);
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->get('lastname');
    }

    /**
     * @param string $lastname
     * @return $this
     */
    public function setLastname(string $lastname): static
    {
        return $this->set('lastname', $lastname);
    }

    /**
     * @return bool
     */
    public function getDoNotifyConfirmed(): bool
    {
        return $this->get('doNotifyConfirmed');
    }

    /**
     * @param bool $doNotifyConfirmed
     * @return $this
     */
    public function setDoNotifyConfirmed(bool $doNotifyConfirmed): static
    {
        return $this->set('doNotifyConfirmed', $doNotifyConfirmed);
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

}
