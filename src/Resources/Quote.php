<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Quote
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/quote
 */
class Quote extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/quotes';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'quote';


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
    public function getRecalculatedAt(): ?string
    {
        return $this->get('recalculatedAt');
    }

    /**
     * @param string|null $recalculatedAt
     * @return $this
     */
    public function setRecalculatedAt(string $recalculatedAt = null): static
    {
        return $this->set('recalculatedAt', $recalculatedAt);
    }

    /**
     * @return bool|null
     */
    public function getIsLocked(): ?bool
    {
        return $this->get('isLocked');
    }

    /**
     * @param bool|null $isLocked
     * @return $this
     */
    public function setIsLocked(bool $isLocked = null): static
    {
        return $this->set('isLocked', $isLocked);
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
    public function getRecoveryHash(): ?string
    {
        return $this->get('recoveryHash');
    }

    /**
     * @param string|null $recoveryHash
     * @return $this
     */
    public function setRecoveryHash(string $recoveryHash = null): static
    {
        return $this->set('recoveryHash', $recoveryHash);
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
     * @return array|null
     */
    public function getPaymentCountry(): ?array
    {
        return $this->get('paymentCountry');
    }

    /**
     * @param array|null $paymentCountry
     * @return $this
     */
    public function setPaymentCountry(array $paymentCountry = null): static
    {
        return $this->set('paymentCountry', $paymentCountry);
    }

    /**
     * @return array|null
     */
    public function getShipmentCountry(): ?array
    {
        return $this->get('shipmentCountry');
    }

    /**
     * @param array|null $shipmentCountry
     * @return $this
     */
    public function setShipmentCountry(array $shipmentCountry = null): static
    {
        return $this->set('shipmentCountry', $shipmentCountry);
    }

    /**
     * @return string|null
     */
    public function getShipmentZipcode(): ?string
    {
        return $this->get('shipmentZipcode');
    }

    /**
     * @param string|null $shipmentZipcode
     * @return $this
     */
    public function setShipmentZipcode(string $shipmentZipcode = null): static
    {
        return $this->set('shipmentZipcode', $shipmentZipcode);
    }

    /**
     * @return bool|null
     */
    public function getShipmentSameAddress(): ?bool
    {
        return $this->get('shipmentSameAddress');
    }

    /**
     * @param bool|null $shipmentSameAddress
     * @return $this
     */
    public function setShipmentSameAddress(bool $shipmentSameAddress = null): static
    {
        return $this->set('shipmentSameAddress', $shipmentSameAddress);
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
     * @return int|null
     */
    public function getPriceExcl(): ?int
    {
        return $this->get('priceExcl');
    }

    /**
     * @param int|null $priceExcl
     * @return $this
     */
    public function setPriceExcl(int $priceExcl = null): static
    {
        return $this->set('priceExcl', $priceExcl);
    }

    /**
     * @return int|null
     */
    public function getPriceIncl(): ?int
    {
        return $this->get('priceIncl');
    }

    /**
     * @param int|null $priceIncl
     * @return $this
     */
    public function setPriceIncl(int $priceIncl = null): static
    {
        return $this->set('priceIncl', $priceIncl);
    }

    /**
     * @return int|null
     */
    public function getDiscountExcl(): ?int
    {
        return $this->get('discountExcl');
    }

    /**
     * @param int|null $discountExcl
     * @return $this
     */
    public function setDiscountExcl(int $discountExcl = null): static
    {
        return $this->set('discountExcl', $discountExcl);
    }

    /**
     * @return int|null
     */
    public function getDiscountIncl(): ?int
    {
        return $this->get('discountIncl');
    }

    /**
     * @param int|null $discountIncl
     * @return $this
     */
    public function setDiscountIncl(int $discountIncl = null): static
    {
        return $this->set('discountIncl', $discountIncl);
    }

    /**
     * @return int|null
     */
    public function getProductsCount(): ?int
    {
        return $this->get('productsCount');
    }

    /**
     * @param int|null $productsCount
     * @return $this
     */
    public function setProductsCount(int $productsCount = null): static
    {
        return $this->set('productsCount', $productsCount);
    }

    /**
     * @return int|null
     */
    public function getProductsQuantity(): ?int
    {
        return $this->get('productsQuantity');
    }

    /**
     * @param int|null $productsQuantity
     * @return $this
     */
    public function setProductsQuantity(int $productsQuantity = null): static
    {
        return $this->set('productsQuantity', $productsQuantity);
    }

    /**
     * @return bool|null
     */
    public function getShipmentIsSet(): ?bool
    {
        return $this->get('shipmentIsSet');
    }

    /**
     * @param bool|null $shipmentIsSet
     * @return $this
     */
    public function setShipmentIsSet(bool $shipmentIsSet = null): static
    {
        return $this->set('shipmentIsSet', $shipmentIsSet);
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
     * @return bool|null
     */
    public function getShipmentIsVirtual(): ?bool
    {
        return $this->get('shipmentIsVirtual');
    }

    /**
     * @param bool|null $shipmentIsVirtual
     * @return $this
     */
    public function setShipmentIsVirtual(bool $shipmentIsVirtual = null): static
    {
        return $this->set('shipmentIsVirtual', $shipmentIsVirtual);
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
     * @return int|null
     */
    public function getShipmentDiscountPercentage(): ?int
    {
        return $this->get('shipmentDiscountPercentage');
    }

    /**
     * @param int|null $shipmentDiscountPercentage
     * @return $this
     */
    public function setShipmentDiscountPercentage(int $shipmentDiscountPercentage = null): static
    {
        return $this->set('shipmentDiscountPercentage', $shipmentDiscountPercentage);
    }

    /**
     * @return bool|null
     */
    public function getShipmentIsServicePoint(): ?bool
    {
        return $this->get('shipmentIsServicePoint');
    }

    /**
     * @param bool|null $shipmentIsServicePoint
     * @return $this
     */
    public function setShipmentIsServicePoint(bool $shipmentIsServicePoint = null): static
    {
        return $this->set('shipmentIsServicePoint', $shipmentIsServicePoint);
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
     * @return int|null
     */
    public function getShipmentTaxRate(): ?int
    {
        return $this->get('shipmentTaxRate');
    }

    /**
     * @param int|null $shipmentTaxRate
     * @return $this
     */
    public function setShipmentTaxRate(int $shipmentTaxRate = null): static
    {
        return $this->set('shipmentTaxRate', $shipmentTaxRate);
    }

    /**
     * @return int|null
     */
    public function getShipmentBasePriceExcl(): ?int
    {
        return $this->get('shipmentBasePriceExcl');
    }

    /**
     * @param int|null $shipmentBasePriceExcl
     * @return $this
     */
    public function setShipmentBasePriceExcl(int $shipmentBasePriceExcl = null): static
    {
        return $this->set('shipmentBasePriceExcl', $shipmentBasePriceExcl);
    }

    /**
     * @return int|null
     */
    public function getShipmentBasePriceIncl(): ?int
    {
        return $this->get('shipmentBasePriceIncl');
    }

    /**
     * @param int|null $shipmentBasePriceIncl
     * @return $this
     */
    public function setShipmentBasePriceIncl(int $shipmentBasePriceIncl = null): static
    {
        return $this->set('shipmentBasePriceIncl', $shipmentBasePriceIncl);
    }

    /**
     * @return int|null
     */
    public function getShipmentPriceTax(): ?int
    {
        return $this->get('shipmentPriceTax');
    }

    /**
     * @param int|null $shipmentPriceTax
     * @return $this
     */
    public function setShipmentPriceTax(int $shipmentPriceTax = null): static
    {
        return $this->set('shipmentPriceTax', $shipmentPriceTax);
    }

    /**
     * @return int|null
     */
    public function getShipmentPriceExcl(): ?int
    {
        return $this->get('shipmentPriceExcl');
    }

    /**
     * @param int|null $shipmentPriceExcl
     * @return $this
     */
    public function setShipmentPriceExcl(int $shipmentPriceExcl = null): static
    {
        return $this->set('shipmentPriceExcl', $shipmentPriceExcl);
    }

    /**
     * @return int|null
     */
    public function getShipmentPriceIncl(): ?int
    {
        return $this->get('shipmentPriceIncl');
    }

    /**
     * @param int|null $shipmentPriceIncl
     * @return $this
     */
    public function setShipmentPriceIncl(int $shipmentPriceIncl = null): static
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
     * @return bool|null
     */
    public function getPaymentIsSet(): ?bool
    {
        return $this->get('paymentIsSet');
    }

    /**
     * @param bool|null $paymentIsSet
     * @return $this
     */
    public function setPaymentIsSet(bool $paymentIsSet = null): static
    {
        return $this->set('paymentIsSet', $paymentIsSet);
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
     * @return string|null
     */
    public function getPaymentData(): ?string
    {
        return $this->get('paymentData');
    }

    /**
     * @param string|null $paymentData
     * @return $this
     */
    public function setPaymentData(string $paymentData = null): static
    {
        return $this->set('paymentData', $paymentData);
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
    public function getPaymentPriceTax(): ?int
    {
        return $this->get('paymentPriceTax');
    }

    /**
     * @param int|null $paymentPriceTax
     * @return $this
     */
    public function setPaymentPriceTax(int $paymentPriceTax = null): static
    {
        return $this->set('paymentPriceTax', $paymentPriceTax);
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
    public function getAdditionalCostIncl(): ?string
    {
        return $this->get('additionalCostIncl');
    }

    /**
     * @param string|null $additionalCostIncl
     * @return $this
     */
    public function setAdditionalCostIncl(string $additionalCostIncl = null): static
    {
        return $this->set('additionalCostIncl', $additionalCostIncl);
    }

    /**
     * @return string|null
     */
    public function getAdditionalCostExcl(): ?string
    {
        return $this->get('additionalCostExcl');
    }

    /**
     * @param string|null $additionalCostExcl
     * @return $this
     */
    public function setAdditionalCostExcl(string $additionalCostExcl = null): static
    {
        return $this->set('additionalCostExcl', $additionalCostExcl);
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
     * @return bool|null
     */
    public function getDiscountIsSet(): ?bool
    {
        return $this->get('discountIsSet');
    }

    /**
     * @param bool|null $discountIsSet
     * @return $this
     */
    public function setDiscountIsSet(bool $discountIsSet = null): static
    {
        return $this->set('discountIsSet', $discountIsSet);
    }

    /**
     * @return int|null
     */
    public function getDiscountId(): ?int
    {
        return $this->get('discountId');
    }

    /**
     * @param int|null $discountId
     * @return $this
     */
    public function setDiscountId(int $discountId = null): static
    {
        return $this->set('discountId', $discountId);
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
    public function getDiscountShipment(): ?string
    {
        return $this->get('discountShipment');
    }

    /**
     * @param string|null $discountShipment
     * @return $this
     */
    public function setDiscountShipment(string $discountShipment = null): static
    {
        return $this->set('discountShipment', $discountShipment);
    }

    /**
     * @return string|null
     */
    public function getDiscountMinimumAmount(): ?string
    {
        return $this->get('discountMinimumAmount');
    }

    /**
     * @param string|null $discountMinimumAmount
     * @return $this
     */
    public function setDiscountMinimumAmount(string $discountMinimumAmount = null): static
    {
        return $this->set('discountMinimumAmount', $discountMinimumAmount);
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
     * @return mixed|null
     */
    public function getComment(): mixed
    {
        return $this->get('comment');
    }

    /**
     * @param mixed|null $comment
     * @return $this
     */
    public function setComment(mixed $comment = null): static
    {
        return $this->set('comment', $comment);
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
     * @return ResourceCollection<QuoteProduct>|null
     */
    public function getProducts(): ?ResourceCollection
    {
        return $this->relation('products.resource.embedded', QuoteProduct::class, true);
    }


    /**
     * @param ResourceCollection<QuoteProduct>|null $products
     * @return $this
     */
    public function setProducts(ResourceCollection $products = null): static
    {
        $this->set('products.resource.embedded', $products);

        return $this;
    }

    /**
     * @return ResourceCollection<QuoteShippingmethod>|null
     */
    public function getShippingmethods(): ?ResourceCollection
    {
        return $this->relation('shippingmethods.resource.embedded', QuoteShippingmethod::class, true);
    }


    /**
     * @param ResourceCollection<QuoteShippingmethod>|null $shippingmethods
     * @return $this
     */
    public function setShippingmethods(ResourceCollection $shippingmethods = null): static
    {
        $this->set('shippingmethods.resource.embedded', $shippingmethods);

        return $this;
    }

    /**
     * @return ResourceCollection<QuotePaymentmethod>|null
     */
    public function getPaymentmethods(): ?ResourceCollection
    {
        return $this->relation('paymentmethods.resource.embedded', QuotePaymentmethod::class, true);
    }


    /**
     * @param ResourceCollection<QuotePaymentmethod>|null $paymentmethods
     * @return $this
     */
    public function setPaymentmethods(ResourceCollection $paymentmethods = null): static
    {
        $this->set('paymentmethods.resource.embedded', $paymentmethods);

        return $this;
    }

}
