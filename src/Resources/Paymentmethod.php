<?php

namespace JesseGall\LightspeedSDK\Resources;

class Paymentmethod extends Resource
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
    public function getKey(): string
    {
        return $this->get('key');
    }

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key): static
    {
        return $this->set('key', $key);
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
