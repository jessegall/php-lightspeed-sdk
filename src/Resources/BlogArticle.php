<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class BlogArticle extends Resource
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
     * @return string
     */
    public function getPublishedAt(): string
    {
        return $this->get('publishedAt');
    }

    /**
     * @param string $publishedAt
     * @return $this
     */
    public function setPublishedAt(string $publishedAt): static
    {
        return $this->set('publishedAt', $publishedAt);
    }

    /**
     * @return bool
     */
    public function getIsPublished(): bool
    {
        return $this->get('isPublished');
    }

    /**
     * @param bool $isPublished
     * @return $this
     */
    public function setIsPublished(bool $isPublished): static
    {
        return $this->set('isPublished', $isPublished);
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
    public function getAuthor(): string
    {
        return $this->get('author');
    }

    /**
     * @param string $author
     * @return $this
     */
    public function setAuthor(string $author): static
    {
        return $this->set('author', $author);
    }

    /**
     * @return string
     */
    public function getSummary(): string
    {
        return $this->get('summary');
    }

    /**
     * @param string $summary
     * @return $this
     */
    public function setSummary(string $summary): static
    {
        return $this->set('summary', $summary);
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
     * @return bool
     */
    public function getImage(): bool
    {
        return $this->get('image');
    }

    /**
     * @param bool $image
     * @return $this
     */
    public function setImage(bool $image): static
    {
        return $this->set('image', $image);
    }

    /**
     * @return array
     */
    public function getLanguage(): array
    {
        return $this->get('language');
    }

    /**
     * @param array $language
     * @return $this
     */
    public function setLanguage(array $language): static
    {
        return $this->set('language', $language);
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
        $this->set('blog', $blog);

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
