<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Shop
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/shop
 */
class Shop extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/shops';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'shop';


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
     * @return bool|null
     */
    public function getIsB2b(): ?bool
    {
        return $this->get('isB2b');
    }

    /**
     * @param bool|null $isB2b
     * @return $this
     */
    public function setIsB2b(bool $isB2b = null): static
    {
        return $this->set('isB2b', $isB2b);
    }

    /**
     * @return bool|null
     */
    public function getIsRetail(): ?bool
    {
        return $this->get('isRetail');
    }

    /**
     * @param bool|null $isRetail
     * @return $this
     */
    public function setIsRetail(bool $isRetail = null): static
    {
        return $this->set('isRetail', $isRetail);
    }

    /**
     * @return string|null
     */
    public function getSubDomain(): ?string
    {
        return $this->get('subDomain');
    }

    /**
     * @param string|null $subDomain
     * @return $this
     */
    public function setSubDomain(string $subDomain = null): static
    {
        return $this->set('subDomain', $subDomain);
    }

    /**
     * @return string|null
     */
    public function getMainDomain(): ?string
    {
        return $this->get('mainDomain');
    }

    /**
     * @param string|null $mainDomain
     * @return $this
     */
    public function setMainDomain(string $mainDomain = null): static
    {
        return $this->set('mainDomain', $mainDomain);
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
    public function getFax(): ?string
    {
        return $this->get('fax');
    }

    /**
     * @param string|null $fax
     * @return $this
     */
    public function setFax(string $fax = null): static
    {
        return $this->set('fax', $fax);
    }

    /**
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->get('street');
    }

    /**
     * @param string|null $street
     * @return $this
     */
    public function setStreet(string $street = null): static
    {
        return $this->set('street', $street);
    }

    /**
     * @return string|null
     */
    public function getStreet2(): ?string
    {
        return $this->get('street2');
    }

    /**
     * @param string|null $street2
     * @return $this
     */
    public function setStreet2(string $street2 = null): static
    {
        return $this->set('street2', $street2);
    }

    /**
     * @return string|null
     */
    public function getZipcode(): ?string
    {
        return $this->get('zipcode');
    }

    /**
     * @param string|null $zipcode
     * @return $this
     */
    public function setZipcode(string $zipcode = null): static
    {
        return $this->set('zipcode', $zipcode);
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->get('city');
    }

    /**
     * @param string|null $city
     * @return $this
     */
    public function setCity(string $city = null): static
    {
        return $this->set('city', $city);
    }

    /**
     * @return string|null
     */
    public function getRegion(): ?string
    {
        return $this->get('region');
    }

    /**
     * @param string|null $region
     * @return $this
     */
    public function setRegion(string $region = null): static
    {
        return $this->set('region', $region);
    }

    /**
     * @return array|null
     */
    public function getCountry(): ?array
    {
        return $this->get('country');
    }

    /**
     * @param array|null $country
     * @return $this
     */
    public function setCountry(array $country = null): static
    {
        return $this->set('country', $country);
    }

    /**
     * @return string|null
     */
    public function getVatNumber(): ?string
    {
        return $this->get('vatNumber');
    }

    /**
     * @param string|null $vatNumber
     * @return $this
     */
    public function setVatNumber(string $vatNumber = null): static
    {
        return $this->set('vatNumber', $vatNumber);
    }

    /**
     * @return string|null
     */
    public function getCocNumber(): ?string
    {
        return $this->get('cocNumber');
    }

    /**
     * @param string|null $cocNumber
     * @return $this
     */
    public function setCocNumber(string $cocNumber = null): static
    {
        return $this->set('cocNumber', $cocNumber);
    }

    /**
     * @return string|null
     */
    public function getIndustry(): ?string
    {
        return $this->get('industry');
    }

    /**
     * @param string|null $industry
     * @return $this
     */
    public function setIndustry(string $industry = null): static
    {
        return $this->set('industry', $industry);
    }

    /**
     * @return array|null
     */
    public function getCurrency(): ?array
    {
        return $this->get('currency');
    }

    /**
     * @param array|null $currency
     * @return $this
     */
    public function setCurrency(array $currency = null): static
    {
        return $this->set('currency', $currency);
    }

    /**
     * @return ResourceCollection<ShopCompany>|null
     */
    public function getCompany(): ?ResourceCollection
    {
        return $this->relation('company.resource.embedded', ShopCompany::class, true);
    }


    /**
     * @param ResourceCollection<ShopCompany>|null $company
     * @return $this
     */
    public function setCompany(ResourceCollection $company = null): static
    {
        $this->set('company.resource.embedded', $company);

        return $this;
    }

    /**
     * @return ResourceCollection<ShopLimits>|null
     */
    public function getLimits(): ?ResourceCollection
    {
        return $this->relation('limits.resource.embedded', ShopLimits::class, true);
    }


    /**
     * @param ResourceCollection<ShopLimits>|null $limits
     * @return $this
     */
    public function setLimits(ResourceCollection $limits = null): static
    {
        $this->set('limits.resource.embedded', $limits);

        return $this;
    }

    /**
     * @return ResourceCollection<ShopJavascript>|null
     */
    public function getJavascript(): ?ResourceCollection
    {
        return $this->relation('javascript.resource.embedded', ShopJavascript::class, true);
    }


    /**
     * @param ResourceCollection<ShopJavascript>|null $javascript
     * @return $this
     */
    public function setJavascript(ResourceCollection $javascript = null): static
    {
        $this->set('javascript.resource.embedded', $javascript);

        return $this;
    }

    /**
     * @return ResourceCollection<ShopWebsite>|null
     */
    public function getWebsite(): ?ResourceCollection
    {
        return $this->relation('website.resource.embedded', ShopWebsite::class, true);
    }


    /**
     * @param ResourceCollection<ShopWebsite>|null $website
     * @return $this
     */
    public function setWebsite(ResourceCollection $website = null): static
    {
        $this->set('website.resource.embedded', $website);

        return $this;
    }

    /**
     * @return ResourceCollection<ShopScript>|null
     */
    public function getScripts(): ?ResourceCollection
    {
        return $this->relation('scripts.resource.embedded', ShopScript::class, true);
    }


    /**
     * @param ResourceCollection<ShopScript>|null $scripts
     * @return $this
     */
    public function setScripts(ResourceCollection $scripts = null): static
    {
        $this->set('scripts.resource.embedded', $scripts);

        return $this;
    }

    /**
     * @return ResourceCollection<ShopMetafield>|null
     */
    public function getMetafields(): ?ResourceCollection
    {
        return $this->relation('metafields.resource.embedded', ShopMetafield::class, true);
    }


    /**
     * @param ResourceCollection<ShopMetafield>|null $metafields
     * @return $this
     */
    public function setMetafields(ResourceCollection $metafields = null): static
    {
        $this->set('metafields.resource.embedded', $metafields);

        return $this;
    }

}
