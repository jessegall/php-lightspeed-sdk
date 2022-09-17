<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * ShopCompany
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/shopcompany
 */
class ShopCompany extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/shops/{id}/companies';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'shopCompany';


    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->get('name');
    }

    /**
     * @param string|null $name
     * @return $this
     */
    public function setName(string $name = null): static
    {
        return $this->set('name', $name);
    }

    /**
     * @return mixed|null
     */
    public function getOwner(): mixed
    {
        return $this->get('owner');
    }

    /**
     * @param mixed|null $owner
     * @return $this
     */
    public function setOwner(mixed $owner = null): static
    {
        return $this->set('owner', $owner);
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
     * @return mixed|null
     */
    public function getCocLocation(): mixed
    {
        return $this->get('cocLocation');
    }

    /**
     * @param mixed|null $cocLocation
     * @return $this
     */
    public function setCocLocation(mixed $cocLocation = null): static
    {
        return $this->set('cocLocation', $cocLocation);
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
    public function getBankName(): ?string
    {
        return $this->get('bankName');
    }

    /**
     * @param string|null $bankName
     * @return $this
     */
    public function setBankName(string $bankName = null): static
    {
        return $this->set('bankName', $bankName);
    }

    /**
     * @return string|null
     */
    public function getBankAccountHolder(): ?string
    {
        return $this->get('bankAccountHolder');
    }

    /**
     * @param string|null $bankAccountHolder
     * @return $this
     */
    public function setBankAccountHolder(string $bankAccountHolder = null): static
    {
        return $this->set('bankAccountHolder', $bankAccountHolder);
    }

    /**
     * @return string|null
     */
    public function getBankAccountNumber(): ?string
    {
        return $this->get('bankAccountNumber');
    }

    /**
     * @param string|null $bankAccountNumber
     * @return $this
     */
    public function setBankAccountNumber(string $bankAccountNumber = null): static
    {
        return $this->set('bankAccountNumber', $bankAccountNumber);
    }

    /**
     * @return string|null
     */
    public function getBankLocation(): ?string
    {
        return $this->get('bankLocation');
    }

    /**
     * @param string|null $bankLocation
     * @return $this
     */
    public function setBankLocation(string $bankLocation = null): static
    {
        return $this->set('bankLocation', $bankLocation);
    }

    /**
     * @return string|null
     */
    public function getBankCode(): ?string
    {
        return $this->get('bankCode');
    }

    /**
     * @param string|null $bankCode
     * @return $this
     */
    public function setBankCode(string $bankCode = null): static
    {
        return $this->set('bankCode', $bankCode);
    }

    /**
     * @return string|null
     */
    public function getBankIban(): ?string
    {
        return $this->get('bankIban');
    }

    /**
     * @param string|null $bankIban
     * @return $this
     */
    public function setBankIban(string $bankIban = null): static
    {
        return $this->set('bankIban', $bankIban);
    }

    /**
     * @return string|null
     */
    public function getBankSwift(): ?string
    {
        return $this->get('bankSwift');
    }

    /**
     * @param string|null $bankSwift
     * @return $this
     */
    public function setBankSwift(string $bankSwift = null): static
    {
        return $this->set('bankSwift', $bankSwift);
    }

}
