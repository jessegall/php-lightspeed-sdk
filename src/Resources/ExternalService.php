<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * ExternalService
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/externalservice
 */
class ExternalService extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/externals/{id}/services';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'externalService';


    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->get('type');
    }

    /**
     * @param string|null $type
     * @return $this
     */
    public function setType(string $type = null): static
    {
        return $this->set('type', $type);
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
    public function getUrlEndpoint(): ?string
    {
        return $this->get('urlEndpoint');
    }

    /**
     * @param string|null $urlEndpoint
     * @return $this
     */
    public function setUrlEndpoint(string $urlEndpoint = null): static
    {
        return $this->set('urlEndpoint', $urlEndpoint);
    }

    /**
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->get('isActive');
    }

    /**
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive(bool $isActive = null): static
    {
        return $this->set('isActive', $isActive);
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
