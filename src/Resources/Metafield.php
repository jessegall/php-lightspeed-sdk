<?php

namespace JesseGall\LightspeedSDK\Resources;

class Metafield extends Resource
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
    public function getKey(): string
    {
        return $this->get('key');
    }

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key): static
    {
        return $this->set('key', $key);
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->get('value');
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setValue(string $value): static
    {
        return $this->set('value', $value);
    }

    /**
     * @return string
     */
    public function getOwnerType(): string
    {
        return $this->get('ownerType');
    }

    /**
     * @param string $ownerType
     * @return $this
     */
    public function setOwnerType(string $ownerType): static
    {
        return $this->set('ownerType', $ownerType);
    }

    /**
     * @return int
     */
    public function getOwnerId(): int
    {
        return $this->get('ownerId');
    }

    /**
     * @param int $ownerId
     * @return $this
     */
    public function setOwnerId(int $ownerId): static
    {
        return $this->set('ownerId', $ownerId);
    }

    /**
     * @return OwnerResource
     */
    public function getOwnerResource(): OwnerResource
    {
        return $this->mapTo('ownerResource', OwnerResource::class);
    }

    /**
     * @param OwnerResource $ownerResource
     * @return $this
     */
    public function setOwnerResource(OwnerResource $ownerResource): static
    {
        $this->set('ownerResource', $ownerResource);

        return $this;
    }

    /**
     * @return array
     */
    public function getResource(): array
    {
        return $this->get('resource');
    }

    /**
     * @param array $resource
     * @return $this
     */
    public function setResource(array $resource): static
    {
        return $this->set('resource', $resource);
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
    public function getLink(): string
    {
        return $this->get('link');
    }

    /**
     * @param string $link
     * @return $this
     */
    public function setLink(string $link): static
    {
        return $this->set('link', $link);
    }

}
