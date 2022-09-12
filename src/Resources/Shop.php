<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class Shop extends Resource
{


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
     * @return bool
     */
    public function getIsB2b(): bool
    {
        return $this->get('isB2b');
    }

    /**
     * @param bool $isB2b
     * @return $this
     */
    public function setIsB2b(bool $isB2b): static
    {
        return $this->set('isB2b', $isB2b);
    }

    /**
     * @return bool
     */
    public function getIsRetail(): bool
    {
        return $this->get('isRetail');
    }

    /**
     * @param bool $isRetail
     * @return $this
     */
    public function setIsRetail(bool $isRetail): static
    {
        return $this->set('isRetail', $isRetail);
    }

    /**
     * @return string
     */
    public function getSubDomain(): string
    {
        return $this->get('subDomain');
    }

    /**
     * @param string $subDomain
     * @return $this
     */
    public function setSubDomain(string $subDomain): static
    {
        return $this->set('subDomain', $subDomain);
    }

    /**
     * @return string
     */
    public function getMainDomain(): string
    {
        return $this->get('mainDomain');
    }

    /**
     * @param string $mainDomain
     * @return $this
     */
    public function setMainDomain(string $mainDomain): static
    {
        return $this->set('mainDomain', $mainDomain);
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
    public function getFax(): string
    {
        return $this->get('fax');
    }

    /**
     * @param string $fax
     * @return $this
     */
    public function setFax(string $fax): static
    {
        return $this->set('fax', $fax);
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->get('street');
    }

    /**
     * @param string $street
     * @return $this
     */
    public function setStreet(string $street): static
    {
        return $this->set('street', $street);
    }

    /**
     * @return string
     */
    public function getStreet2(): string
    {
        return $this->get('street2');
    }

    /**
     * @param string $street2
     * @return $this
     */
    public function setStreet2(string $street2): static
    {
        return $this->set('street2', $street2);
    }

    /**
     * @return string
     */
    public function getZipcode(): string
    {
        return $this->get('zipcode');
    }

    /**
     * @param string $zipcode
     * @return $this
     */
    public function setZipcode(string $zipcode): static
    {
        return $this->set('zipcode', $zipcode);
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->get('city');
    }

    /**
     * @param string $city
     * @return $this
     */
    public function setCity(string $city): static
    {
        return $this->set('city', $city);
    }

    /**
     * @return string
     */
    public function getRegion(): string
    {
        return $this->get('region');
    }

    /**
     * @param string $region
     * @return $this
     */
    public function setRegion(string $region): static
    {
        return $this->set('region', $region);
    }

    /**
     * @return array
     */
    public function getCountry(): array
    {
        return $this->get('country');
    }

    /**
     * @param array $country
     * @return $this
     */
    public function setCountry(array $country): static
    {
        return $this->set('country', $country);
    }

    /**
     * @return string
     */
    public function getVatNumber(): string
    {
        return $this->get('vatNumber');
    }

    /**
     * @param string $vatNumber
     * @return $this
     */
    public function setVatNumber(string $vatNumber): static
    {
        return $this->set('vatNumber', $vatNumber);
    }

    /**
     * @return string
     */
    public function getCocNumber(): string
    {
        return $this->get('cocNumber');
    }

    /**
     * @param string $cocNumber
     * @return $this
     */
    public function setCocNumber(string $cocNumber): static
    {
        return $this->set('cocNumber', $cocNumber);
    }

    /**
     * @return string
     */
    public function getIndustry(): string
    {
        return $this->get('industry');
    }

    /**
     * @param string $industry
     * @return $this
     */
    public function setIndustry(string $industry): static
    {
        return $this->set('industry', $industry);
    }

    /**
     * @return array
     */
    public function getCurrency(): array
    {
        return $this->get('currency');
    }

    /**
     * @param array $currency
     * @return $this
     */
    public function setCurrency(array $currency): static
    {
        return $this->set('currency', $currency);
    }

    /**
     * @return Company
     */
    public function getCompany(): Company
    {
        return $this->relation('company.resource.embedded', Company::class);
    }


    /**
     * @return int
     */
    public function getCompanyId(): int
    {
        return $this->get('company.resource.id');
    }

    /**
     * @param Company $company
     * @return $this
     */
    public function setCompany(Company $company): static
    {
        $this->set('company', $company);

        return $this;
    }

    /**
     * @return ResourceCollection<Limit>
     */
    public function getLimits(): ResourceCollection
    {
        return $this->relation('limits.resource.embedded', Limit::class, true);
    }


    /**
     * @param ResourceCollection<Limit> $limits
     * @return $this
     */
    public function setLimits(ResourceCollection $limits): static
    {
        $this->set('limits', $limits);

        return $this;
    }

    /**
     * @return Javascript
     */
    public function getJavascript(): Javascript
    {
        return $this->relation('javascript.resource.embedded', Javascript::class);
    }


    /**
     * @return int
     */
    public function getJavascriptId(): int
    {
        return $this->get('javascript.resource.id');
    }

    /**
     * @param Javascript $javascript
     * @return $this
     */
    public function setJavascript(Javascript $javascript): static
    {
        $this->set('javascript', $javascript);

        return $this;
    }

    /**
     * @return Website
     */
    public function getWebsite(): Website
    {
        return $this->relation('website.resource.embedded', Website::class);
    }


    /**
     * @return int
     */
    public function getWebsiteId(): int
    {
        return $this->get('website.resource.id');
    }

    /**
     * @param Website $website
     * @return $this
     */
    public function setWebsite(Website $website): static
    {
        $this->set('website', $website);

        return $this;
    }

    /**
     * @return ResourceCollection<Script>
     */
    public function getScripts(): ResourceCollection
    {
        return $this->relation('scripts.resource.embedded', Script::class, true);
    }


    /**
     * @param ResourceCollection<Script> $scripts
     * @return $this
     */
    public function setScripts(ResourceCollection $scripts): static
    {
        $this->set('scripts', $scripts);

        return $this;
    }

    /**
     * @return ResourceCollection<Metafield>
     */
    public function getMetafields(): ResourceCollection
    {
        return $this->relation('metafields.resource.embedded', Metafield::class, true);
    }


    /**
     * @param ResourceCollection<Metafield> $metafields
     * @return $this
     */
    public function setMetafields(ResourceCollection $metafields): static
    {
        $this->set('metafields', $metafields);

        return $this;
    }

}
