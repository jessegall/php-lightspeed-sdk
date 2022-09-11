<?php

namespace JesseGall\LightspeedSDK\Resources;

class Blog extends Resource
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
     * @return Article[]
     */
    public function getArticles(): array
    {
        return $this->mapTo('articles.resource.embedded', Article::class);
    }


    /**
     * @param Article[] $articles
     * @return $this
     */
    public function setArticles(array $articles): static
    {
        $this->set('articles', $articles);

        return $this;
    }

    /**
     * @return Comment[]
     */
    public function getComments(): array
    {
        return $this->mapTo('comments.resource.embedded', Comment::class);
    }


    /**
     * @param Comment[] $comments
     * @return $this
     */
    public function setComments(array $comments): static
    {
        $this->set('comments', $comments);

        return $this;
    }

    /**
     * @return Tag[]
     */
    public function getTags(): array
    {
        return $this->mapTo('tags.resource.embedded', Tag::class);
    }


    /**
     * @param Tag[] $tags
     * @return $this
     */
    public function setTags(array $tags): static
    {
        $this->set('tags', $tags);

        return $this;
    }

}
