<?php

namespace JesseGall\LightspeedSDK\Resources;

class Filter extends Resource
{

    protected string $apiUrl = '/filters';

    protected string $handle = 'filter';

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
    public function getTitle(): string
    {
        return $this->get('title');
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title): static
    {
        return $this->set('title', $title);
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->get('position');
    }

    /**
     * @param int $position
     * @return $this
     */
    public function setPosition(int $position): static
    {
        return $this->set('position', $position);
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

}
