<?php

namespace JesseGall\LightspeedSDK\Resources;

class Customer extends Resource
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
    public function getIsConfirmed(): bool
    {
        return $this->get('isConfirmed');
    }

    /**
     * @param bool $isConfirmed
     * @return $this
     */
    public function setIsConfirmed(bool $isConfirmed): static
    {
        return $this->set('isConfirmed', $isConfirmed);
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->get('type');
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type): static
    {
        return $this->set('type', $type);
    }

    /**
     * @return mixed
     */
    public function getLastOnlineAt(): mixed
    {
        return $this->get('lastOnlineAt');
    }

    /**
     * @param mixed $lastOnlineAt
     * @return $this
     */
    public function setLastOnlineAt(mixed $lastOnlineAt): static
    {
        return $this->set('lastOnlineAt', $lastOnlineAt);
    }

    /**
     * @return bool
     */
    public function getRemoteIp(): bool
    {
        return $this->get('remoteIp');
    }

    /**
     * @param bool $remoteIp
     * @return $this
     */
    public function setRemoteIp(bool $remoteIp): static
    {
        return $this->set('remoteIp', $remoteIp);
    }

    /**
     * @return bool
     */
    public function getUserAgent(): bool
    {
        return $this->get('userAgent');
    }

    /**
     * @param bool $userAgent
     * @return $this
     */
    public function setUserAgent(bool $userAgent): static
    {
        return $this->set('userAgent', $userAgent);
    }

    /**
     * @return bool
     */
    public function getReferralId(): bool
    {
        return $this->get('referralId');
    }

    /**
     * @param bool $referralId
     * @return $this
     */
    public function setReferralId(bool $referralId): static
    {
        return $this->set('referralId', $referralId);
    }

    /**
     * @return bool
     */
    public function getGender(): bool
    {
        return $this->get('gender');
    }

    /**
     * @param bool $gender
     * @return $this
     */
    public function setGender(bool $gender): static
    {
        return $this->set('gender', $gender);
    }

    /**
     * @return bool
     */
    public function getBirthDate(): bool
    {
        return $this->get('birthDate');
    }

    /**
     * @param bool $birthDate
     * @return $this
     */
    public function setBirthDate(bool $birthDate): static
    {
        return $this->set('birthDate', $birthDate);
    }

    /**
     * @return string
     */
    public function getNationalId(): string
    {
        return $this->get('nationalId');
    }

    /**
     * @param string $nationalId
     * @return $this
     */
    public function setNationalId(string $nationalId): static
    {
        return $this->set('nationalId', $nationalId);
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->get('email');
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email): static
    {
        return $this->set('email', $email);
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->get('firstname');
    }

    /**
     * @param string $firstname
     * @return $this
     */
    public function setFirstname(string $firstname): static
    {
        return $this->set('firstname', $firstname);
    }

    /**
     * @return string
     */
    public function getMiddlename(): string
    {
        return $this->get('middlename');
    }

    /**
     * @param string $middlename
     * @return $this
     */
    public function setMiddlename(string $middlename): static
    {
        return $this->set('middlename', $middlename);
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->get('lastname');
    }

    /**
     * @param string $lastname
     * @return $this
     */
    public function setLastname(string $lastname): static
    {
        return $this->set('lastname', $lastname);
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->get('phone');
    }

    /**
     * @param string $phone
     * @return $this
     */
    public function setPhone(string $phone): static
    {
        return $this->set('phone', $phone);
    }

    /**
     * @return string
     */
    public function getMobile(): string
    {
        return $this->get('mobile');
    }

    /**
     * @param string $mobile
     * @return $this
     */
    public function setMobile(string $mobile): static
    {
        return $this->set('mobile', $mobile);
    }

    /**
     * @return bool
     */
    public function getIsCompany(): bool
    {
        return $this->get('isCompany');
    }

    /**
     * @param bool $isCompany
     * @return $this
     */
    public function setIsCompany(bool $isCompany): static
    {
        return $this->set('isCompany', $isCompany);
    }

    /**
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->get('companyName');
    }

    /**
     * @param string $companyName
     * @return $this
     */
    public function setCompanyName(string $companyName): static
    {
        return $this->set('companyName', $companyName);
    }

    /**
     * @return string
     */
    public function getCompanyCoCNumber(): string
    {
        return $this->get('companyCoCNumber');
    }

    /**
     * @param string $companyCoCNumber
     * @return $this
     */
    public function setCompanyCoCNumber(string $companyCoCNumber): static
    {
        return $this->set('companyCoCNumber', $companyCoCNumber);
    }

    /**
     * @return string
     */
    public function getCompanyVatNumber(): string
    {
        return $this->get('companyVatNumber');
    }

    /**
     * @param string $companyVatNumber
     * @return $this
     */
    public function setCompanyVatNumber(string $companyVatNumber): static
    {
        return $this->set('companyVatNumber', $companyVatNumber);
    }

    /**
     * @return string
     */
    public function getAddressBillingName(): string
    {
        return $this->get('addressBillingName');
    }

    /**
     * @param string $addressBillingName
     * @return $this
     */
    public function setAddressBillingName(string $addressBillingName): static
    {
        return $this->set('addressBillingName', $addressBillingName);
    }

    /**
     * @return string
     */
    public function getAddressBillingStreet(): string
    {
        return $this->get('addressBillingStreet');
    }

    /**
     * @param string $addressBillingStreet
     * @return $this
     */
    public function setAddressBillingStreet(string $addressBillingStreet): static
    {
        return $this->set('addressBillingStreet', $addressBillingStreet);
    }

    /**
     * @return string
     */
    public function getAddressBillingStreet2(): string
    {
        return $this->get('addressBillingStreet2');
    }

    /**
     * @param string $addressBillingStreet2
     * @return $this
     */
    public function setAddressBillingStreet2(string $addressBillingStreet2): static
    {
        return $this->set('addressBillingStreet2', $addressBillingStreet2);
    }

    /**
     * @return string
     */
    public function getAddressBillingNumber(): string
    {
        return $this->get('addressBillingNumber');
    }

    /**
     * @param string $addressBillingNumber
     * @return $this
     */
    public function setAddressBillingNumber(string $addressBillingNumber): static
    {
        return $this->set('addressBillingNumber', $addressBillingNumber);
    }

    /**
     * @return string
     */
    public function getAddressBillingExtension(): string
    {
        return $this->get('addressBillingExtension');
    }

    /**
     * @param string $addressBillingExtension
     * @return $this
     */
    public function setAddressBillingExtension(string $addressBillingExtension): static
    {
        return $this->set('addressBillingExtension', $addressBillingExtension);
    }

    /**
     * @return string
     */
    public function getAddressBillingZipcode(): string
    {
        return $this->get('addressBillingZipcode');
    }

    /**
     * @param string $addressBillingZipcode
     * @return $this
     */
    public function setAddressBillingZipcode(string $addressBillingZipcode): static
    {
        return $this->set('addressBillingZipcode', $addressBillingZipcode);
    }

    /**
     * @return string
     */
    public function getAddressBillingCity(): string
    {
        return $this->get('addressBillingCity');
    }

    /**
     * @param string $addressBillingCity
     * @return $this
     */
    public function setAddressBillingCity(string $addressBillingCity): static
    {
        return $this->set('addressBillingCity', $addressBillingCity);
    }

    /**
     * @return string
     */
    public function getAddressBillingRegion(): string
    {
        return $this->get('addressBillingRegion');
    }

    /**
     * @param string $addressBillingRegion
     * @return $this
     */
    public function setAddressBillingRegion(string $addressBillingRegion): static
    {
        return $this->set('addressBillingRegion', $addressBillingRegion);
    }

    /**
     * @return array
     */
    public function getAddressBillingCountry(): array
    {
        return $this->get('addressBillingCountry');
    }

    /**
     * @param array $addressBillingCountry
     * @return $this
     */
    public function setAddressBillingCountry(array $addressBillingCountry): static
    {
        return $this->set('addressBillingCountry', $addressBillingCountry);
    }

    /**
     * @return bool
     */
    public function getAddressShippingCompany(): bool
    {
        return $this->get('addressShippingCompany');
    }

    /**
     * @param bool $addressShippingCompany
     * @return $this
     */
    public function setAddressShippingCompany(bool $addressShippingCompany): static
    {
        return $this->set('addressShippingCompany', $addressShippingCompany);
    }

    /**
     * @return string
     */
    public function getAddressShippingName(): string
    {
        return $this->get('addressShippingName');
    }

    /**
     * @param string $addressShippingName
     * @return $this
     */
    public function setAddressShippingName(string $addressShippingName): static
    {
        return $this->set('addressShippingName', $addressShippingName);
    }

    /**
     * @return string
     */
    public function getAddressShippingStreet(): string
    {
        return $this->get('addressShippingStreet');
    }

    /**
     * @param string $addressShippingStreet
     * @return $this
     */
    public function setAddressShippingStreet(string $addressShippingStreet): static
    {
        return $this->set('addressShippingStreet', $addressShippingStreet);
    }

    /**
     * @return string
     */
    public function getAddressShippingStreet2(): string
    {
        return $this->get('addressShippingStreet2');
    }

    /**
     * @param string $addressShippingStreet2
     * @return $this
     */
    public function setAddressShippingStreet2(string $addressShippingStreet2): static
    {
        return $this->set('addressShippingStreet2', $addressShippingStreet2);
    }

    /**
     * @return string
     */
    public function getAddressShippingNumber(): string
    {
        return $this->get('addressShippingNumber');
    }

    /**
     * @param string $addressShippingNumber
     * @return $this
     */
    public function setAddressShippingNumber(string $addressShippingNumber): static
    {
        return $this->set('addressShippingNumber', $addressShippingNumber);
    }

    /**
     * @return string
     */
    public function getAddressShippingExtension(): string
    {
        return $this->get('addressShippingExtension');
    }

    /**
     * @param string $addressShippingExtension
     * @return $this
     */
    public function setAddressShippingExtension(string $addressShippingExtension): static
    {
        return $this->set('addressShippingExtension', $addressShippingExtension);
    }

    /**
     * @return string
     */
    public function getAddressShippingZipcode(): string
    {
        return $this->get('addressShippingZipcode');
    }

    /**
     * @param string $addressShippingZipcode
     * @return $this
     */
    public function setAddressShippingZipcode(string $addressShippingZipcode): static
    {
        return $this->set('addressShippingZipcode', $addressShippingZipcode);
    }

    /**
     * @return string
     */
    public function getAddressShippingCity(): string
    {
        return $this->get('addressShippingCity');
    }

    /**
     * @param string $addressShippingCity
     * @return $this
     */
    public function setAddressShippingCity(string $addressShippingCity): static
    {
        return $this->set('addressShippingCity', $addressShippingCity);
    }

    /**
     * @return string
     */
    public function getAddressShippingRegion(): string
    {
        return $this->get('addressShippingRegion');
    }

    /**
     * @param string $addressShippingRegion
     * @return $this
     */
    public function setAddressShippingRegion(string $addressShippingRegion): static
    {
        return $this->set('addressShippingRegion', $addressShippingRegion);
    }

    /**
     * @return array
     */
    public function getAddressShippingCountry(): array
    {
        return $this->get('addressShippingCountry');
    }

    /**
     * @param array $addressShippingCountry
     * @return $this
     */
    public function setAddressShippingCountry(array $addressShippingCountry): static
    {
        return $this->set('addressShippingCountry', $addressShippingCountry);
    }

    /**
     * @return string
     */
    public function getMemo(): string
    {
        return $this->get('memo');
    }

    /**
     * @param string $memo
     * @return $this
     */
    public function setMemo(string $memo): static
    {
        return $this->set('memo', $memo);
    }

    /**
     * @return bool
     */
    public function getDoNotifyRegistered(): bool
    {
        return $this->get('doNotifyRegistered');
    }

    /**
     * @param bool $doNotifyRegistered
     * @return $this
     */
    public function setDoNotifyRegistered(bool $doNotifyRegistered): static
    {
        return $this->set('doNotifyRegistered', $doNotifyRegistered);
    }

    /**
     * @return bool
     */
    public function getDoNotifyConfirmed(): bool
    {
        return $this->get('doNotifyConfirmed');
    }

    /**
     * @param bool $doNotifyConfirmed
     * @return $this
     */
    public function setDoNotifyConfirmed(bool $doNotifyConfirmed): static
    {
        return $this->set('doNotifyConfirmed', $doNotifyConfirmed);
    }

    /**
     * @return bool
     */
    public function getDoNotifyPassword(): bool
    {
        return $this->get('doNotifyPassword');
    }

    /**
     * @param bool $doNotifyPassword
     * @return $this
     */
    public function setDoNotifyPassword(bool $doNotifyPassword): static
    {
        return $this->set('doNotifyPassword', $doNotifyPassword);
    }

    /**
     * @return Group[]
     */
    public function getGroups(): array
    {
        return $this->mapTo('groups', Group::class);
    }

    /**
     * @param Group[] $groups
     * @return $this
     */
    public function setGroups(array $groups): static
    {
        $this->set('groups', $groups);

        return $this;
    }

    /**
     * @return Invoice[]
     */
    public function getInvoices(): array
    {
        return $this->mapTo('invoices', Invoice::class);
    }

    /**
     * @param Invoice[] $invoices
     * @return $this
     */
    public function setInvoices(array $invoices): static
    {
        $this->set('invoices', $invoices);

        return $this;
    }

    /**
     * @return bool
     */
    public function getLanguage(): bool
    {
        return $this->get('language');
    }

    /**
     * @param bool $language
     * @return $this
     */
    public function setLanguage(bool $language): static
    {
        return $this->set('language', $language);
    }

    /**
     * @return Order[]
     */
    public function getOrders(): array
    {
        return $this->mapTo('orders', Order::class);
    }

    /**
     * @param Order[] $orders
     * @return $this
     */
    public function setOrders(array $orders): static
    {
        $this->set('orders', $orders);

        return $this;
    }

    /**
     * @return Review[]
     */
    public function getReviews(): array
    {
        return $this->mapTo('reviews', Review::class);
    }

    /**
     * @param Review[] $reviews
     * @return $this
     */
    public function setReviews(array $reviews): static
    {
        $this->set('reviews', $reviews);

        return $this;
    }

    /**
     * @return Shipment[]
     */
    public function getShipments(): array
    {
        return $this->mapTo('shipments', Shipment::class);
    }

    /**
     * @param Shipment[] $shipments
     * @return $this
     */
    public function setShipments(array $shipments): static
    {
        $this->set('shipments', $shipments);

        return $this;
    }

    /**
     * @return Ticket[]
     */
    public function getTickets(): array
    {
        return $this->mapTo('tickets', Ticket::class);
    }

    /**
     * @param Ticket[] $tickets
     * @return $this
     */
    public function setTickets(array $tickets): static
    {
        $this->set('tickets', $tickets);

        return $this;
    }

    /**
     * @return Metafield[]
     */
    public function getMetafields(): array
    {
        return $this->mapTo('metafields', Metafield::class);
    }

    /**
     * @param Metafield[] $metafields
     * @return $this
     */
    public function setMetafields(array $metafields): static
    {
        $this->set('metafields', $metafields);

        return $this;
    }

    /**
     * @return Login
     */
    public function getLogin(): Login
    {
        return $this->mapTo('login', Login::class);
    }

    /**
     * @param Login $login
     * @return $this
     */
    public function setLogin(Login $login): static
    {
        $this->set('login', $login);

        return $this;
    }

}
