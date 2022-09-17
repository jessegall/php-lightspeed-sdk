<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * Subscription
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/subscription
 */
class Subscription extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/subscriptions';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'subscription';


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
    public function getIsConfirmed(): ?bool
    {
        return $this->get('isConfirmed');
    }

    /**
     * @param bool|null $isConfirmed
     * @return $this
     */
    public function setIsConfirmed(bool $isConfirmed = null): static
    {
        return $this->set('isConfirmed', $isConfirmed);
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->get('email');
    }

    /**
     * @param string|null $email
     * @return $this
     */
    public function setEmail(string $email = null): static
    {
        return $this->set('email', $email);
    }

    /**
     * @return string|null
     */
    public function getFirstname(): ?string
    {
        return $this->get('firstname');
    }

    /**
     * @param string|null $firstname
     * @return $this
     */
    public function setFirstname(string $firstname = null): static
    {
        return $this->set('firstname', $firstname);
    }

    /**
     * @return string|null
     */
    public function getLastname(): ?string
    {
        return $this->get('lastname');
    }

    /**
     * @param string|null $lastname
     * @return $this
     */
    public function setLastname(string $lastname = null): static
    {
        return $this->set('lastname', $lastname);
    }

    /**
     * @return bool|null
     */
    public function getDoNotifyConfirmed(): ?bool
    {
        return $this->get('doNotifyConfirmed');
    }

    /**
     * @param bool|null $doNotifyConfirmed
     * @return $this
     */
    public function setDoNotifyConfirmed(bool $doNotifyConfirmed = null): static
    {
        return $this->set('doNotifyConfirmed', $doNotifyConfirmed);
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

}
