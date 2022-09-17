<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Blog
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/blog
 */
class Blog extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/blogs';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'blog';


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
    public function getCommentable(): ?string
    {
        return $this->get('commentable');
    }

    /**
     * @param string|null $commentable
     * @return $this
     */
    public function setCommentable(string $commentable = null): static
    {
        return $this->set('commentable', $commentable);
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
     * @return ResourceCollection<BlogArticle>|null
     */
    public function getArticles(): ?ResourceCollection
    {
        return $this->relation('articles.resource.embedded', BlogArticle::class, true);
    }


    /**
     * @param ResourceCollection<BlogArticle>|null $articles
     * @return $this
     */
    public function setArticles(ResourceCollection $articles = null): static
    {
        $this->set('articles.resource.embedded', $articles);

        return $this;
    }

    /**
     * @return ResourceCollection<BlogComment>|null
     */
    public function getComments(): ?ResourceCollection
    {
        return $this->relation('comments.resource.embedded', BlogComment::class, true);
    }


    /**
     * @param ResourceCollection<BlogComment>|null $comments
     * @return $this
     */
    public function setComments(ResourceCollection $comments = null): static
    {
        $this->set('comments.resource.embedded', $comments);

        return $this;
    }

    /**
     * @return ResourceCollection<BlogTag>|null
     */
    public function getTags(): ?ResourceCollection
    {
        return $this->relation('tags.resource.embedded', BlogTag::class, true);
    }


    /**
     * @param ResourceCollection<BlogTag>|null $tags
     * @return $this
     */
    public function setTags(ResourceCollection $tags = null): static
    {
        $this->set('tags.resource.embedded', $tags);

        return $this;
    }

}
