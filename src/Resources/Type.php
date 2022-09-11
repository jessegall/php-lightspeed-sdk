<?php

namespace JesseGall\LightspeedSDK\Resources;

class Type extends Resource
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
     * @return Attribute[]
     */
    public function getAttributes(): array
    {
        return $this->mapTo('attributes', Attribute::class);
    }

    /**
     * @param Attribute[] $attributes
     * @return $this
     */
    public function setAttributes(array $attributes): static
    {
        $this->set('attributes', $attributes);

        return $this;
    }

}
