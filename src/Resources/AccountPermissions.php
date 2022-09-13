<?php

namespace JesseGall\LightspeedSDK\Resources;

class AccountPermissions extends Resource
{

    protected string $url = '/accounts/{id}/permissions';


    /**
     * @return array
     */
    public function getContent(): array
    {
        return $this->get('content');
    }

    /**
     * @param array $content
     * @return $this
     */
    public function setContent(array $content): static
    {
        return $this->set('content', $content);
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->get('products');
    }

    /**
     * @param array $products
     * @return $this
     */
    public function setProducts(array $products): static
    {
        return $this->set('products', $products);
    }

    /**
     * @return array
     */
    public function getCustomers(): array
    {
        return $this->get('customers');
    }

    /**
     * @param array $customers
     * @return $this
     */
    public function setCustomers(array $customers): static
    {
        return $this->set('customers', $customers);
    }

    /**
     * @return array
     */
    public function getOrders(): array
    {
        return $this->get('orders');
    }

    /**
     * @param array $orders
     * @return $this
     */
    public function setOrders(array $orders): static
    {
        return $this->set('orders', $orders);
    }

    /**
     * @return array
     */
    public function getSettings(): array
    {
        return $this->get('settings');
    }

    /**
     * @param array $settings
     * @return $this
     */
    public function setSettings(array $settings): static
    {
        return $this->set('settings', $settings);
    }

    /**
     * @return array
     */
    public function getTracking(): array
    {
        return $this->get('tracking');
    }

    /**
     * @param array $tracking
     * @return $this
     */
    public function setTracking(array $tracking): static
    {
        return $this->set('tracking', $tracking);
    }

}
