<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * Textpage
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/textpage
 */
class Textpage extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/textpages';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'textpage';


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
     * @return bool|null
     */
    public function getIsLocked(): ?bool
    {
        return $this->get('isLocked');
    }

    /**
     * @param bool|null $isLocked
     * @return $this
     */
    public function setIsLocked(bool $isLocked = null): static
    {
        return $this->set('isLocked', $isLocked);
    }

    /**
     * @return bool|null
     */
    public function getIsVisible(): ?bool
    {
        return $this->get('isVisible');
    }

    /**
     * @param bool|null $isVisible
     * @return $this
     */
    public function setIsVisible(bool $isVisible = null): static
    {
        return $this->set('isVisible', $isVisible);
    }

    /**
     * @return int|null
     */
    public function getSortOrder(): ?int
    {
        return $this->get('sortOrder');
    }

    /**
     * @param int|null $sortOrder
     * @return $this
     */
    public function setSortOrder(int $sortOrder = null): static
    {
        return $this->set('sortOrder', $sortOrder);
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->get('url');
    }

    /**
     * @param string|null $url
     * @return $this
     */
    public function setUrl(string $url = null): static
    {
        return $this->set('url', $url);
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
    public function getContent(): ?string
    {
        return $this->get('content');
    }

    /**
     * @param string|null $content
     * @return $this
     */
    public function setContent(string $content = null): static
    {
        return $this->set('content', $content);
    }

}
