<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * Metafield
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/metafield
 */
class Metafield extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/metafields';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'metafield';


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
    public function getKey(): ?string
    {
        return $this->get('key');
    }

    /**
     * @param string|null $key
     * @return $this
     */
    public function setKey(string $key = null): static
    {
        return $this->set('key', $key);
    }

    /**
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->get('value');
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setValue(string $value = null): static
    {
        return $this->set('value', $value);
    }

}
