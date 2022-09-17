<?php

namespace JesseGall\LightspeedSDK\Resources;

class File extends Resource
{

    protected string $endpoint = '/files';

    protected string $handle = 'file';

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
    public function getExtension(): string
    {
        return $this->get('extension');
    }

    /**
     * @param string $extension
     * @return $this
     */
    public function setExtension(string $extension): static
    {
        return $this->set('extension', $extension);
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->get('size');
    }

    /**
     * @param int $size
     * @return $this
     */
    public function setSize(int $size): static
    {
        return $this->set('size', $size);
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
     * @return string
     */
    public function getSrc(): string
    {
        return $this->get('src');
    }

    /**
     * @param string $src
     * @return $this
     */
    public function setSrc(string $src): static
    {
        return $this->set('src', $src);
    }

}
