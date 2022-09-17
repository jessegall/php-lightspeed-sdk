<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * BlogTag
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/blogtag
 */
class BlogTag extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/blogs/{id}/tags';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'blogTag';


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
     * @return mixed|null
     */
    public function getUpdatedAt(): mixed
    {
        return $this->get('updatedAt');
    }

    /**
     * @param mixed|null $updatedAt
     * @return $this
     */
    public function setUpdatedAt(mixed $updatedAt = null): static
    {
        return $this->set('updatedAt', $updatedAt);
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
     * @return Blog|null
     */
    public function getBlog(): ?Blog
    {
        return $this->relation('blog.resource.embedded', Blog::class);
    }


    /**
     * @return int|null
     */
    public function getBlogId(): ?int
    {
        return $this->get('blog.resource.id');
    }

    /**
     * @param Blog|null $blog
     * @return $this
     */
    public function setBlog(Blog $blog = null): static
    {
        $this->set('blog.resource.embedded', $blog);

        return $this;
    }

    /**
     * @return ResourceCollection<BlogArticleTag>|null
     */
    public function getArticles(): ?ResourceCollection
    {
        return $this->relation('articles.resource.embedded', BlogArticleTag::class, true);
    }


    /**
     * @param ResourceCollection<BlogArticleTag>|null $articles
     * @return $this
     */
    public function setArticles(ResourceCollection $articles = null): static
    {
        $this->set('articles.resource.embedded', $articles);

        return $this;
    }

}
