<?php

namespace JesseGall\LightspeedSDK\Resources;

class Redirect extends Resource
{


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
    public function getIsPermanent(): bool
    {
        return $this->get('isPermanent');
    }

    /**
     * @param bool $isPermanent
     * @return $this
     */
    public function setIsPermanent(bool $isPermanent): static
    {
        return $this->set('isPermanent', $isPermanent);
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
    public function getTarget(): string
    {
        return $this->get('target');
    }

    /**
     * @param string $target
     * @return $this
     */
    public function setTarget(string $target): static
    {
        return $this->set('target', $target);
    }

}
