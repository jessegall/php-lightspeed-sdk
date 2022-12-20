<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Order
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/order
 */
class Order extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/orders';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'order';


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
    public function getNumber(): ?string
    {
        return $this->get('number');
    }

    /**
     * @param string|null $number
     * @return $this
     */
    public function setNumber(string $number = null): static
    {
        return $this->set('number', $number);
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->get('status');
    }

    /**
     * @param string|null $status
     * @return $this
     */
    public function setStatus(string $status = null): static
    {
        return $this->set('status', $status);
    }

    /**
     * @return mixed|null
     */
    public function getCustomStatusId(): mixed
    {
        return $this->get('customStatusId');
    }

    /**
     * @param mixed|null $customStatusId
     * @return $this
     */
    public function setCustomStatusId(mixed $customStatusId = null): static
    {
        return $this->set('customStatusId', $customStatusId);
    }

    /**
     * @return string|null
     */
    public function getChannel(): ?string
    {
        return $this->get('channel');
    }

    /**
     * @param string|null $channel
     * @return $this
     */
    public function setChannel(string $channel = null): static
    {
        return $this->set('channel', $channel);
    }

    /**
     * @return string|null
     */
    public function getRemoteIp(): ?string
    {
        return $this->get('remoteIp');
    }

    /**
     * @param string|null $remoteIp
     * @return $this
     */
    public function setRemoteIp(string $remoteIp = null): static
    {
        return $this->set('remoteIp', $remoteIp);
    }

    /**
     * @return string|null
     */
    public function getUserAgent(): ?string
    {
        return $this->get('userAgent');
    }

    /**
     * @param string|null $userAgent
     * @return $this
     */
    public function setUserAgent(string $userAgent = null): static
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
     * @return int|null
     */
    public function getPriceCost(): ?int
    {
        return $this->get('priceCost');
    }

    /**
     * @param int|null $priceCost
     * @return $this
     */
    public function setPriceCost(int $priceCost = null): static
    {
        return $this->set('priceCost', $priceCost);
    }

    /**
     * @return float|null
     */
    public function getPriceExcl(): ?float
    {
        return $this->get('priceExcl');
    }

    /**
     * @param float|null $priceExcl
     * @return $this
     */
    public function setPriceExcl(float $priceExcl = null): static
    {
        return $this->set('priceExcl', $priceExcl);
    }

    /**
     * @return float|null
     */
    public function getPriceIncl(): ?float
    {
        return $this->get('priceIncl');
    }

    /**
     * @param float|null $priceIncl
     * @return $this
     */
    public function setPriceIncl(float $priceIncl = null): static
    {
        return $this->set('priceIncl', $priceIncl);
    }

    /**
     * @return int|null
     */
    public function getWeight(): ?int
    {
        return $this->get('weight');
    }

    /**
     * @param int|null $weight
     * @return $this
     */
    public function setWeight(int $weight = null): static
    {
        return $this->set('weight', $weight);
    }

    /**
     * @return int|null
     */
    public function getVolume(): ?int
    {
        return $this->get('volume');
    }

    /**
     * @param int|null $volume
     * @return $this
     */
    public function setVolume(int $volume = null): static
    {
        return $this->set('volume', $volume);
    }

    /**
     * @return int|null
     */
    public function getColli(): ?int
    {
        return $this->get('colli');
    }

    /**
     * @param int|null $colli
     * @return $this
     */
    public function setColli(int $colli = null): static
    {
        return $this->set('colli', $colli);
    }

    /**
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->get('gender');
    }

    /**
     * @param string|null $gender
     * @return $this
     */
    public function setGender(string $gender = null): static
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
    public function getNewsletterSubscribed(): ?bool
    {
        return $this->get('newsletterSubscribed');
    }

    /**
     * @param bool|null $newsletterSubscribed
     * @return $this
     */
    public function setNewsletterSubscribed(bool $newsletterSubscribed = null): static
    {
        return $this->set('newsletterSubscribed', $newsletterSubscribed);
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
     * @return array|null
     */
    public function getAddressBillingRegionData(): ?array
    {
        return $this->get('addressBillingRegionData');
    }

    /**
     * @param array|null $addressBillingRegionData
     * @return $this
     */
    public function setAddressBillingRegionData(array $addressBillingRegionData = null): static
    {
        return $this->set('addressBillingRegionData', $addressBillingRegionData);
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
     * @return array|null
     */
    public function getAddressShippingRegionData(): ?array
    {
        return $this->get('addressShippingRegionData');
    }

    /**
     * @param array|null $addressShippingRegionData
     * @return $this
     */
    public function setAddressShippingRegionData(array $addressShippingRegionData = null): static
    {
        return $this->set('addressShippingRegionData', $addressShippingRegionData);
    }

    /**
     * @return string|null
     */
    public function getPaymentId(): ?string
    {
        return $this->get('paymentId');
    }

    /**
     * @param string|null $paymentId
     * @return $this
     */
    public function setPaymentId(string $paymentId = null): static
    {
        return $this->set('paymentId', $paymentId);
    }

    /**
     * @return string|null
     */
    public function getPaymentStatus(): ?string
    {
        return $this->get('paymentStatus');
    }

    /**
     * @param string|null $paymentStatus
     * @return $this
     */
    public function setPaymentStatus(string $paymentStatus = null): static
    {
        return $this->set('paymentStatus', $paymentStatus);
    }

    /**
     * @return bool|null
     */
    public function getPaymentIsPost(): ?bool
    {
        return $this->get('paymentIsPost');
    }

    /**
     * @param bool|null $paymentIsPost
     * @return $this
     */
    public function setPaymentIsPost(bool $paymentIsPost = null): static
    {
        return $this->set('paymentIsPost', $paymentIsPost);
    }

    /**
     * @return bool|null
     */
    public function getPaymentIsInvoiceExternal(): ?bool
    {
        return $this->get('paymentIsInvoiceExternal');
    }

    /**
     * @param bool|null $paymentIsInvoiceExternal
     * @return $this
     */
    public function setPaymentIsInvoiceExternal(bool $paymentIsInvoiceExternal = null): static
    {
        return $this->set('paymentIsInvoiceExternal', $paymentIsInvoiceExternal);
    }

    /**
     * @return int|null
     */
    public function getPaymentTaxRate(): ?int
    {
        return $this->get('paymentTaxRate');
    }

    /**
     * @param int|null $paymentTaxRate
     * @return $this
     */
    public function setPaymentTaxRate(int $paymentTaxRate = null): static
    {
        return $this->set('paymentTaxRate', $paymentTaxRate);
    }

    /**
     * @return array|null
     */
    public function getPaymentTaxRates(): ?array
    {
        return $this->get('paymentTaxRates');
    }

    /**
     * @param array|null $paymentTaxRates
     * @return $this
     */
    public function setPaymentTaxRates(array $paymentTaxRates = null): static
    {
        return $this->set('paymentTaxRates', $paymentTaxRates);
    }

    /**
     * @return int|null
     */
    public function getPaymentBasePriceExcl(): ?int
    {
        return $this->get('paymentBasePriceExcl');
    }

    /**
     * @param int|null $paymentBasePriceExcl
     * @return $this
     */
    public function setPaymentBasePriceExcl(int $paymentBasePriceExcl = null): static
    {
        return $this->set('paymentBasePriceExcl', $paymentBasePriceExcl);
    }

    /**
     * @return int|null
     */
    public function getPaymentBasePriceIncl(): ?int
    {
        return $this->get('paymentBasePriceIncl');
    }

    /**
     * @param int|null $paymentBasePriceIncl
     * @return $this
     */
    public function setPaymentBasePriceIncl(int $paymentBasePriceIncl = null): static
    {
        return $this->set('paymentBasePriceIncl', $paymentBasePriceIncl);
    }

    /**
     * @return int|null
     */
    public function getPaymentPriceExcl(): ?int
    {
        return $this->get('paymentPriceExcl');
    }

    /**
     * @param int|null $paymentPriceExcl
     * @return $this
     */
    public function setPaymentPriceExcl(int $paymentPriceExcl = null): static
    {
        return $this->set('paymentPriceExcl', $paymentPriceExcl);
    }

    /**
     * @return int|null
     */
    public function getPaymentPriceIncl(): ?int
    {
        return $this->get('paymentPriceIncl');
    }

    /**
     * @param int|null $paymentPriceIncl
     * @return $this
     */
    public function setPaymentPriceIncl(int $paymentPriceIncl = null): static
    {
        return $this->set('paymentPriceIncl', $paymentPriceIncl);
    }

    /**
     * @return string|null
     */
    public function getPaymentTitle(): ?string
    {
        return $this->get('paymentTitle');
    }

    /**
     * @param string|null $paymentTitle
     * @return $this
     */
    public function setPaymentTitle(string $paymentTitle = null): static
    {
        return $this->set('paymentTitle', $paymentTitle);
    }

    /**
     * @return array|null
     */
    public function getPaymentData(): ?array
    {
        return $this->get('paymentData');
    }

    /**
     * @param array|null $paymentData
     * @return $this
     */
    public function setPaymentData(array $paymentData = null): static
    {
        return $this->set('paymentData', $paymentData);
    }

    /**
     * @return string|null
     */
    public function getShipmentId(): ?string
    {
        return $this->get('shipmentId');
    }

    /**
     * @param string|null $shipmentId
     * @return $this
     */
    public function setShipmentId(string $shipmentId = null): static
    {
        return $this->set('shipmentId', $shipmentId);
    }

    /**
     * @return string|null
     */
    public function getShipmentStatus(): ?string
    {
        return $this->get('shipmentStatus');
    }

    /**
     * @param string|null $shipmentStatus
     * @return $this
     */
    public function setShipmentStatus(string $shipmentStatus = null): static
    {
        return $this->set('shipmentStatus', $shipmentStatus);
    }

    /**
     * @return bool|null
     */
    public function getShipmentIsCashOnDelivery(): ?bool
    {
        return $this->get('shipmentIsCashOnDelivery');
    }

    /**
     * @param bool|null $shipmentIsCashOnDelivery
     * @return $this
     */
    public function setShipmentIsCashOnDelivery(bool $shipmentIsCashOnDelivery = null): static
    {
        return $this->set('shipmentIsCashOnDelivery', $shipmentIsCashOnDelivery);
    }

    /**
     * @return bool|null
     */
    public function getShipmentIsPickup(): ?bool
    {
        return $this->get('shipmentIsPickup');
    }

    /**
     * @param bool|null $shipmentIsPickup
     * @return $this
     */
    public function setShipmentIsPickup(bool $shipmentIsPickup = null): static
    {
        return $this->set('shipmentIsPickup', $shipmentIsPickup);
    }

    /**
     * @return float|null
     */
    public function getShipmentTaxRate(): ?float
    {
        return $this->get('shipmentTaxRate');
    }

    /**
     * @param float|null $shipmentTaxRate
     * @return $this
     */
    public function setShipmentTaxRate(float $shipmentTaxRate = null): static
    {
        return $this->set('shipmentTaxRate', $shipmentTaxRate);
    }

    /**
     * @return array|null
     */
    public function getShipmentTaxRates(): ?array
    {
        return $this->get('shipmentTaxRates');
    }

    /**
     * @param array|null $shipmentTaxRates
     * @return $this
     */
    public function setShipmentTaxRates(array $shipmentTaxRates = null): static
    {
        return $this->set('shipmentTaxRates', $shipmentTaxRates);
    }

    /**
     * @return float|null
     */
    public function getShipmentBasePriceExcl(): ?float
    {
        return $this->get('shipmentBasePriceExcl');
    }

    /**
     * @param float|null $shipmentBasePriceExcl
     * @return $this
     */
    public function setShipmentBasePriceExcl(float $shipmentBasePriceExcl = null): static
    {
        return $this->set('shipmentBasePriceExcl', $shipmentBasePriceExcl);
    }

    /**
     * @return float|null
     */
    public function getShipmentBasePriceIncl(): ?float
    {
        return $this->get('shipmentBasePriceIncl');
    }

    /**
     * @param float|null $shipmentBasePriceIncl
     * @return $this
     */
    public function setShipmentBasePriceIncl(float $shipmentBasePriceIncl = null): static
    {
        return $this->set('shipmentBasePriceIncl', $shipmentBasePriceIncl);
    }

    /**
     * @return float|null
     */
    public function getShipmentPriceExcl(): ?float
    {
        return $this->get('shipmentPriceExcl');
    }

    /**
     * @param float|null $shipmentPriceExcl
     * @return $this
     */
    public function setShipmentPriceExcl(float $shipmentPriceExcl = null): static
    {
        return $this->set('shipmentPriceExcl', $shipmentPriceExcl);
    }

    /**
     * @return float|null
     */
    public function getShipmentPriceIncl(): ?float
    {
        return $this->get('shipmentPriceIncl');
    }

    /**
     * @param float|null $shipmentPriceIncl
     * @return $this
     */
    public function setShipmentPriceIncl(float $shipmentPriceIncl = null): static
    {
        return $this->set('shipmentPriceIncl', $shipmentPriceIncl);
    }

    /**
     * @return int|null
     */
    public function getShipmentDiscountExcl(): ?int
    {
        return $this->get('shipmentDiscountExcl');
    }

    /**
     * @param int|null $shipmentDiscountExcl
     * @return $this
     */
    public function setShipmentDiscountExcl(int $shipmentDiscountExcl = null): static
    {
        return $this->set('shipmentDiscountExcl', $shipmentDiscountExcl);
    }

    /**
     * @return int|null
     */
    public function getShipmentDiscountIncl(): ?int
    {
        return $this->get('shipmentDiscountIncl');
    }

    /**
     * @param int|null $shipmentDiscountIncl
     * @return $this
     */
    public function setShipmentDiscountIncl(int $shipmentDiscountIncl = null): static
    {
        return $this->set('shipmentDiscountIncl', $shipmentDiscountIncl);
    }

    /**
     * @return string|null
     */
    public function getShipmentTitle(): ?string
    {
        return $this->get('shipmentTitle');
    }

    /**
     * @param string|null $shipmentTitle
     * @return $this
     */
    public function setShipmentTitle(string $shipmentTitle = null): static
    {
        return $this->set('shipmentTitle', $shipmentTitle);
    }

    /**
     * @return array|null
     */
    public function getShipmentData(): ?array
    {
        return $this->get('shipmentData');
    }

    /**
     * @param array|null $shipmentData
     * @return $this
     */
    public function setShipmentData(array $shipmentData = null): static
    {
        return $this->set('shipmentData', $shipmentData);
    }

    /**
     * @return mixed|null
     */
    public function getShippingDate(): mixed
    {
        return $this->get('shippingDate');
    }

    /**
     * @param mixed|null $shippingDate
     * @return $this
     */
    public function setShippingDate(mixed $shippingDate = null): static
    {
        return $this->set('shippingDate', $shippingDate);
    }

    /**
     * @return mixed|null
     */
    public function getDeliveryDate(): mixed
    {
        return $this->get('deliveryDate');
    }

    /**
     * @param mixed|null $deliveryDate
     * @return $this
     */
    public function setDeliveryDate(mixed $deliveryDate = null): static
    {
        return $this->set('deliveryDate', $deliveryDate);
    }

    /**
     * @return bool|null
     */
    public function getIsDiscounted(): ?bool
    {
        return $this->get('isDiscounted');
    }

    /**
     * @param bool|null $isDiscounted
     * @return $this
     */
    public function setIsDiscounted(bool $isDiscounted = null): static
    {
        return $this->set('isDiscounted', $isDiscounted);
    }

    /**
     * @return string|null
     */
    public function getDiscountType(): ?string
    {
        return $this->get('discountType');
    }

    /**
     * @param string|null $discountType
     * @return $this
     */
    public function setDiscountType(string $discountType = null): static
    {
        return $this->set('discountType', $discountType);
    }

    /**
     * @return int|null
     */
    public function getDiscountAmount(): ?int
    {
        return $this->get('discountAmount');
    }

    /**
     * @param int|null $discountAmount
     * @return $this
     */
    public function setDiscountAmount(int $discountAmount = null): static
    {
        return $this->set('discountAmount', $discountAmount);
    }

    /**
     * @return int|null
     */
    public function getDiscountPercentage(): ?int
    {
        return $this->get('discountPercentage');
    }

    /**
     * @param int|null $discountPercentage
     * @return $this
     */
    public function setDiscountPercentage(int $discountPercentage = null): static
    {
        return $this->set('discountPercentage', $discountPercentage);
    }

    /**
     * @return string|null
     */
    public function getDiscountCouponCode(): ?string
    {
        return $this->get('discountCouponCode');
    }

    /**
     * @param string|null $discountCouponCode
     * @return $this
     */
    public function setDiscountCouponCode(string $discountCouponCode = null): static
    {
        return $this->set('discountCouponCode', $discountCouponCode);
    }

    /**
     * @return array|null
     */
    public function getTaxRates(): ?array
    {
        return $this->get('taxRates');
    }

    /**
     * @param array|null $taxRates
     * @return $this
     */
    public function setTaxRates(array $taxRates = null): static
    {
        return $this->set('taxRates', $taxRates);
    }

    /**
     * @return bool|null
     */
    public function getIsNewCustomer(): ?bool
    {
        return $this->get('isNewCustomer');
    }

    /**
     * @param bool|null $isNewCustomer
     * @return $this
     */
    public function setIsNewCustomer(bool $isNewCustomer = null): static
    {
        return $this->set('isNewCustomer', $isNewCustomer);
    }

    /**
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->get('comment');
    }

    /**
     * @param string|null $comment
     * @return $this
     */
    public function setComment(string $comment = null): static
    {
        return $this->set('comment', $comment);
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
    public function getAllowNotifications(): ?bool
    {
        return $this->get('allowNotifications');
    }

    /**
     * @param bool|null $allowNotifications
     * @return $this
     */
    public function setAllowNotifications(bool $allowNotifications = null): static
    {
        return $this->set('allowNotifications', $allowNotifications);
    }

    /**
     * @return bool|null
     */
    public function getDoNotifyNew(): ?bool
    {
        return $this->get('doNotifyNew');
    }

    /**
     * @param bool|null $doNotifyNew
     * @return $this
     */
    public function setDoNotifyNew(bool $doNotifyNew = null): static
    {
        return $this->set('doNotifyNew', $doNotifyNew);
    }

    /**
     * @return bool|null
     */
    public function getDoNotifyReminder(): ?bool
    {
        return $this->get('doNotifyReminder');
    }

    /**
     * @param bool|null $doNotifyReminder
     * @return $this
     */
    public function setDoNotifyReminder(bool $doNotifyReminder = null): static
    {
        return $this->set('doNotifyReminder', $doNotifyReminder);
    }

    /**
     * @return bool|null
     */
    public function getDoNotifyCancelled(): ?bool
    {
        return $this->get('doNotifyCancelled');
    }

    /**
     * @param bool|null $doNotifyCancelled
     * @return $this
     */
    public function setDoNotifyCancelled(bool $doNotifyCancelled = null): static
    {
        return $this->set('doNotifyCancelled', $doNotifyCancelled);
    }

    /**
     * @return array|null
     */
    public function getLanguage(): ?array
    {
        return $this->get('language');
    }

    /**
     * @param array|null $language
     * @return $this
     */
    public function setLanguage(array $language = null): static
    {
        return $this->set('language', $language);
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
     * @return ResourceCollection<OrderProduct>|null
     */
    public function getProducts(): ?ResourceCollection
    {
        return $this->relation('products.resource.embedded', OrderProduct::class, true);
    }


    /**
     * @param ResourceCollection<OrderProduct>|null $products
     * @return $this
     */
    public function setProducts(ResourceCollection $products = null): static
    {
        $this->set('products.resource.embedded', $products);

        return $this;
    }

    /**
     * @return ResourceCollection<OrderMetafield>|null
     */
    public function getMetafields(): ?ResourceCollection
    {
        return $this->relation('metafields.resource.embedded', OrderMetafield::class, true);
    }


    /**
     * @param ResourceCollection<OrderMetafield>|null $metafields
     * @return $this
     */
    public function setMetafields(ResourceCollection $metafields = null): static
    {
        $this->set('metafields.resource.embedded', $metafields);

        return $this;
    }

    /**
     * @return Quote|null
     */
    public function getQuote(): ?Quote
    {
        return $this->relation('quote.resource.embedded', Quote::class);
    }


    /**
     * @return int|null
     */
    public function getQuoteId(): ?int
    {
        return $this->get('quote.resource.id');
    }

    /**
     * @param Quote|null $quote
     * @return $this
     */
    public function setQuote(Quote $quote = null): static
    {
        $this->set('quote.resource.embedded', $quote);

        return $this;
    }

    /**
     * @return ResourceCollection<OrderEvent>|null
     */
    public function getEvents(): ?ResourceCollection
    {
        return $this->relation('events.resource.embedded', OrderEvent::class, true);
    }


    /**
     * @param ResourceCollection<OrderEvent>|null $events
     * @return $this
     */
    public function setEvents(ResourceCollection $events = null): static
    {
        $this->set('events.resource.embedded', $events);

        return $this;
    }

}
