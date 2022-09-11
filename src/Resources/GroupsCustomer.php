<?php

namespace JesseGall\LightspeedSDK\Resources;

class GroupsCustomer extends Resource
{


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->get('id');
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id): static
    {
        return $this->set('id', $id);
    }

    /**
     * @return Group
     */
    public function getGroup(): Group
    {
        return $this->mapTo('group', Group::class);
    }

    /**
     * @param Group $group
     * @return $this
     */
    public function setGroup(Group $group): static
    {
        $this->set('group', $group);

        return $this;
    }

    /**
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        return $this->mapTo('customer', Customer::class);
    }

    /**
     * @param Customer $customer
     * @return $this
     */
    public function setCustomer(Customer $customer): static
    {
        $this->set('customer', $customer);

        return $this;
    }

}
