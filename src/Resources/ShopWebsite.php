<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * ShopWebsite
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/shopwebsite
 */
class ShopWebsite extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/shops/{id}/websites';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'shopWebsite';


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
    public function getTitle(): ?string
    {
        return $this->get('title');
    }

    /**
     * @param string|null $title
     * @return $this
     */
    public function setTitle(string $title = null): static
    {
        return $this->set('title', $title);
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->get('description');
    }

    /**
     * @param string|null $description
     * @return $this
     */
    public function setDescription(string $description = null): static
    {
        return $this->set('description', $description);
    }

    /**
     * @return string|null
     */
    public function getKeywords(): ?string
    {
        return $this->get('keywords');
    }

    /**
     * @param string|null $keywords
     * @return $this
     */
    public function setKeywords(string $keywords = null): static
    {
        return $this->set('keywords', $keywords);
    }

}
