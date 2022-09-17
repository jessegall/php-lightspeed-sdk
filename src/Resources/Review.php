<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * Review
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/review
 */
class Review extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/reviews';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'review';


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
    public function getIsVisible(): ?bool
    {
        return $this->get('isVisible');
    }

    /**
     * @param bool|null $isVisible
     * @return $this
     */
    public function setIsVisible(bool $isVisible = null): static
    {
        return $this->set('isVisible', $isVisible);
    }

    /**
     * @return int|null
     */
    public function getScore(): ?int
    {
        return $this->get('score');
    }

    /**
     * @param int|null $score
     * @return $this
     */
    public function setScore(int $score = null): static
    {
        return $this->set('score', $score);
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
     * @return Customer|null
     */
    public function getCustomer(): ?Customer
    {
        return $this->relation('customer.resource.embedded', Customer::class);
    }


    /**
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->get('customer.resource.id');
    }

    /**
     * @param Customer|null $customer
     * @return $this
     */
    public function setCustomer(Customer $customer = null): static
    {
        $this->set('customer.resource.embedded', $customer);

        return $this;
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
