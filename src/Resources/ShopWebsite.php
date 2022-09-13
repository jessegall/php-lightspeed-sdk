<?php

namespace JesseGall\LightspeedSDK\Resources;

class ShopWebsite extends Resource
{

    protected string $url = '/shops/{id}/websites';


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
    public function getDescription(): string
    {
        return $this->get('description');
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description): static
    {
        return $this->set('description', $description);
    }

    /**
     * @return string
     */
    public function getKeywords(): string
    {
        return $this->get('keywords');
    }

    /**
     * @param string $keywords
     * @return $this
     */
    public function setKeywords(string $keywords): static
    {
        return $this->set('keywords', $keywords);
    }

}
