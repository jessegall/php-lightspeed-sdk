<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Group
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/group
 */
class Group extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/groups';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'group';


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
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->get('title');
    }

    /**
     * @param string|null $title
     * @return $this
     */
    public function setTitle(string $title = null): static
    {
        return $this->set('title', $title);
    }

    /**
     * @return ResourceCollection<GroupsCustomer>|null
     */
    public function getCustomers(): ?ResourceCollection
    {
        return $this->relation('customers.resource.embedded', GroupsCustomer::class, true);
    }


    /**
     * @param ResourceCollection<GroupsCustomer>|null $customers
     * @return $this
     */
    public function setCustomers(ResourceCollection $customers = null): static
    {
        $this->set('customers.resource.embedded', $customers);

        return $this;
    }

}
