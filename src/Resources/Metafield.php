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

    /**
     * @return string|null
     */
    public function getOwnerType(): ?string
    {
        return $this->get('ownerType');
    }

    /**
     * @param string|null $ownerType
     * @return $this
     */
    public function setOwnerType(string $ownerType = null): static
    {
        return $this->set('ownerType', $ownerType);
    }

    /**
     * @return int|null
     */
    public function getOwnerId(): ?int
    {
        return $this->get('ownerId');
    }

    /**
     * @param int|null $ownerId
     * @return $this
     */
    public function setOwnerId(int $ownerId = null): static
    {
        return $this->set('ownerId', $ownerId);
    }

    /**
     * @return Customer|null
     */
    public function getOwnerResource(): ?Customer
    {
        return $this->relation('ownerResource.resource.embedded', Customer::class);
    }


    /**
     * @return int|null
     */
    public function getOwnerResourceId(): ?int
    {
        return $this->get('ownerResource.resource.id');
    }

    /**
     * @param Customer|null $ownerResource
     * @return $this
     */
    public function setOwnerResource(Customer $ownerResource = null): static
    {
        $this->set('ownerResource.resource.embedded', $ownerResource);

        return $this;
    }

}
