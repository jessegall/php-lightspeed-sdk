<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * TagsProduct
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/tagsproduct
 */
class TagsProduct extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/tags/{id}/products';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'tagsProduct';


    /**
     * @return Tag|null
     */
    public function getTag(): ?Tag
    {
        return $this->relation('tag.resource.embedded', Tag::class);
    }


    /**
     * @return int|null
     */
    public function getTagId(): ?int
    {
        return $this->get('tag.resource.id');
    }

    /**
     * @param Tag|null $tag
     * @return $this
     */
    public function setTag(Tag $tag = null): static
    {
        $this->set('tag.resource.embedded', $tag);

        return $this;
    }

    /**
     * @return Product|null
     */
    public function getProduct(): ?Product
    {
        return $this->relation('product.resource.embedded', Product::class);
    }


    /**
     * @return int|null
     */
    public function getProductId(): ?int
    {
        return $this->get('product.resource.id');
    }

    /**
     * @param Product|null $product
     * @return $this
     */
    public function setProduct(Product $product = null): static
    {
        $this->set('product.resource.embedded', $product);

        return $this;
    }

}
