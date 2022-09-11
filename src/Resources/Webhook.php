<?php

namespace JesseGall\LightspeedSDK\Resources;

class Webhook extends Resource
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
    public function getItemGroup(): string
    {
        return $this->get('itemGroup');
    }

    /**
     * @param string $itemGroup
     * @return $this
     */
    public function setItemGroup(string $itemGroup): static
    {
        return $this->set('itemGroup', $itemGroup);
    }

    /**
     * @return string
     */
    public function getItemAction(): string
    {
        return $this->get('itemAction');
    }

    /**
     * @param string $itemAction
     * @return $this
     */
    public function setItemAction(string $itemAction): static
    {
        return $this->set('itemAction', $itemAction);
    }

    /**
     * @return array
     */
    public function getLanguage(): array
    {
        return $this->get('language');
    }

    /**
     * @param array $language
     * @return $this
     */
    public function setLanguage(array $language): static
    {
        return $this->set('language', $language);
    }

    /**
     * @return string
     */
    public function getFormat(): string
    {
        return $this->get('format');
    }

    /**
     * @param string $format
     * @return $this
     */
    public function setFormat(string $format): static
    {
        return $this->set('format', $format);
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->get('address');
    }

    /**
     * @param string $address
     * @return $this
     */
    public function setAddress(string $address): static
    {
        return $this->set('address', $address);
    }

}
