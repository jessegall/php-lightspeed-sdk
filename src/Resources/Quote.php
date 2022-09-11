<?php

namespace JesseGall\LightspeedSDK\Resources;

class Quote extends Resource
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
     * @return string
     */
    public function getRecalculatedAt(): string
    {
        return $this->get('recalculatedAt');
    }

    /**
     * @param string $recalculatedAt
     * @return $this
     */
    public function setRecalculatedAt(string $recalculatedAt): static
    {
        return $this->set('recalculatedAt', $recalculatedAt);
    }

    /**
     * @return bool
     */
    public function getIsLocked(): bool
    {
        return $this->get('isLocked');
    }

    /**
     * @param bool $isLocked
     * @return $this
     */
    public function setIsLocked(bool $isLocked): static
    {
        return $this->set('isLocked', $isLocked);
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
    public function getRecoveryHash(): string
    {
        return $this->get('recoveryHash');
    }

    /**
     * @param string $recoveryHash
     * @return $this
     */
    public function setRecoveryHash(string $recoveryHash): static
    {
        return $this->set('recoveryHash', $recoveryHash);
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
     * @return array
     */
    public function getPaymentCountry(): array
    {
        return $this->get('paymentCountry');
    }

    /**
     * @param array $paymentCountry
     * @return $this
     */
    public function setPaymentCountry(array $paymentCountry): static
    {
        return $this->set('paymentCountry', $paymentCountry);
    }

    /**
     * @return array
     */
    public function getShipmentCountry(): array
    {
        return $this->get('shipmentCountry');
    }

    /**
     * @param array $shipmentCountry
     * @return $this
     */
    public function setShipmentCountry(array $shipmentCountry): static
    {
        return $this->set('shipmentCountry', $shipmentCountry);
    }

    /**
     * @return string
     */
    public function getShipmentZipcode(): string
    {
        return $this->get('shipmentZipcode');
    }

    /**
     * @param string $shipmentZipcode
     * @return $this
     */
    public function setShipmentZipcode(string $shipmentZipcode): static
    {
        return $this->set('shipmentZipcode', $shipmentZipcode);
    }

    /**
     * @return bool
     */
    public function getShipmentSameAddress(): bool
    {
        return $this->get('shipmentSameAddress');
    }

    /**
     * @param bool $shipmentSameAddress
     * @return $this
     */
    public function setShipmentSameAddress(bool $shipmentSameAddress): static
    {
        return $this->set('shipmentSameAddress', $shipmentSameAddress);
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
     * @return int
     */
    public function getPriceExcl(): int
    {
        return $this->get('priceExcl');
    }

    /**
     * @param int $priceExcl
     * @return $this
     */
    public function setPriceExcl(int $priceExcl): static
    {
        return $this->set('priceExcl', $priceExcl);
    }

    /**
     * @return int
     */
    public function getPriceIncl(): int
    {
        return $this->get('priceIncl');
    }

    /**
     * @param int $priceIncl
     * @return $this
     */
    public function setPriceIncl(int $priceIncl): static
    {
        return $this->set('priceIncl', $priceIncl);
    }

    /**
     * @return int
     */
    public function getDiscountExcl(): int
    {
        return $this->get('discountExcl');
    }

    /**
     * @param int $discountExcl
     * @return $this
     */
    public function setDiscountExcl(int $discountExcl): static
    {
        return $this->set('discountExcl', $discountExcl);
    }

    /**
     * @return int
     */
    public function getDiscountIncl(): int
    {
        return $this->get('discountIncl');
    }

    /**
     * @param int $discountIncl
     * @return $this
     */
    public function setDiscountIncl(int $discountIncl): static
    {
        return $this->set('discountIncl', $discountIncl);
    }

    /**
     * @return int
     */
    public function getProductsCount(): int
    {
        return $this->get('productsCount');
    }

    /**
     * @param int $productsCount
     * @return $this
     */
    public function setProductsCount(int $productsCount): static
    {
        return $this->set('productsCount', $productsCount);
    }

    /**
     * @return int
     */
    public function getProductsQuantity(): int
    {
        return $this->get('productsQuantity');
    }

    /**
     * @param int $productsQuantity
     * @return $this
     */
    public function setProductsQuantity(int $productsQuantity): static
    {
        return $this->set('productsQuantity', $productsQuantity);
    }

    /**
     * @return bool
     */
    public function getShipmentIsSet(): bool
    {
        return $this->get('shipmentIsSet');
    }

    /**
     * @param bool $shipmentIsSet
     * @return $this
     */
    public function setShipmentIsSet(bool $shipmentIsSet): static
    {
        return $this->set('shipmentIsSet', $shipmentIsSet);
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
     * @return bool
     */
    public function getShipmentIsVirtual(): bool
    {
        return $this->get('shipmentIsVirtual');
    }

    /**
     * @param bool $shipmentIsVirtual
     * @return $this
     */
    public function setShipmentIsVirtual(bool $shipmentIsVirtual): static
    {
        return $this->set('shipmentIsVirtual', $shipmentIsVirtual);
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
     * @return int
     */
    public function getShipmentDiscountPercentage(): int
    {
        return $this->get('shipmentDiscountPercentage');
    }

    /**
     * @param int $shipmentDiscountPercentage
     * @return $this
     */
    public function setShipmentDiscountPercentage(int $shipmentDiscountPercentage): static
    {
        return $this->set('shipmentDiscountPercentage', $shipmentDiscountPercentage);
    }

    /**
     * @return bool
     */
    public function getShipmentIsServicePoint(): bool
    {
        return $this->get('shipmentIsServicePoint');
    }

    /**
     * @param bool $shipmentIsServicePoint
     * @return $this
     */
    public function setShipmentIsServicePoint(bool $shipmentIsServicePoint): static
    {
        return $this->set('shipmentIsServicePoint', $shipmentIsServicePoint);
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
     * @return int
     */
    public function getShipmentTaxRate(): int
    {
        return $this->get('shipmentTaxRate');
    }

    /**
     * @param int $shipmentTaxRate
     * @return $this
     */
    public function setShipmentTaxRate(int $shipmentTaxRate): static
    {
        return $this->set('shipmentTaxRate', $shipmentTaxRate);
    }

    /**
     * @return int
     */
    public function getShipmentBasePriceExcl(): int
    {
        return $this->get('shipmentBasePriceExcl');
    }

    /**
     * @param int $shipmentBasePriceExcl
     * @return $this
     */
    public function setShipmentBasePriceExcl(int $shipmentBasePriceExcl): static
    {
        return $this->set('shipmentBasePriceExcl', $shipmentBasePriceExcl);
    }

    /**
     * @return int
     */
    public function getShipmentBasePriceIncl(): int
    {
        return $this->get('shipmentBasePriceIncl');
    }

    /**
     * @param int $shipmentBasePriceIncl
     * @return $this
     */
    public function setShipmentBasePriceIncl(int $shipmentBasePriceIncl): static
    {
        return $this->set('shipmentBasePriceIncl', $shipmentBasePriceIncl);
    }

    /**
     * @return int
     */
    public function getShipmentPriceTax(): int
    {
        return $this->get('shipmentPriceTax');
    }

    /**
     * @param int $shipmentPriceTax
     * @return $this
     */
    public function setShipmentPriceTax(int $shipmentPriceTax): static
    {
        return $this->set('shipmentPriceTax', $shipmentPriceTax);
    }

    /**
     * @return int
     */
    public function getShipmentPriceExcl(): int
    {
        return $this->get('shipmentPriceExcl');
    }

    /**
     * @param int $shipmentPriceExcl
     * @return $this
     */
    public function setShipmentPriceExcl(int $shipmentPriceExcl): static
    {
        return $this->set('shipmentPriceExcl', $shipmentPriceExcl);
    }

    /**
     * @return int
     */
    public function getShipmentPriceIncl(): int
    {
        return $this->get('shipmentPriceIncl');
    }

    /**
     * @param int $shipmentPriceIncl
     * @return $this
     */
    public function setShipmentPriceIncl(int $shipmentPriceIncl): static
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
     * @return bool
     */
    public function getPaymentIsSet(): bool
    {
        return $this->get('paymentIsSet');
    }

    /**
     * @param bool $paymentIsSet
     * @return $this
     */
    public function setPaymentIsSet(bool $paymentIsSet): static
    {
        return $this->set('paymentIsSet', $paymentIsSet);
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
     * @return string
     */
    public function getPaymentData(): string
    {
        return $this->get('paymentData');
    }

    /**
     * @param string $paymentData
     * @return $this
     */
    public function setPaymentData(string $paymentData): static
    {
        return $this->set('paymentData', $paymentData);
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
    public function getPaymentPriceTax(): int
    {
        return $this->get('paymentPriceTax');
    }

    /**
     * @param int $paymentPriceTax
     * @return $this
     */
    public function setPaymentPriceTax(int $paymentPriceTax): static
    {
        return $this->set('paymentPriceTax', $paymentPriceTax);
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
    public function getAdditionalCostIncl(): string
    {
        return $this->get('additionalCostIncl');
    }

    /**
     * @param string $additionalCostIncl
     * @return $this
     */
    public function setAdditionalCostIncl(string $additionalCostIncl): static
    {
        return $this->set('additionalCostIncl', $additionalCostIncl);
    }

    /**
     * @return string
     */
    public function getAdditionalCostExcl(): string
    {
        return $this->get('additionalCostExcl');
    }

    /**
     * @param string $additionalCostExcl
     * @return $this
     */
    public function setAdditionalCostExcl(string $additionalCostExcl): static
    {
        return $this->set('additionalCostExcl', $additionalCostExcl);
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
     * @return bool
     */
    public function getDiscountIsSet(): bool
    {
        return $this->get('discountIsSet');
    }

    /**
     * @param bool $discountIsSet
     * @return $this
     */
    public function setDiscountIsSet(bool $discountIsSet): static
    {
        return $this->set('discountIsSet', $discountIsSet);
    }

    /**
     * @return int
     */
    public function getDiscountId(): int
    {
        return $this->get('discountId');
    }

    /**
     * @param int $discountId
     * @return $this
     */
    public function setDiscountId(int $discountId): static
    {
        return $this->set('discountId', $discountId);
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
    public function getDiscountShipment(): string
    {
        return $this->get('discountShipment');
    }

    /**
     * @param string $discountShipment
     * @return $this
     */
    public function setDiscountShipment(string $discountShipment): static
    {
        return $this->set('discountShipment', $discountShipment);
    }

    /**
     * @return string
     */
    public function getDiscountMinimumAmount(): string
    {
        return $this->get('discountMinimumAmount');
    }

    /**
     * @param string $discountMinimumAmount
     * @return $this
     */
    public function setDiscountMinimumAmount(string $discountMinimumAmount): static
    {
        return $this->set('discountMinimumAmount', $discountMinimumAmount);
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
     * @return mixed
     */
    public function getComment(): mixed
    {
        return $this->get('comment');
    }

    /**
     * @param mixed $comment
     * @return $this
     */
    public function setComment(mixed $comment): static
    {
        return $this->set('comment', $comment);
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
     * @return Product[]
     */
    public function getProducts(): array
    {
        return $this->mapTo('products', Product::class);
    }

    /**
     * @param Product[] $products
     * @return $this
     */
    public function setProducts(array $products): static
    {
        $this->set('products', $products);

        return $this;
    }

    /**
     * @return Shippingmethod[]
     */
    public function getShippingmethods(): array
    {
        return $this->mapTo('shippingmethods', Shippingmethod::class);
    }

    /**
     * @param Shippingmethod[] $shippingmethods
     * @return $this
     */
    public function setShippingmethods(array $shippingmethods): static
    {
        $this->set('shippingmethods', $shippingmethods);

        return $this;
    }

    /**
     * @return Paymentmethod[]
     */
    public function getPaymentmethods(): array
    {
        return $this->mapTo('paymentmethods', Paymentmethod::class);
    }

    /**
     * @param Paymentmethod[] $paymentmethods
     * @return $this
     */
    public function setPaymentmethods(array $paymentmethods): static
    {
        $this->set('paymentmethods', $paymentmethods);

        return $this;
    }

}
