<?php

namespace JesseGall\LightspeedSDK\Resources;

class Tax extends Resource
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
     * @return bool
     */
    public function getIsDefault(): bool
    {
        return $this->get('isDefault');
    }

    /**
     * @param bool $isDefault
     * @return $this
     */
    public function setIsDefault(bool $isDefault): static
    {
        return $this->set('isDefault', $isDefault);
    }

    /**
     * @return float
     */
    public function getRate(): float
    {
        return $this->get('rate');
    }

    /**
     * @param float $rate
     * @return $this
     */
    public function setRate(float $rate): static
    {
        return $this->set('rate', $rate);
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

}
