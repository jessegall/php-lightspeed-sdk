<?php

namespace JesseGall\LightspeedSDK\Resources;

class Deliverydate extends Resource
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
     * @return string
     */
    public function getInStockMessage(): string
    {
        return $this->get('inStockMessage');
    }

    /**
     * @param string $inStockMessage
     * @return $this
     */
    public function setInStockMessage(string $inStockMessage): static
    {
        return $this->set('inStockMessage', $inStockMessage);
    }

    /**
     * @return string
     */
    public function getOutStockMessage(): string
    {
        return $this->get('outStockMessage');
    }

    /**
     * @param string $outStockMessage
     * @return $this
     */
    public function setOutStockMessage(string $outStockMessage): static
    {
        return $this->set('outStockMessage', $outStockMessage);
    }

}
