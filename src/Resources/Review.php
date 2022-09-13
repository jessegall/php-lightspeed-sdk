<?php

namespace JesseGall\LightspeedSDK\Resources;

class Review extends Resource
{

    protected string $url = '/reviews';


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
    public function getIsVisible(): bool
    {
        return $this->get('isVisible');
    }

    /**
     * @param bool $isVisible
     * @return $this
     */
    public function setIsVisible(bool $isVisible): static
    {
        return $this->set('isVisible', $isVisible);
    }

    /**
     * @return int
     */
    public function getScore(): int
    {
        return $this->get('score');
    }

    /**
     * @param int $score
     * @return $this
     */
    public function setScore(int $score): static
    {
        return $this->set('score', $score);
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
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        return $this->relation('customer.resource.embedded', Customer::class);
    }


    /**
     * @return int
     */
    public function getCustomerId(): int
    {
        return $this->get('customer.resource.id');
    }

    /**
     * @param Customer $customer
     * @return $this
     */
    public function setCustomer(Customer $customer): static
    {
        $this->set('customer.resource.embedded', $customer);

        return $this;
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
