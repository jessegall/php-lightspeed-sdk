<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class BlogTag extends Resource
{

    protected string $apiUrl = '/blogs/{id}/tags';

    protected string $handle = 'blogTag';

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
     * @return mixed
     */
    public function getUpdatedAt(): mixed
    {
        return $this->get('updatedAt');
    }

    /**
     * @param mixed $updatedAt
     * @return $this
     */
    public function setUpdatedAt(mixed $updatedAt): static
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
     * @return Blog
     */
    public function getBlog(): Blog
    {
        return $this->relation('blog.resource.embedded', Blog::class);
    }


    /**
     * @return int
     */
    public function getBlogId(): int
    {
        return $this->get('blog.resource.id');
    }

    /**
     * @param Blog $blog
     * @return $this
     */
    public function setBlog(Blog $blog): static
    {
        $this->set('blog.resource.embedded', $blog);

        return $this;
    }

    /**
     * @return ResourceCollection<BlogArticleTag>
     */
    public function getArticles(): ResourceCollection
    {
        return $this->relation('articles.resource.embedded', BlogArticleTag::class, true);
    }


    /**
     * @param ResourceCollection<BlogArticleTag> $articles
     * @return $this
     */
    public function setArticles(ResourceCollection $articles): static
    {
        $this->set('articles.resource.embedded', $articles);

        return $this;
    }

}
