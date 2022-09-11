<?php

namespace JesseGall\LightspeedSDK\Resources;

class Attribute extends Resource
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
     * @return string
     */
    public function getDefaultValue(): string
    {
        return $this->get('defaultValue');
    }

    /**
     * @param string $defaultValue
     * @return $this
     */
    public function setDefaultValue(string $defaultValue): static
    {
        return $this->set('defaultValue', $defaultValue);
    }

    /**
     * @return Type[]
     */
    public function getTypes(): array
    {
        return $this->mapTo('types', Type::class);
    }

    /**
     * @param Type[] $types
     * @return $this
     */
    public function setTypes(array $types): static
    {
        $this->set('types', $types);

        return $this;
    }

}
