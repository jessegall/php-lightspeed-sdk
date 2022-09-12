<?php

namespace JesseGall\LightspeedSDK\Resources;

class BlogArticleTag extends Resource
{


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
     * @return Article
     */
    public function getArticle(): Article
    {
        return $this->relation('article.resource.embedded', Article::class);
    }


    /**
     * @return int
     */
    public function getArticleId(): int
    {
        return $this->get('article.resource.id');
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
     * @return Tag
     */
    public function getTag(): Tag
    {
        return $this->relation('tag.resource.embedded', Tag::class);
    }


    /**
     * @return int
     */
    public function getTagId(): int
    {
        return $this->get('tag.resource.id');
    }

    /**
     * @param Tag $tag
     * @return $this
     */
    public function setTag(Tag $tag): static
    {
        $this->set('tag', $tag);

        return $this;
    }

}
