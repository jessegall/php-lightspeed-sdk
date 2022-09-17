<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * BlogArticleImage
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/blogarticleimage
 */
class BlogArticleImage extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/blogs/{id}/articles/{id}/images';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'blogArticleImage';


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
    public function getThumb(): ?string
    {
        return $this->get('thumb');
    }

    /**
     * @param string|null $thumb
     * @return $this
     */
    public function setThumb(string $thumb = null): static
    {
        return $this->set('thumb', $thumb);
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
