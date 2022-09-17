<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * Supplier
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/supplier
 */
class Supplier extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/suppliers';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'supplier';


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
    public function getTitle(): ?string
    {
        return $this->get('title');
    }

    /**
     * @param string|null $title
     * @return $this
     */
    public function setTitle(string $title = null): static
    {
        return $this->set('title', $title);
    }

    /**
     * @return string|null
     */
    public function getAttention_of(): ?string
    {
        return $this->get('attention_of');
    }

    /**
     * @param string|null $attention_of
     * @return $this
     */
    public function setAttention_of(string $attention_of = null): static
    {
        return $this->set('attention_of', $attention_of);
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
    public function getExtension(): ?string
    {
        return $this->get('extension');
    }

    /**
     * @param string|null $extension
     * @return $this
     */
    public function setExtension(string $extension = null): static
    {
        return $this->set('extension', $extension);
    }

    /**
     * @return string|null
     */
    public function getZip_code(): ?string
    {
        return $this->get('zip_code');
    }

    /**
     * @param string|null $zip_code
     * @return $this
     */
    public function setZip_code(string $zip_code = null): static
    {
        return $this->set('zip_code', $zip_code);
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
    public function getCountry_id(): ?array
    {
        return $this->get('country_id');
    }

    /**
     * @param array|null $country_id
     * @return $this
     */
    public function setCountry_id(array $country_id = null): static
    {
        return $this->set('country_id', $country_id);
    }

}
