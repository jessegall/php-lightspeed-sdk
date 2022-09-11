<?php

namespace JesseGall\LightspeedSDK\Resources;

class ShopScript extends Resource
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
     * @return mixed
     */
    public function getBody(): mixed
    {
        return $this->get('body');
    }

    /**
     * @param mixed $body
     * @return $this
     */
    public function setBody(mixed $body): static
    {
        return $this->set('body', $body);
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->get('location');
    }

    /**
     * @param string $location
     * @return $this
     */
    public function setLocation(string $location): static
    {
        return $this->set('location', $location);
    }

}
