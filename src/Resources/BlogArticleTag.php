<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * BlogArticleTag
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/blogarticletag
 */
class BlogArticleTag extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/blogs/{id}/articles/{id}/tags';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'blogArticleTag';


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
     * @return BlogTag|null
     */
    public function getTag(): ?BlogTag
    {
        return $this->relation('tag.resource.embedded', BlogTag::class);
    }


    /**
     * @return int|null
     */
    public function getTagId(): ?int
    {
        return $this->get('tag.resource.id');
    }

    /**
     * @param BlogTag|null $tag
     * @return $this
     */
    public function setTag(BlogTag $tag = null): static
    {
        $this->set('tag.resource.embedded', $tag);

        return $this;
    }

}
