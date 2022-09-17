<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * Contact
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/contact
 */
class Contact extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/contacts';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'contact';


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
    public function getName(): ?string
    {
        return $this->get('name');
    }

    /**
     * @param string|null $name
     * @return $this
     */
    public function setName(string $name = null): static
    {
        return $this->set('name', $name);
    }

    /**
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return $this->get('company');
    }

    /**
     * @param string|null $company
     * @return $this
     */
    public function setCompany(string $company = null): static
    {
        return $this->set('company', $company);
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
    public function getPhone(): ?string
    {
        return $this->get('phone');
    }

    /**
     * @param string|null $phone
     * @return $this
     */
    public function setPhone(string $phone = null): static
    {
        return $this->set('phone', $phone);
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
