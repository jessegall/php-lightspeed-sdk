<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * BlogArticle
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/blogarticle
 */
class BlogArticle extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/blogs/{id}/articles';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'blogArticle';


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
    public function getPublishedAt(): ?string
    {
        return $this->get('publishedAt');
    }

    /**
     * @param string|null $publishedAt
     * @return $this
     */
    public function setPublishedAt(string $publishedAt = null): static
    {
        return $this->set('publishedAt', $publishedAt);
    }

    /**
     * @return bool|null
     */
    public function getIsPublished(): ?bool
    {
        return $this->get('isPublished');
    }

    /**
     * @param bool|null $isPublished
     * @return $this
     */
    public function setIsPublished(bool $isPublished = null): static
    {
        return $this->set('isPublished', $isPublished);
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
    public function getAuthor(): ?string
    {
        return $this->get('author');
    }

    /**
     * @param string|null $author
     * @return $this
     */
    public function setAuthor(string $author = null): static
    {
        return $this->set('author', $author);
    }

    /**
     * @return string|null
     */
    public function getSummary(): ?string
    {
        return $this->get('summary');
    }

    /**
     * @param string|null $summary
     * @return $this
     */
    public function setSummary(string $summary = null): static
    {
        return $this->set('summary', $summary);
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

    /**
     * @return bool|null
     */
    public function getImage(): ?bool
    {
        return $this->get('image');
    }

    /**
     * @param bool|null $image
     * @return $this
     */
    public function setImage(bool $image = null): static
    {
        return $this->set('image', $image);
    }

    /**
     * @return array|null
     */
    public function getLanguage(): ?array
    {
        return $this->get('language');
    }

    /**
     * @param array|null $language
     * @return $this
     */
    public function setLanguage(array $language = null): static
    {
        return $this->set('language', $language);
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
     * @return ResourceCollection<BlogArticleTag>|null
     */
    public function getTags(): ?ResourceCollection
    {
        return $this->relation('tags.resource.embedded', BlogArticleTag::class, true);
    }


    /**
     * @param ResourceCollection<BlogArticleTag>|null $tags
     * @return $this
     */
    public function setTags(ResourceCollection $tags = null): static
    {
        $this->set('tags.resource.embedded', $tags);

        return $this;
    }

}
