<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class Order extends Resource
{

    protected string $endpoint = '/orders';

    protected string $handle = 'order';

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
    public function getNumber(): string
    {
        return $this->get('number');
    }

    /**
     * @param string $number
     * @return $this
     */
    public function setNumber(string $number): static
    {
        return $this->set('number', $number);
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->get('status');
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus(string $status): static
    {
        return $this->set('status', $status);
    }

    /**
     * @return mixed
     */
    public function getCustomStatusId(): mixed
    {
        return $this->get('customStatusId');
    }

    /**
     * @param mixed $customStatusId
     * @return $this
     */
    public function setCustomStatusId(mixed $customStatusId): static
    {
        return $this->set('customStatusId', $customStatusId);
    }

    /**
     * @return string
     */
    public function getChannel(): string
    {
        return $this->get('channel');
    }

    /**
     * @param string $channel
     * @return $this
     */
    public function setChannel(string $channel): static
    {
        return $this->set('channel', $channel);
    }

    /**
     * @return string
     */
    public function getRemoteIp(): string
    {
        return $this->get('remoteIp');
    }

    /**
     * @param string $remoteIp
     * @return $this
     */
    public function setRemoteIp(string $remoteIp): static
    {
        return $this->set('remoteIp', $remoteIp);
    }

    /**
     * @return string
     */
    public function getUserAgent(): string
    {
        return $this->get('userAgent');
    }

    /**
     * @param string $userAgent
     * @return $this
     */
    public function setUserAgent(string $userAgent): static
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
     * @return int
     */
    public function getPriceCost(): int
    {
        return $this->get('priceCost');
    }

    /**
     * @param int $priceCost
     * @return $this
     */
    public function setPriceCost(int $priceCost): static
    {
        return $this->set('priceCost', $priceCost);
    }

    /**
     * @return float
     */
    public function getPriceExcl(): float
    {
        return $this->get('priceExcl');
    }

    /**
     * @param float $priceExcl
     * @return $this
     */
    public function setPriceExcl(float $priceExcl): static
    {
        return $this->set('priceExcl', $priceExcl);
    }

    /**
     * @return float
     */
    public function getPriceIncl(): float
    {
        return $this->get('priceIncl');
    }

    /**
     * @param float $priceIncl
     * @return $this
     */
    public function setPriceIncl(float $priceIncl): static
    {
        return $this->set('priceIncl', $priceIncl);
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->get('weight');
    }

    /**
     * @param int $weight
     * @return $this
     */
    public function setWeight(int $weight): static
    {
        return $this->set('weight', $weight);
    }

    /**
     * @return int
     */
    public function getVolume(): int
    {
        return $this->get('volume');
    }

    /**
     * @param int $volume
     * @return $this
     */
    public function setVolume(int $volume): static
    {
        return $this->set('volume', $volume);
    }

    /**
     * @return int
     */
    public function getColli(): int
    {
        return $this->get('colli');
    }

    /**
     * @param int $colli
     * @return $this
     */
    public function setColli(int $colli): static
    {
        return $this->set('colli', $colli);
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->get('gender');
    }

    /**
     * @param string $gender
     * @return $this
     */
    public function setGender(string $gender): static
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
    public function getNewsletterSubscribed(): bool
    {
        return $this->get('newsletterSubscribed');
    }

    /**
     * @param bool $newsletterSubscribed
     * @return $this
     */
    public function setNewsletterSubscribed(bool $newsletterSubscribed): static
    {
        return $this->set('newsletterSubscribed', $newsletterSubscribed);
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
     * @return array
     */
    public function getAddressBillingRegionData(): array
    {
        return $this->get('addressBillingRegionData');
    }

    /**
     * @param array $addressBillingRegionData
     * @return $this
     */
    public function setAddressBillingRegionData(array $addressBillingRegionData): static
    {
        return $this->set('addressBillingRegionData', $addressBillingRegionData);
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
     * @return array
     */
    public function getAddressShippingRegionData(): array
    {
        return $this->get('addressShippingRegionData');
    }

    /**
     * @param array $addressShippingRegionData
     * @return $this
     */
    public function setAddressShippingRegionData(array $addressShippingRegionData): static
    {
        return $this->set('addressShippingRegionData', $addressShippingRegionData);
    }

    /**
     * @return string
     */
    public function getPaymentId(): string
    {
        return $this->get('paymentId');
    }

    /**
     * @param string $paymentId
     * @return $this
     */
    public function setPaymentId(string $paymentId): static
    {
        return $this->set('paymentId', $paymentId);
    }

    /**
     * @return string
     */
    public function getPaymentStatus(): string
    {
        return $this->get('paymentStatus');
    }

    /**
     * @param string $paymentStatus
     * @return $this
     */
    public function setPaymentStatus(string $paymentStatus): static
    {
        return $this->set('paymentStatus', $paymentStatus);
    }

    /**
     * @return bool
     */
    public function getPaymentIsPost(): bool
    {
        return $this->get('paymentIsPost');
    }

    /**
     * @param bool $paymentIsPost
     * @return $this
     */
    public function setPaymentIsPost(bool $paymentIsPost): static
    {
        return $this->set('paymentIsPost', $paymentIsPost);
    }

    /**
     * @return bool
     */
    public function getPaymentIsInvoiceExternal(): bool
    {
        return $this->get('paymentIsInvoiceExternal');
    }

    /**
     * @param bool $paymentIsInvoiceExternal
     * @return $this
     */
    public function setPaymentIsInvoiceExternal(bool $paymentIsInvoiceExternal): static
    {
        return $this->set('paymentIsInvoiceExternal', $paymentIsInvoiceExternal);
    }

    /**
     * @return int
     */
    public function getPaymentTaxRate(): int
    {
        return $this->get('paymentTaxRate');
    }

    /**
     * @param int $paymentTaxRate
     * @return $this
     */
    public function setPaymentTaxRate(int $paymentTaxRate): static
    {
        return $this->set('paymentTaxRate', $paymentTaxRate);
    }

    /**
     * @return array
     */
    public function getPaymentTaxRates(): array
    {
        return $this->get('paymentTaxRates');
    }

    /**
     * @param array $paymentTaxRates
     * @return $this
     */
    public function setPaymentTaxRates(array $paymentTaxRates): static
    {
        return $this->set('paymentTaxRates', $paymentTaxRates);
    }

    /**
     * @return int
     */
    public function getPaymentBasePriceExcl(): int
    {
        return $this->get('paymentBasePriceExcl');
    }

    /**
     * @param int $paymentBasePriceExcl
     * @return $this
     */
    public function setPaymentBasePriceExcl(int $paymentBasePriceExcl): static
    {
        return $this->set('paymentBasePriceExcl', $paymentBasePriceExcl);
    }

    /**
     * @return int
     */
    public function getPaymentBasePriceIncl(): int
    {
        return $this->get('paymentBasePriceIncl');
    }

    /**
     * @param int $paymentBasePriceIncl
     * @return $this
     */
    public function setPaymentBasePriceIncl(int $paymentBasePriceIncl): static
    {
        return $this->set('paymentBasePriceIncl', $paymentBasePriceIncl);
    }

    /**
     * @return int
     */
    public function getPaymentPriceExcl(): int
    {
        return $this->get('paymentPriceExcl');
    }

    /**
     * @param int $paymentPriceExcl
     * @return $this
     */
    public function setPaymentPriceExcl(int $paymentPriceExcl): static
    {
        return $this->set('paymentPriceExcl', $paymentPriceExcl);
    }

    /**
     * @return int
     */
    public function getPaymentPriceIncl(): int
    {
        return $this->get('paymentPriceIncl');
    }

    /**
     * @param int $paymentPriceIncl
     * @return $this
     */
    public function setPaymentPriceIncl(int $paymentPriceIncl): static
    {
        return $this->set('paymentPriceIncl', $paymentPriceIncl);
    }

    /**
     * @return string
     */
    public function getPaymentTitle(): string
    {
        return $this->get('paymentTitle');
    }

    /**
     * @param string $paymentTitle
     * @return $this
     */
    public function setPaymentTitle(string $paymentTitle): static
    {
        return $this->set('paymentTitle', $paymentTitle);
    }

    /**
     * @return array
     */
    public function getPaymentData(): array
    {
        return $this->get('paymentData');
    }

    /**
     * @param array $paymentData
     * @return $this
     */
    public function setPaymentData(array $paymentData): static
    {
        return $this->set('paymentData', $paymentData);
    }

    /**
     * @return string
     */
    public function getShipmentId(): string
    {
        return $this->get('shipmentId');
    }

    /**
     * @param string $shipmentId
     * @return $this
     */
    public function setShipmentId(string $shipmentId): static
    {
        return $this->set('shipmentId', $shipmentId);
    }

    /**
     * @return string
     */
    public function getShipmentStatus(): string
    {
        return $this->get('shipmentStatus');
    }

    /**
     * @param string $shipmentStatus
     * @return $this
     */
    public function setShipmentStatus(string $shipmentStatus): static
    {
        return $this->set('shipmentStatus', $shipmentStatus);
    }

    /**
     * @return bool
     */
    public function getShipmentIsCashOnDelivery(): bool
    {
        return $this->get('shipmentIsCashOnDelivery');
    }

    /**
     * @param bool $shipmentIsCashOnDelivery
     * @return $this
     */
    public function setShipmentIsCashOnDelivery(bool $shipmentIsCashOnDelivery): static
    {
        return $this->set('shipmentIsCashOnDelivery', $shipmentIsCashOnDelivery);
    }

    /**
     * @return bool
     */
    public function getShipmentIsPickup(): bool
    {
        return $this->get('shipmentIsPickup');
    }

    /**
     * @param bool $shipmentIsPickup
     * @return $this
     */
    public function setShipmentIsPickup(bool $shipmentIsPickup): static
    {
        return $this->set('shipmentIsPickup', $shipmentIsPickup);
    }

    /**
     * @return float
     */
    public function getShipmentTaxRate(): float
    {
        return $this->get('shipmentTaxRate');
    }

    /**
     * @param float $shipmentTaxRate
     * @return $this
     */
    public function setShipmentTaxRate(float $shipmentTaxRate): static
    {
        return $this->set('shipmentTaxRate', $shipmentTaxRate);
    }

    /**
     * @return array
     */
    public function getShipmentTaxRates(): array
    {
        return $this->get('shipmentTaxRates');
    }

    /**
     * @param array $shipmentTaxRates
     * @return $this
     */
    public function setShipmentTaxRates(array $shipmentTaxRates): static
    {
        return $this->set('shipmentTaxRates', $shipmentTaxRates);
    }

    /**
     * @return float
     */
    public function getShipmentBasePriceExcl(): float
    {
        return $this->get('shipmentBasePriceExcl');
    }

    /**
     * @param float $shipmentBasePriceExcl
     * @return $this
     */
    public function setShipmentBasePriceExcl(float $shipmentBasePriceExcl): static
    {
        return $this->set('shipmentBasePriceExcl', $shipmentBasePriceExcl);
    }

    /**
     * @return float
     */
    public function getShipmentBasePriceIncl(): float
    {
        return $this->get('shipmentBasePriceIncl');
    }

    /**
     * @param float $shipmentBasePriceIncl
     * @return $this
     */
    public function setShipmentBasePriceIncl(float $shipmentBasePriceIncl): static
    {
        return $this->set('shipmentBasePriceIncl', $shipmentBasePriceIncl);
    }

    /**
     * @return float
     */
    public function getShipmentPriceExcl(): float
    {
        return $this->get('shipmentPriceExcl');
    }

    /**
     * @param float $shipmentPriceExcl
     * @return $this
     */
    public function setShipmentPriceExcl(float $shipmentPriceExcl): static
    {
        return $this->set('shipmentPriceExcl', $shipmentPriceExcl);
    }

    /**
     * @return float
     */
    public function getShipmentPriceIncl(): float
    {
        return $this->get('shipmentPriceIncl');
    }

    /**
     * @param float $shipmentPriceIncl
     * @return $this
     */
    public function setShipmentPriceIncl(float $shipmentPriceIncl): static
    {
        return $this->set('shipmentPriceIncl', $shipmentPriceIncl);
    }

    /**
     * @return int
     */
    public function getShipmentDiscountExcl(): int
    {
        return $this->get('shipmentDiscountExcl');
    }

    /**
     * @param int $shipmentDiscountExcl
     * @return $this
     */
    public function setShipmentDiscountExcl(int $shipmentDiscountExcl): static
    {
        return $this->set('shipmentDiscountExcl', $shipmentDiscountExcl);
    }

    /**
     * @return int
     */
    public function getShipmentDiscountIncl(): int
    {
        return $this->get('shipmentDiscountIncl');
    }

    /**
     * @param int $shipmentDiscountIncl
     * @return $this
     */
    public function setShipmentDiscountIncl(int $shipmentDiscountIncl): static
    {
        return $this->set('shipmentDiscountIncl', $shipmentDiscountIncl);
    }

    /**
     * @return string
     */
    public function getShipmentTitle(): string
    {
        return $this->get('shipmentTitle');
    }

    /**
     * @param string $shipmentTitle
     * @return $this
     */
    public function setShipmentTitle(string $shipmentTitle): static
    {
        return $this->set('shipmentTitle', $shipmentTitle);
    }

    /**
     * @return array
     */
    public function getShipmentData(): array
    {
        return $this->get('shipmentData');
    }

    /**
     * @param array $shipmentData
     * @return $this
     */
    public function setShipmentData(array $shipmentData): static
    {
        return $this->set('shipmentData', $shipmentData);
    }

    /**
     * @return mixed
     */
    public function getShippingDate(): mixed
    {
        return $this->get('shippingDate');
    }

    /**
     * @param mixed $shippingDate
     * @return $this
     */
    public function setShippingDate(mixed $shippingDate): static
    {
        return $this->set('shippingDate', $shippingDate);
    }

    /**
     * @return mixed
     */
    public function getDeliveryDate(): mixed
    {
        return $this->get('deliveryDate');
    }

    /**
     * @param mixed $deliveryDate
     * @return $this
     */
    public function setDeliveryDate(mixed $deliveryDate): static
    {
        return $this->set('deliveryDate', $deliveryDate);
    }

    /**
     * @return bool
     */
    public function getIsDiscounted(): bool
    {
        return $this->get('isDiscounted');
    }

    /**
     * @param bool $isDiscounted
     * @return $this
     */
    public function setIsDiscounted(bool $isDiscounted): static
    {
        return $this->set('isDiscounted', $isDiscounted);
    }

    /**
     * @return string
     */
    public function getDiscountType(): string
    {
        return $this->get('discountType');
    }

    /**
     * @param string $discountType
     * @return $this
     */
    public function setDiscountType(string $discountType): static
    {
        return $this->set('discountType', $discountType);
    }

    /**
     * @return int
     */
    public function getDiscountAmount(): int
    {
        return $this->get('discountAmount');
    }

    /**
     * @param int $discountAmount
     * @return $this
     */
    public function setDiscountAmount(int $discountAmount): static
    {
        return $this->set('discountAmount', $discountAmount);
    }

    /**
     * @return int
     */
    public function getDiscountPercentage(): int
    {
        return $this->get('discountPercentage');
    }

    /**
     * @param int $discountPercentage
     * @return $this
     */
    public function setDiscountPercentage(int $discountPercentage): static
    {
        return $this->set('discountPercentage', $discountPercentage);
    }

    /**
     * @return string
     */
    public function getDiscountCouponCode(): string
    {
        return $this->get('discountCouponCode');
    }

    /**
     * @param string $discountCouponCode
     * @return $this
     */
    public function setDiscountCouponCode(string $discountCouponCode): static
    {
        return $this->set('discountCouponCode', $discountCouponCode);
    }

    /**
     * @return array
     */
    public function getTaxRates(): array
    {
        return $this->get('taxRates');
    }

    /**
     * @param array $taxRates
     * @return $this
     */
    public function setTaxRates(array $taxRates): static
    {
        return $this->set('taxRates', $taxRates);
    }

    /**
     * @return bool
     */
    public function getIsNewCustomer(): bool
    {
        return $this->get('isNewCustomer');
    }

    /**
     * @param bool $isNewCustomer
     * @return $this
     */
    public function setIsNewCustomer(bool $isNewCustomer): static
    {
        return $this->set('isNewCustomer', $isNewCustomer);
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->get('comment');
    }

    /**
     * @param string $comment
     * @return $this
     */
    public function setComment(string $comment): static
    {
        return $this->set('comment', $comment);
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
    public function getAllowNotifications(): bool
    {
        return $this->get('allowNotifications');
    }

    /**
     * @param bool $allowNotifications
     * @return $this
     */
    public function setAllowNotifications(bool $allowNotifications): static
    {
        return $this->set('allowNotifications', $allowNotifications);
    }

    /**
     * @return bool
     */
    public function getDoNotifyNew(): bool
    {
        return $this->get('doNotifyNew');
    }

    /**
     * @param bool $doNotifyNew
     * @return $this
     */
    public function setDoNotifyNew(bool $doNotifyNew): static
    {
        return $this->set('doNotifyNew', $doNotifyNew);
    }

    /**
     * @return bool
     */
    public function getDoNotifyReminder(): bool
    {
        return $this->get('doNotifyReminder');
    }

    /**
     * @param bool $doNotifyReminder
     * @return $this
     */
    public function setDoNotifyReminder(bool $doNotifyReminder): static
    {
        return $this->set('doNotifyReminder', $doNotifyReminder);
    }

    /**
     * @return bool
     */
    public function getDoNotifyCancelled(): bool
    {
        return $this->get('doNotifyCancelled');
    }

    /**
     * @param bool $doNotifyCancelled
     * @return $this
     */
    public function setDoNotifyCancelled(bool $doNotifyCancelled): static
    {
        return $this->set('doNotifyCancelled', $doNotifyCancelled);
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
     * @return ResourceCollection<Invoice>
     */
    public function getInvoices(): ResourceCollection
    {
        return $this->relation('invoices.resource.embedded', Invoice::class, true);
    }


    /**
     * @param ResourceCollection<Invoice> $invoices
     * @return $this
     */
    public function setInvoices(ResourceCollection $invoices): static
    {
        $this->set('invoices.resource.embedded', $invoices);

        return $this;
    }

    /**
     * @return ResourceCollection<Shipment>
     */
    public function getShipments(): ResourceCollection
    {
        return $this->relation('shipments.resource.embedded', Shipment::class, true);
    }


    /**
     * @param ResourceCollection<Shipment> $shipments
     * @return $this
     */
    public function setShipments(ResourceCollection $shipments): static
    {
        $this->set('shipments.resource.embedded', $shipments);

        return $this;
    }

    /**
     * @return ResourceCollection<OrderProduct>
     */
    public function getProducts(): ResourceCollection
    {
        return $this->relation('products.resource.embedded', OrderProduct::class, true);
    }


    /**
     * @param ResourceCollection<OrderProduct> $products
     * @return $this
     */
    public function setProducts(ResourceCollection $products): static
    {
        $this->set('products.resource.embedded', $products);

        return $this;
    }

    /**
     * @return ResourceCollection<OrderMetafield>
     */
    public function getMetafields(): ResourceCollection
    {
        return $this->relation('metafields.resource.embedded', OrderMetafield::class, true);
    }


    /**
     * @param ResourceCollection<OrderMetafield> $metafields
     * @return $this
     */
    public function setMetafields(ResourceCollection $metafields): static
    {
        $this->set('metafields.resource.embedded', $metafields);

        return $this;
    }

    /**
     * @return Quote
     */
    public function getQuote(): Quote
    {
        return $this->relation('quote.resource.embedded', Quote::class);
    }


    /**
     * @return int
     */
    public function getQuoteId(): int
    {
        return $this->get('quote.resource.id');
    }

    /**
     * @param Quote $quote
     * @return $this
     */
    public function setQuote(Quote $quote): static
    {
        $this->set('quote.resource.embedded', $quote);

        return $this;
    }

    /**
     * @return ResourceCollection<OrderEvent>
     */
    public function getEvents(): ResourceCollection
    {
        return $this->relation('events.resource.embedded', OrderEvent::class, true);
    }


    /**
     * @param ResourceCollection<OrderEvent> $events
     * @return $this
     */
    public function setEvents(ResourceCollection $events): static
    {
        $this->set('events.resource.embedded', $events);

        return $this;
    }

}
