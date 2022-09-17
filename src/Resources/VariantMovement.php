<?php

namespace JesseGall\LightspeedSDK\Resources;

class VariantMovement extends Resource
{

    protected string $endpoint = '/variants/{id}/movements';

    protected string $handle = 'variantMovement';

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
    public function getChannel(): string
    {
        return $this->get('channel');
    }

    /**
     * @param string $channel
     * @return $this
     */
    public function setChannel(string $channel): static
    {
        return $this->set('channel', $channel);
    }

    /**
     * @return int
     */
    public function getStockLevelChange(): int
    {
        return $this->get('stockLevelChange');
    }

    /**
     * @param int $stockLevelChange
     * @return $this
     */
    public function setStockLevelChange(int $stockLevelChange): static
    {
        return $this->set('stockLevelChange', $stockLevelChange);
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

    /**
     * @return Variant
     */
    public function getVariant(): Variant
    {
        return $this->relation('variant.resource.embedded', Variant::class);
    }


    /**
     * @return int
     */
    public function getVariantId(): int
    {
        return $this->get('variant.resource.id');
    }

    /**
     * @param Variant $variant
     * @return $this
     */
    public function setVariant(Variant $variant): static
    {
        $this->set('variant.resource.embedded', $variant);

        return $this;
    }

}
