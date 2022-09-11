<?php

namespace JesseGall\LightspeedSDK\Resources;

class Supplier extends Resource
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
    public function getTitle(): string
    {
        return $this->get('title');
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title): static
    {
        return $this->set('title', $title);
    }

    /**
     * @return string
     */
    public function getAttention_of(): string
    {
        return $this->get('attention_of');
    }

    /**
     * @param string $attention_of
     * @return $this
     */
    public function setAttention_of(string $attention_of): static
    {
        return $this->set('attention_of', $attention_of);
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
    public function getExtension(): string
    {
        return $this->get('extension');
    }

    /**
     * @param string $extension
     * @return $this
     */
    public function setExtension(string $extension): static
    {
        return $this->set('extension', $extension);
    }

    /**
     * @return string
     */
    public function getZip_code(): string
    {
        return $this->get('zip_code');
    }

    /**
     * @param string $zip_code
     * @return $this
     */
    public function setZip_code(string $zip_code): static
    {
        return $this->set('zip_code', $zip_code);
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
    public function getCountry_id(): array
    {
        return $this->get('country_id');
    }

    /**
     * @param array $country_id
     * @return $this
     */
    public function setCountry_id(array $country_id): static
    {
        return $this->set('country_id', $country_id);
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->get('code');
    }

    /**
     * @param string $code
     * @return $this
     */
    public function setCode(string $code): static
    {
        return $this->set('code', $code);
    }

    /**
     * @return string
     */
    public function getCode3(): string
    {
        return $this->get('code3');
    }

    /**
     * @param string $code3
     * @return $this
     */
    public function setCode3(string $code3): static
    {
        return $this->set('code3', $code3);
    }

}
