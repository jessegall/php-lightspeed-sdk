<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * Paymentmethod
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/paymentmethod
 */
class Paymentmethod extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/paymentmethods';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'paymentmethod';


    /**
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->get('key');
    }

    /**
     * @param string|null $key
     * @return $this
     */
    public function setKey(string $key = null): static
    {
        return $this->set('key', $key);
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

}
