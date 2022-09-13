<?php

namespace JesseGall\LightspeedSDK\Resources;

class BlogArticleTag extends Resource
{

    protected string $url = '/blogs/{id}/articles/{id}/tags';


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
     * @return BlogArticle
     */
    public function getArticle(): BlogArticle
    {
        return $this->relation('article.resource.embedded', BlogArticle::class);
    }


    /**
     * @return int
     */
    public function getArticleId(): int
    {
        return $this->get('article.resource.id');
    }

    /**
     * @param BlogArticle $article
     * @return $this
     */
    public function setArticle(BlogArticle $article): static
    {
        $this->set('article.resource.embedded', $article);

        return $this;
    }

    /**
     * @return BlogTag
     */
    public function getTag(): BlogTag
    {
        return $this->relation('tag.resource.embedded', BlogTag::class);
    }


    /**
     * @return int
     */
    public function getTagId(): int
    {
        return $this->get('tag.resource.id');
    }

    /**
     * @param BlogTag $tag
     * @return $this
     */
    public function setTag(BlogTag $tag): static
    {
        $this->set('tag.resource.embedded', $tag);

        return $this;
    }

}
