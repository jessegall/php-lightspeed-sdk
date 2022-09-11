<?php

namespace JesseGall\LightspeedSDK\Resources;

class Brand extends Resource
{


    /**
     * @return bool
     */
    public function getId(): bool
    {
        return $this->get('id');
    }

    /**
     * @param bool $id
     * @return $this
     */
    public function setId(bool $id): static
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
    public function getContent(): string
    {
        return $this->get('content');
    }

    /**
     * @param string $content
     * @return $this
     */
    public function setContent(string $content): static
    {
        return $this->set('content', $content);
    }

    /**
     * @return array
     */
    public function getImage(): array
    {
        return $this->get('image');
    }

    /**
     * @param array $image
     * @return $this
     */
    public function setImage(array $image): static
    {
        return $this->set('image', $image);
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
    public function getThumb(): string
    {
        return $this->get('thumb');
    }

    /**
     * @param string $thumb
     * @return $this
     */
    public function setThumb(string $thumb): static
    {
        return $this->set('thumb', $thumb);
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

    /**
     * @return Product[]
     */
    public function getProducts(): array
    {
        return $this->mapTo('products', Product::class);
    }

    /**
     * @param Product[] $products
     * @return $this
     */
    public function setProducts(array $products): static
    {
        $this->set('products', $products);

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

    /**
     * @return bool
     */
    public function getIsVisible(): bool
    {
        return $this->get('isVisible');
    }

    /**
     * @param bool $isVisible
     * @return $this
     */
    public function setIsVisible(bool $isVisible): static
    {
        return $this->set('isVisible', $isVisible);
    }

}
