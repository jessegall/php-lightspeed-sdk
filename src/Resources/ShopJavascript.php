<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * ShopJavascript
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/shopjavascript
 */
class ShopJavascript extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/shops/{id}/javascripts';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'shopJavascript';


    /**
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->get('isActive');
    }

    /**
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive(bool $isActive = null): static
    {
        return $this->set('isActive', $isActive);
    }

    /**
     * @return string|null
     */
    public function getScript(): ?string
    {
        return $this->get('script');
    }

    /**
     * @param string|null $script
     * @return $this
     */
    public function setScript(string $script = null): static
    {
        return $this->set('script', $script);
    }

}
