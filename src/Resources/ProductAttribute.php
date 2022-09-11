<?php

namespace JesseGall\LightspeedSDK\Resources;

class ProductAttribute extends Resource
{


    /**
     * @return bool
     */
    public function getId(): bool
    {
        return $this->get('id');
    }

    /**
     * @param bool $id
     * @return $this
     */
    public function setId(bool $id): static
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

    /**
     * @return array
     */
    public function getResource(): array
    {
        return $this->get('resource');
    }

    /**
     * @param array $resource
     * @return $this
     */
    public function setResource(array $resource): static
    {
        return $this->set('resource', $resource);
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->get('url');
    }

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl(string $url): static
    {
        return $this->set('url', $url);
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->get('link');
    }

    /**
     * @param string $link
     * @return $this
     */
    public function setLink(string $link): static
    {
        return $this->set('link', $link);
    }

}
