<?php

namespace JesseGall\LightspeedSDK\Resources;

class ProductAttribute extends Resource
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
    public function getValue(): string
    {
        return $this->get('value');
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setValue(string $value): static
    {
        return $this->set('value', $value);
    }

    /**
     * @return array
     */
    public function getAttribute(): array
    {
        return $this->get('attribute');
    }

    /**
     * @param array $attribute
     * @return $this
     */
    public function setAttribute(array $attribute): static
    {
        return $this->set('attribute', $attribute);
    }

}
