<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * Deliverydate
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/deliverydate
 */
class Deliverydate extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/deliverydates';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'deliverydate';


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
     * @return string|null
     */
    public function getInStockMessage(): ?string
    {
        return $this->get('inStockMessage');
    }

    /**
     * @param string|null $inStockMessage
     * @return $this
     */
    public function setInStockMessage(string $inStockMessage = null): static
    {
        return $this->set('inStockMessage', $inStockMessage);
    }

    /**
     * @return string|null
     */
    public function getOutStockMessage(): ?string
    {
        return $this->get('outStockMessage');
    }

    /**
     * @param string|null $outStockMessage
     * @return $this
     */
    public function setOutStockMessage(string $outStockMessage = null): static
    {
        return $this->set('outStockMessage', $outStockMessage);
    }

}
