<?php

namespace JesseGall\LightspeedSDK\Resources;

class CustomerToken extends Resource
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
    public function getRedirectUrl(): string
    {
        return $this->get('redirectUrl');
    }

    /**
     * @param string $redirectUrl
     * @return $this
     */
    public function setRedirectUrl(string $redirectUrl): static
    {
        return $this->set('redirectUrl', $redirectUrl);
    }

    /**
     * @return string
     */
    public function getReturnUrl(): string
    {
        return $this->get('returnUrl');
    }

    /**
     * @param string $returnUrl
     * @return $this
     */
    public function setReturnUrl(string $returnUrl): static
    {
        return $this->set('returnUrl', $returnUrl);
    }

    /**
     * @return int
     */
    public function getExpiresIn(): int
    {
        return $this->get('expiresIn');
    }

    /**
     * @param int $expiresIn
     * @return $this
     */
    public function setExpiresIn(int $expiresIn): static
    {
        return $this->set('expiresIn', $expiresIn);
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

}
