<?php

namespace JesseGall\LightspeedSDK\Resources;

class ExternalService extends Resource
{

    protected string $apiUrl = '/externals/{id}/services';

    protected string $handle = 'externalService';

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->get('type');
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type): static
    {
        return $this->set('type', $type);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->get('name');
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): static
    {
        return $this->set('name', $name);
    }

    /**
     * @return string
     */
    public function getUrlEndpoint(): string
    {
        return $this->get('urlEndpoint');
    }

    /**
     * @param string $urlEndpoint
     * @return $this
     */
    public function setUrlEndpoint(string $urlEndpoint): static
    {
        return $this->set('urlEndpoint', $urlEndpoint);
    }

    /**
     * @return bool
     */
    public function getIsActive(): bool
    {
        return $this->get('isActive');
    }

    /**
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive(bool $isActive): static
    {
        return $this->set('isActive', $isActive);
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
