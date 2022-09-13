<?php

namespace JesseGall\LightspeedSDK\Resources;

class ShopCompany extends Resource
{

    protected string $url = '/shops/{id}/companies';


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->get('name');
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): static
    {
        return $this->set('name', $name);
    }

    /**
     * @return mixed
     */
    public function getOwner(): mixed
    {
        return $this->get('owner');
    }

    /**
     * @param mixed $owner
     * @return $this
     */
    public function setOwner(mixed $owner): static
    {
        return $this->set('owner', $owner);
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
     * @return mixed
     */
    public function getCocLocation(): mixed
    {
        return $this->get('cocLocation');
    }

    /**
     * @param mixed $cocLocation
     * @return $this
     */
    public function setCocLocation(mixed $cocLocation): static
    {
        return $this->set('cocLocation', $cocLocation);
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
    public function getBankName(): string
    {
        return $this->get('bankName');
    }

    /**
     * @param string $bankName
     * @return $this
     */
    public function setBankName(string $bankName): static
    {
        return $this->set('bankName', $bankName);
    }

    /**
     * @return string
     */
    public function getBankAccountHolder(): string
    {
        return $this->get('bankAccountHolder');
    }

    /**
     * @param string $bankAccountHolder
     * @return $this
     */
    public function setBankAccountHolder(string $bankAccountHolder): static
    {
        return $this->set('bankAccountHolder', $bankAccountHolder);
    }

    /**
     * @return string
     */
    public function getBankAccountNumber(): string
    {
        return $this->get('bankAccountNumber');
    }

    /**
     * @param string $bankAccountNumber
     * @return $this
     */
    public function setBankAccountNumber(string $bankAccountNumber): static
    {
        return $this->set('bankAccountNumber', $bankAccountNumber);
    }

    /**
     * @return string
     */
    public function getBankLocation(): string
    {
        return $this->get('bankLocation');
    }

    /**
     * @param string $bankLocation
     * @return $this
     */
    public function setBankLocation(string $bankLocation): static
    {
        return $this->set('bankLocation', $bankLocation);
    }

    /**
     * @return string
     */
    public function getBankCode(): string
    {
        return $this->get('bankCode');
    }

    /**
     * @param string $bankCode
     * @return $this
     */
    public function setBankCode(string $bankCode): static
    {
        return $this->set('bankCode', $bankCode);
    }

    /**
     * @return string
     */
    public function getBankIban(): string
    {
        return $this->get('bankIban');
    }

    /**
     * @param string $bankIban
     * @return $this
     */
    public function setBankIban(string $bankIban): static
    {
        return $this->set('bankIban', $bankIban);
    }

    /**
     * @return string
     */
    public function getBankSwift(): string
    {
        return $this->get('bankSwift');
    }

    /**
     * @param string $bankSwift
     * @return $this
     */
    public function setBankSwift(string $bankSwift): static
    {
        return $this->set('bankSwift', $bankSwift);
    }

}
