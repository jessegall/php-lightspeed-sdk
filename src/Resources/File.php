<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * File
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/file
 */
class File extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/files';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'file';


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
    public function getExtension(): ?string
    {
        return $this->get('extension');
    }

    /**
     * @param string|null $extension
     * @return $this
     */
    public function setExtension(string $extension = null): static
    {
        return $this->set('extension', $extension);
    }

    /**
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->get('size');
    }

    /**
     * @param int|null $size
     * @return $this
     */
    public function setSize(int $size = null): static
    {
        return $this->set('size', $size);
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
     * @return string|null
     */
    public function getSrc(): ?string
    {
        return $this->get('src');
    }

    /**
     * @param string|null $src
     * @return $this
     */
    public function setSrc(string $src = null): static
    {
        return $this->set('src', $src);
    }

}
