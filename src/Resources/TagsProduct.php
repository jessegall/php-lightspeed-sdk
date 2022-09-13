<?php

namespace JesseGall\LightspeedSDK\Resources;

class TagsProduct extends Resource
{

    protected string $url = '/tags/{id}/products';


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
        $this->set('tag.resource.embedded', $tag);

        return $this;
    }

    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->relation('product.resource.embedded', Product::class);
    }


    /**
     * @return int
     */
    public function getProductId(): int
    {
        return $this->get('product.resource.id');
    }

    /**
     * @param Product $product
     * @return $this
     */
    public function setProduct(Product $product): static
    {
        $this->set('product.resource.embedded', $product);

        return $this;
    }

}
