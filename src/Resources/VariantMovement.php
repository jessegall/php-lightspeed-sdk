<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * VariantMovement
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/variantmovement
 */
class VariantMovement extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/variants/{id}/movements';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'variantMovement';


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
    public function getChannel(): ?string
    {
        return $this->get('channel');
    }

    /**
     * @param string|null $channel
     * @return $this
     */
    public function setChannel(string $channel = null): static
    {
        return $this->set('channel', $channel);
    }

    /**
     * @return int|null
     */
    public function getStockLevelChange(): ?int
    {
        return $this->get('stockLevelChange');
    }

    /**
     * @param int|null $stockLevelChange
     * @return $this
     */
    public function setStockLevelChange(int $stockLevelChange = null): static
    {
        return $this->set('stockLevelChange', $stockLevelChange);
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

    /**
     * @return Variant|null
     */
    public function getVariant(): ?Variant
    {
        return $this->relation('variant.resource.embedded', Variant::class);
    }


    /**
     * @return int|null
     */
    public function getVariantId(): ?int
    {
        return $this->get('variant.resource.id');
    }

    /**
     * @param Variant|null $variant
     * @return $this
     */
    public function setVariant(Variant $variant = null): static
    {
        $this->set('variant.resource.embedded', $variant);

        return $this;
    }

}
