<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Customer
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/customer
 */
class Customer extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/customers';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'customer';


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
    public function getIsConfirmed(): ?bool
    {
        return $this->get('isConfirmed');
    }

    /**
     * @param bool|null $isConfirmed
     * @return $this
     */
    public function setIsConfirmed(bool $isConfirmed = null): static
    {
        return $this->set('isConfirmed', $isConfirmed);
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->get('type');
    }

    /**
     * @param string|null $type
     * @return $this
     */
    public function setType(string $type = null): static
    {
        return $this->set('type', $type);
    }

    /**
     * @return mixed|null
     */
    public function getLastOnlineAt(): mixed
    {
        return $this->get('lastOnlineAt');
    }

    /**
     * @param mixed|null $lastOnlineAt
     * @return $this
     */
    public function setLastOnlineAt(mixed $lastOnlineAt = null): static
    {
        return $this->set('lastOnlineAt', $lastOnlineAt);
    }

    /**
     * @return bool|null
     */
    public function getRemoteIp(): ?bool
    {
        return $this->get('remoteIp');
    }

    /**
     * @param bool|null $remoteIp
     * @return $this
     */
    public function setRemoteIp(bool $remoteIp = null): static
    {
        return $this->set('remoteIp', $remoteIp);
    }

    /**
     * @return bool|null
     */
    public function getUserAgent(): ?bool
    {
        return $this->get('userAgent');
    }

    /**
     * @param bool|null $userAgent
     * @return $this
     */
    public function setUserAgent(bool $userAgent = null): static
    {
        return $this->set('userAgent', $userAgent);
    }

    /**
     * @return bool|null
     */
    public function getReferralId(): ?bool
    {
        return $this->get('referralId');
    }

    /**
     * @param bool|null $referralId
     * @return $this
     */
    public function setReferralId(bool $referralId = null): static
    {
        return $this->set('referralId', $referralId);
    }

    /**
     * @return bool|null
     */
    public function getGender(): ?bool
    {
        return $this->get('gender');
    }

    /**
     * @param bool|null $gender
     * @return $this
     */
    public function setGender(bool $gender = null): static
    {
        return $this->set('gender', $gender);
    }

    /**
     * @return bool|null
     */
    public function getBirthDate(): ?bool
    {
        return $this->get('birthDate');
    }

    /**
     * @param bool|null $birthDate
     * @return $this
     */
    public function setBirthDate(bool $birthDate = null): static
    {
        return $this->set('birthDate', $birthDate);
    }

    /**
     * @return string|null
     */
    public function getNationalId(): ?string
    {
        return $this->get('nationalId');
    }

    /**
     * @param string|null $nationalId
     * @return $this
     */
    public function setNationalId(string $nationalId = null): static
    {
        return $this->set('nationalId', $nationalId);
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->get('email');
    }

    /**
     * @param string|null $email
     * @return $this
     */
    public function setEmail(string $email = null): static
    {
        return $this->set('email', $email);
    }

    /**
     * @return string|null
     */
    public function getFirstname(): ?string
    {
        return $this->get('firstname');
    }

    /**
     * @param string|null $firstname
     * @return $this
     */
    public function setFirstname(string $firstname = null): static
    {
        return $this->set('firstname', $firstname);
    }

    /**
     * @return string|null
     */
    public function getMiddlename(): ?string
    {
        return $this->get('middlename');
    }

    /**
     * @param string|null $middlename
     * @return $this
     */
    public function setMiddlename(string $middlename = null): static
    {
        return $this->set('middlename', $middlename);
    }

    /**
     * @return string|null
     */
    public function getLastname(): ?string
    {
        return $this->get('lastname');
    }

    /**
     * @param string|null $lastname
     * @return $this
     */
    public function setLastname(string $lastname = null): static
    {
        return $this->set('lastname', $lastname);
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->get('phone');
    }

    /**
     * @param string|null $phone
     * @return $this
     */
    public function setPhone(string $phone = null): static
    {
        return $this->set('phone', $phone);
    }

    /**
     * @return string|null
     */
    public function getMobile(): ?string
    {
        return $this->get('mobile');
    }

    /**
     * @param string|null $mobile
     * @return $this
     */
    public function setMobile(string $mobile = null): static
    {
        return $this->set('mobile', $mobile);
    }

    /**
     * @return bool|null
     */
    public function getIsCompany(): ?bool
    {
        return $this->get('isCompany');
    }

    /**
     * @param bool|null $isCompany
     * @return $this
     */
    public function setIsCompany(bool $isCompany = null): static
    {
        return $this->set('isCompany', $isCompany);
    }

    /**
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->get('companyName');
    }

    /**
     * @param string|null $companyName
     * @return $this
     */
    public function setCompanyName(string $companyName = null): static
    {
        return $this->set('companyName', $companyName);
    }

    /**
     * @return string|null
     */
    public function getCompanyCoCNumber(): ?string
    {
        return $this->get('companyCoCNumber');
    }

    /**
     * @param string|null $companyCoCNumber
     * @return $this
     */
    public function setCompanyCoCNumber(string $companyCoCNumber = null): static
    {
        return $this->set('companyCoCNumber', $companyCoCNumber);
    }

    /**
     * @return string|null
     */
    public function getCompanyVatNumber(): ?string
    {
        return $this->get('companyVatNumber');
    }

    /**
     * @param string|null $companyVatNumber
     * @return $this
     */
    public function setCompanyVatNumber(string $companyVatNumber = null): static
    {
        return $this->set('companyVatNumber', $companyVatNumber);
    }

    /**
     * @return string|null
     */
    public function getAddressBillingName(): ?string
    {
        return $this->get('addressBillingName');
    }

    /**
     * @param string|null $addressBillingName
     * @return $this
     */
    public function setAddressBillingName(string $addressBillingName = null): static
    {
        return $this->set('addressBillingName', $addressBillingName);
    }

    /**
     * @return string|null
     */
    public function getAddressBillingStreet(): ?string
    {
        return $this->get('addressBillingStreet');
    }

    /**
     * @param string|null $addressBillingStreet
     * @return $this
     */
    public function setAddressBillingStreet(string $addressBillingStreet = null): static
    {
        return $this->set('addressBillingStreet', $addressBillingStreet);
    }

    /**
     * @return string|null
     */
    public function getAddressBillingStreet2(): ?string
    {
        return $this->get('addressBillingStreet2');
    }

    /**
     * @param string|null $addressBillingStreet2
     * @return $this
     */
    public function setAddressBillingStreet2(string $addressBillingStreet2 = null): static
    {
        return $this->set('addressBillingStreet2', $addressBillingStreet2);
    }

    /**
     * @return string|null
     */
    public function getAddressBillingNumber(): ?string
    {
        return $this->get('addressBillingNumber');
    }

    /**
     * @param string|null $addressBillingNumber
     * @return $this
     */
    public function setAddressBillingNumber(string $addressBillingNumber = null): static
    {
        return $this->set('addressBillingNumber', $addressBillingNumber);
    }

    /**
     * @return string|null
     */
    public function getAddressBillingExtension(): ?string
    {
        return $this->get('addressBillingExtension');
    }

    /**
     * @param string|null $addressBillingExtension
     * @return $this
     */
    public function setAddressBillingExtension(string $addressBillingExtension = null): static
    {
        return $this->set('addressBillingExtension', $addressBillingExtension);
    }

    /**
     * @return string|null
     */
    public function getAddressBillingZipcode(): ?string
    {
        return $this->get('addressBillingZipcode');
    }

    /**
     * @param string|null $addressBillingZipcode
     * @return $this
     */
    public function setAddressBillingZipcode(string $addressBillingZipcode = null): static
    {
        return $this->set('addressBillingZipcode', $addressBillingZipcode);
    }

    /**
     * @return string|null
     */
    public function getAddressBillingCity(): ?string
    {
        return $this->get('addressBillingCity');
    }

    /**
     * @param string|null $addressBillingCity
     * @return $this
     */
    public function setAddressBillingCity(string $addressBillingCity = null): static
    {
        return $this->set('addressBillingCity', $addressBillingCity);
    }

    /**
     * @return string|null
     */
    public function getAddressBillingRegion(): ?string
    {
        return $this->get('addressBillingRegion');
    }

    /**
     * @param string|null $addressBillingRegion
     * @return $this
     */
    public function setAddressBillingRegion(string $addressBillingRegion = null): static
    {
        return $this->set('addressBillingRegion', $addressBillingRegion);
    }

    /**
     * @return array|null
     */
    public function getAddressBillingCountry(): ?array
    {
        return $this->get('addressBillingCountry');
    }

    /**
     * @param array|null $addressBillingCountry
     * @return $this
     */
    public function setAddressBillingCountry(array $addressBillingCountry = null): static
    {
        return $this->set('addressBillingCountry', $addressBillingCountry);
    }

    /**
     * @return bool|null
     */
    public function getAddressShippingCompany(): ?bool
    {
        return $this->get('addressShippingCompany');
    }

    /**
     * @param bool|null $addressShippingCompany
     * @return $this
     */
    public function setAddressShippingCompany(bool $addressShippingCompany = null): static
    {
        return $this->set('addressShippingCompany', $addressShippingCompany);
    }

    /**
     * @return string|null
     */
    public function getAddressShippingName(): ?string
    {
        return $this->get('addressShippingName');
    }

    /**
     * @param string|null $addressShippingName
     * @return $this
     */
    public function setAddressShippingName(string $addressShippingName = null): static
    {
        return $this->set('addressShippingName', $addressShippingName);
    }

    /**
     * @return string|null
     */
    public function getAddressShippingStreet(): ?string
    {
        return $this->get('addressShippingStreet');
    }

    /**
     * @param string|null $addressShippingStreet
     * @return $this
     */
    public function setAddressShippingStreet(string $addressShippingStreet = null): static
    {
        return $this->set('addressShippingStreet', $addressShippingStreet);
    }

    /**
     * @return string|null
     */
    public function getAddressShippingStreet2(): ?string
    {
        return $this->get('addressShippingStreet2');
    }

    /**
     * @param string|null $addressShippingStreet2
     * @return $this
     */
    public function setAddressShippingStreet2(string $addressShippingStreet2 = null): static
    {
        return $this->set('addressShippingStreet2', $addressShippingStreet2);
    }

    /**
     * @return string|null
     */
    public function getAddressShippingNumber(): ?string
    {
        return $this->get('addressShippingNumber');
    }

    /**
     * @param string|null $addressShippingNumber
     * @return $this
     */
    public function setAddressShippingNumber(string $addressShippingNumber = null): static
    {
        return $this->set('addressShippingNumber', $addressShippingNumber);
    }

    /**
     * @return string|null
     */
    public function getAddressShippingExtension(): ?string
    {
        return $this->get('addressShippingExtension');
    }

    /**
     * @param string|null $addressShippingExtension
     * @return $this
     */
    public function setAddressShippingExtension(string $addressShippingExtension = null): static
    {
        return $this->set('addressShippingExtension', $addressShippingExtension);
    }

    /**
     * @return string|null
     */
    public function getAddressShippingZipcode(): ?string
    {
        return $this->get('addressShippingZipcode');
    }

    /**
     * @param string|null $addressShippingZipcode
     * @return $this
     */
    public function setAddressShippingZipcode(string $addressShippingZipcode = null): static
    {
        return $this->set('addressShippingZipcode', $addressShippingZipcode);
    }

    /**
     * @return string|null
     */
    public function getAddressShippingCity(): ?string
    {
        return $this->get('addressShippingCity');
    }

    /**
     * @param string|null $addressShippingCity
     * @return $this
     */
    public function setAddressShippingCity(string $addressShippingCity = null): static
    {
        return $this->set('addressShippingCity', $addressShippingCity);
    }

    /**
     * @return string|null
     */
    public function getAddressShippingRegion(): ?string
    {
        return $this->get('addressShippingRegion');
    }

    /**
     * @param string|null $addressShippingRegion
     * @return $this
     */
    public function setAddressShippingRegion(string $addressShippingRegion = null): static
    {
        return $this->set('addressShippingRegion', $addressShippingRegion);
    }

    /**
     * @return array|null
     */
    public function getAddressShippingCountry(): ?array
    {
        return $this->get('addressShippingCountry');
    }

    /**
     * @param array|null $addressShippingCountry
     * @return $this
     */
    public function setAddressShippingCountry(array $addressShippingCountry = null): static
    {
        return $this->set('addressShippingCountry', $addressShippingCountry);
    }

    /**
     * @return string|null
     */
    public function getMemo(): ?string
    {
        return $this->get('memo');
    }

    /**
     * @param string|null $memo
     * @return $this
     */
    public function setMemo(string $memo = null): static
    {
        return $this->set('memo', $memo);
    }

    /**
     * @return bool|null
     */
    public function getDoNotifyRegistered(): ?bool
    {
        return $this->get('doNotifyRegistered');
    }

    /**
     * @param bool|null $doNotifyRegistered
     * @return $this
     */
    public function setDoNotifyRegistered(bool $doNotifyRegistered = null): static
    {
        return $this->set('doNotifyRegistered', $doNotifyRegistered);
    }

    /**
     * @return bool|null
     */
    public function getDoNotifyConfirmed(): ?bool
    {
        return $this->get('doNotifyConfirmed');
    }

    /**
     * @param bool|null $doNotifyConfirmed
     * @return $this
     */
    public function setDoNotifyConfirmed(bool $doNotifyConfirmed = null): static
    {
        return $this->set('doNotifyConfirmed', $doNotifyConfirmed);
    }

    /**
     * @return bool|null
     */
    public function getDoNotifyPassword(): ?bool
    {
        return $this->get('doNotifyPassword');
    }

    /**
     * @param bool|null $doNotifyPassword
     * @return $this
     */
    public function setDoNotifyPassword(bool $doNotifyPassword = null): static
    {
        return $this->set('doNotifyPassword', $doNotifyPassword);
    }

    /**
     * @return ResourceCollection<GroupsCustomer>|null
     */
    public function getGroups(): ?ResourceCollection
    {
        return $this->relation('groups.resource.embedded', GroupsCustomer::class, true);
    }


    /**
     * @param ResourceCollection<GroupsCustomer>|null $groups
     * @return $this
     */
    public function setGroups(ResourceCollection $groups = null): static
    {
        $this->set('groups.resource.embedded', $groups);

        return $this;
    }

    /**
     * @return ResourceCollection<Invoice>|null
     */
    public function getInvoices(): ?ResourceCollection
    {
        return $this->relation('invoices.resource.embedded', Invoice::class, true);
    }


    /**
     * @param ResourceCollection<Invoice>|null $invoices
     * @return $this
     */
    public function setInvoices(ResourceCollection $invoices = null): static
    {
        $this->set('invoices.resource.embedded', $invoices);

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getLanguage(): ?bool
    {
        return $this->get('language');
    }

    /**
     * @param bool|null $language
     * @return $this
     */
    public function setLanguage(bool $language = null): static
    {
        return $this->set('language', $language);
    }

    /**
     * @return ResourceCollection<Order>|null
     */
    public function getOrders(): ?ResourceCollection
    {
        return $this->relation('orders.resource.embedded', Order::class, true);
    }


    /**
     * @param ResourceCollection<Order>|null $orders
     * @return $this
     */
    public function setOrders(ResourceCollection $orders = null): static
    {
        $this->set('orders.resource.embedded', $orders);

        return $this;
    }

    /**
     * @return ResourceCollection<Review>|null
     */
    public function getReviews(): ?ResourceCollection
    {
        return $this->relation('reviews.resource.embedded', Review::class, true);
    }


    /**
     * @param ResourceCollection<Review>|null $reviews
     * @return $this
     */
    public function setReviews(ResourceCollection $reviews = null): static
    {
        $this->set('reviews.resource.embedded', $reviews);

        return $this;
    }

    /**
     * @return ResourceCollection<Shipment>|null
     */
    public function getShipments(): ?ResourceCollection
    {
        return $this->relation('shipments.resource.embedded', Shipment::class, true);
    }


    /**
     * @param ResourceCollection<Shipment>|null $shipments
     * @return $this
     */
    public function setShipments(ResourceCollection $shipments = null): static
    {
        $this->set('shipments.resource.embedded', $shipments);

        return $this;
    }

    /**
     * @return ResourceCollection<Ticket>|null
     */
    public function getTickets(): ?ResourceCollection
    {
        return $this->relation('tickets.resource.embedded', Ticket::class, true);
    }


    /**
     * @param ResourceCollection<Ticket>|null $tickets
     * @return $this
     */
    public function setTickets(ResourceCollection $tickets = null): static
    {
        $this->set('tickets.resource.embedded', $tickets);

        return $this;
    }

    /**
     * @return ResourceCollection<CustomerMetafield>|null
     */
    public function getMetafields(): ?ResourceCollection
    {
        return $this->relation('metafields.resource.embedded', CustomerMetafield::class, true);
    }


    /**
     * @param ResourceCollection<CustomerMetafield>|null $metafields
     * @return $this
     */
    public function setMetafields(ResourceCollection $metafields = null): static
    {
        $this->set('metafields.resource.embedded', $metafields);

        return $this;
    }

    /**
     * @return ResourceCollection<CustomerLogin>|null
     */
    public function getLogin(): ?ResourceCollection
    {
        return $this->relation('login.resource.embedded', CustomerLogin::class, true);
    }


    /**
     * @param ResourceCollection<CustomerLogin>|null $login
     * @return $this
     */
    public function setLogin(ResourceCollection $login = null): static
    {
        $this->set('login.resource.embedded', $login);

        return $this;
    }

}
