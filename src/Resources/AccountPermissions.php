<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * AccountPermissions
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/accountpermissions
 */
class AccountPermissions extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/accounts/{id}/permissions';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'accountPermissions';


    /**
     * @return array|null
     */
    public function getContent(): ?array
    {
        return $this->get('content');
    }

    /**
     * @param array|null $content
     * @return $this
     */
    public function setContent(array $content = null): static
    {
        return $this->set('content', $content);
    }

    /**
     * @return array|null
     */
    public function getProducts(): ?array
    {
        return $this->get('products');
    }

    /**
     * @param array|null $products
     * @return $this
     */
    public function setProducts(array $products = null): static
    {
        return $this->set('products', $products);
    }

    /**
     * @return array|null
     */
    public function getCustomers(): ?array
    {
        return $this->get('customers');
    }

    /**
     * @param array|null $customers
     * @return $this
     */
    public function setCustomers(array $customers = null): static
    {
        return $this->set('customers', $customers);
    }

    /**
     * @return array|null
     */
    public function getOrders(): ?array
    {
        return $this->get('orders');
    }

    /**
     * @param array|null $orders
     * @return $this
     */
    public function setOrders(array $orders = null): static
    {
        return $this->set('orders', $orders);
    }

    /**
     * @return array|null
     */
    public function getSettings(): ?array
    {
        return $this->get('settings');
    }

    /**
     * @param array|null $settings
     * @return $this
     */
    public function setSettings(array $settings = null): static
    {
        return $this->set('settings', $settings);
    }

    /**
     * @return array|null
     */
    public function getTracking(): ?array
    {
        return $this->get('tracking');
    }

    /**
     * @param array|null $tracking
     * @return $this
     */
    public function setTracking(array $tracking = null): static
    {
        return $this->set('tracking', $tracking);
    }

}
