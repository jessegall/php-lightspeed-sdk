<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * Redirect
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/redirect
 */
class Redirect extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/redirects';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'redirect';


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
    public function getIsPermanent(): ?bool
    {
        return $this->get('isPermanent');
    }

    /**
     * @param bool|null $isPermanent
     * @return $this
     */
    public function setIsPermanent(bool $isPermanent = null): static
    {
        return $this->set('isPermanent', $isPermanent);
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->get('url');
    }

    /**
     * @param string|null $url
     * @return $this
     */
    public function setUrl(string $url = null): static
    {
        return $this->set('url', $url);
    }

    /**
     * @return string|null
     */
    public function getTarget(): ?string
    {
        return $this->get('target');
    }

    /**
     * @param string|null $target
     * @return $this
     */
    public function setTarget(string $target = null): static
    {
        return $this->set('target', $target);
    }

}
