<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * GroupsCustomer
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/groupscustomer
 */
class GroupsCustomer extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/groups/{id}/customers';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'groupsCustomer';


    /**
     * @return Group|null
     */
    public function getGroup(): ?Group
    {
        return $this->relation('group.resource.embedded', Group::class);
    }


    /**
     * @return int|null
     */
    public function getGroupId(): ?int
    {
        return $this->get('group.resource.id');
    }

    /**
     * @param Group|null $group
     * @return $this
     */
    public function setGroup(Group $group = null): static
    {
        $this->set('group.resource.embedded', $group);

        return $this;
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

}
