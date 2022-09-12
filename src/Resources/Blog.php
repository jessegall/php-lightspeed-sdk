<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class Blog extends Resource
{


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
     * @return int
     */
    public function getSortOrder(): int
    {
        return $this->get('sortOrder');
    }

    /**
     * @param int $sortOrder
     * @return $this
     */
    public function setSortOrder(int $sortOrder): static
    {
        return $this->set('sortOrder', $sortOrder);
    }

    /**
     * @return string
     */
    public function getCommentable(): string
    {
        return $this->get('commentable');
    }

    /**
     * @param string $commentable
     * @return $this
     */
    public function setCommentable(string $commentable): static
    {
        return $this->set('commentable', $commentable);
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
     * @return ResourceCollection<Article>
     */
    public function getArticles(): ResourceCollection
    {
        return $this->relation('articles.resource.embedded', Article::class, true);
    }


    /**
     * @param ResourceCollection<Article> $articles
     * @return $this
     */
    public function setArticles(ResourceCollection $articles): static
    {
        $this->set('articles', $articles);

        return $this;
    }

    /**
     * @return ResourceCollection<Comment>
     */
    public function getComments(): ResourceCollection
    {
        return $this->relation('comments.resource.embedded', Comment::class, true);
    }


    /**
     * @param ResourceCollection<Comment> $comments
     * @return $this
     */
    public function setComments(ResourceCollection $comments): static
    {
        $this->set('comments', $comments);

        return $this;
    }

    /**
     * @return ResourceCollection<Tag>
     */
    public function getTags(): ResourceCollection
    {
        return $this->relation('tags.resource.embedded', Tag::class, true);
    }


    /**
     * @param ResourceCollection<Tag> $tags
     * @return $this
     */
    public function setTags(ResourceCollection $tags): static
    {
        $this->set('tags', $tags);

        return $this;
    }

}
