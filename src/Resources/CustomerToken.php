<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * CustomerToken
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/customertoken
 */
class CustomerToken extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/customers/{id}/tokens';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'customerToken';


    /**
     * @return string|null
     */
    public function getRedirectUrl(): ?string
    {
        return $this->get('redirectUrl');
    }

    /**
     * @param string|null $redirectUrl
     * @return $this
     */
    public function setRedirectUrl(string $redirectUrl = null): static
    {
        return $this->set('redirectUrl', $redirectUrl);
    }

    /**
     * @return string|null
     */
    public function getReturnUrl(): ?string
    {
        return $this->get('returnUrl');
    }

    /**
     * @param string|null $returnUrl
     * @return $this
     */
    public function setReturnUrl(string $returnUrl = null): static
    {
        return $this->set('returnUrl', $returnUrl);
    }

    /**
     * @return int|null
     */
    public function getExpiresIn(): ?int
    {
        return $this->get('expiresIn');
    }

    /**
     * @param int|null $expiresIn
     * @return $this
     */
    public function setExpiresIn(int $expiresIn = null): static
    {
        return $this->set('expiresIn', $expiresIn);
    }

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

}
