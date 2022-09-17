<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * Filter
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/filter
 */
class Filter extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/filters';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'filter';


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
    public function getTitle(): ?string
    {
        return $this->get('title');
    }

    /**
     * @param string|null $title
     * @return $this
     */
    public function setTitle(string $title = null): static
    {
        return $this->set('title', $title);
    }

    /**
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->get('position');
    }

    /**
     * @param int|null $position
     * @return $this
     */
    public function setPosition(int $position = null): static
    {
        return $this->set('position', $position);
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

}
