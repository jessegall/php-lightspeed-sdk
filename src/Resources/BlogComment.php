<?php

namespace JesseGall\LightspeedSDK\Resources;

class BlogComment extends Resource
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
     * @return bool
     */
    public function getIsApproved(): bool
    {
        return $this->get('isApproved');
    }

    /**
     * @param bool $isApproved
     * @return $this
     */
    public function setIsApproved(bool $isApproved): static
    {
        return $this->set('isApproved', $isApproved);
    }

    /**
     * @return string
     */
    public function getFrom(): string
    {
        return $this->get('from');
    }

    /**
     * @param string $from
     * @return $this
     */
    public function setFrom(string $from): static
    {
        return $this->set('from', $from);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->get('name');
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): static
    {
        return $this->set('name', $name);
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->get('email');
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email): static
    {
        return $this->set('email', $email);
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
     * @return string
     */
    public function getCode(): string
    {
        return $this->get('code');
    }

    /**
     * @param string $code
     * @return $this
     */
    public function setCode(string $code): static
    {
        return $this->set('code', $code);
    }

    /**
     * @return string
     */
    public function getLocale(): string
    {
        return $this->get('locale');
    }

    /**
     * @param string $locale
     * @return $this
     */
    public function setLocale(string $locale): static
    {
        return $this->set('locale', $locale);
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
        return $this->mapTo('blog', Blog::class);
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
     * @return Article
     */
    public function getArticle(): Article
    {
        return $this->mapTo('article', Article::class);
    }

    /**
     * @param Article $article
     * @return $this
     */
    public function setArticle(Article $article): static
    {
        $this->set('article', $article);

        return $this;
    }

    /**
     * @return bool
     */
    public function getCustomer(): bool
    {
        return $this->get('customer');
    }

    /**
     * @param bool $customer
     * @return $this
     */
    public function setCustomer(bool $customer): static
    {
        return $this->set('customer', $customer);
    }

}
