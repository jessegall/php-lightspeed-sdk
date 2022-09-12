<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class Group extends Resource
{


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
     * @return string
     */
    public function getTitle(): string
    {
        return $this->get('title');
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title): static
    {
        return $this->set('title', $title);
    }

    /**
     * @return ResourceCollection<Customer>
     */
    public function getCustomers(): ResourceCollection
    {
        return $this->relation('customers.resource.embedded', Customer::class, true);
    }


    /**
     * @param ResourceCollection<Customer> $customers
     * @return $this
     */
    public function setCustomers(ResourceCollection $customers): static
    {
        $this->set('customers', $customers);

        return $this;
    }

}
