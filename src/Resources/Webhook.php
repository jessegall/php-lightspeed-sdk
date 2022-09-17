<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * Webhook
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/webhook
 */
class Webhook extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/webhooks';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'webhook';


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
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->get('isActive');
    }

    /**
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive(bool $isActive = null): static
    {
        return $this->set('isActive', $isActive);
    }

    /**
     * @return string|null
     */
    public function getItemGroup(): ?string
    {
        return $this->get('itemGroup');
    }

    /**
     * @param string|null $itemGroup
     * @return $this
     */
    public function setItemGroup(string $itemGroup = null): static
    {
        return $this->set('itemGroup', $itemGroup);
    }

    /**
     * @return string|null
     */
    public function getItemAction(): ?string
    {
        return $this->get('itemAction');
    }

    /**
     * @param string|null $itemAction
     * @return $this
     */
    public function setItemAction(string $itemAction = null): static
    {
        return $this->set('itemAction', $itemAction);
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
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->get('format');
    }

    /**
     * @param string|null $format
     * @return $this
     */
    public function setFormat(string $format = null): static
    {
        return $this->set('format', $format);
    }

    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->get('address');
    }

    /**
     * @param string|null $address
     * @return $this
     */
    public function setAddress(string $address = null): static
    {
        return $this->set('address', $address);
    }

}
