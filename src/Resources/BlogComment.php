<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * BlogComment
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/blogcomment
 */
class BlogComment extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/blogs/{id}/comments';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'blogComment';


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
    public function getIsApproved(): ?bool
    {
        return $this->get('isApproved');
    }

    /**
     * @param bool|null $isApproved
     * @return $this
     */
    public function setIsApproved(bool $isApproved = null): static
    {
        return $this->set('isApproved', $isApproved);
    }

    /**
     * @return string|null
     */
    public function getFrom(): ?string
    {
        return $this->get('from');
    }

    /**
     * @param string|null $from
     * @return $this
     */
    public function setFrom(string $from = null): static
    {
        return $this->set('from', $from);
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->get('name');
    }

    /**
     * @param string|null $name
     * @return $this
     */
    public function setName(string $name = null): static
    {
        return $this->set('name', $name);
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->get('email');
    }

    /**
     * @param string|null $email
     * @return $this
     */
    public function setEmail(string $email = null): static
    {
        return $this->set('email', $email);
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
     * @return BlogArticle|null
     */
    public function getArticle(): ?BlogArticle
    {
        return $this->relation('article.resource.embedded', BlogArticle::class);
    }


    /**
     * @return int|null
     */
    public function getArticleId(): ?int
    {
        return $this->get('article.resource.id');
    }

    /**
     * @param BlogArticle|null $article
     * @return $this
     */
    public function setArticle(BlogArticle $article = null): static
    {
        $this->set('article.resource.embedded', $article);

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCustomer(): ?bool
    {
        return $this->get('customer');
    }

    /**
     * @param bool|null $customer
     * @return $this
     */
    public function setCustomer(bool $customer = null): static
    {
        return $this->set('customer', $customer);
    }

}
