<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * ShopScript
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/shopscript
 */
class ShopScript extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/shops/{id}/scripts';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'shopScript';


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
     * @return mixed|null
     */
    public function getBody(): mixed
    {
        return $this->get('body');
    }

    /**
     * @param mixed|null $body
     * @return $this
     */
    public function setBody(mixed $body = null): static
    {
        return $this->set('body', $body);
    }

    /**
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->get('location');
    }

    /**
     * @param string|null $location
     * @return $this
     */
    public function setLocation(string $location = null): static
    {
        return $this->set('location', $location);
    }

}
