<?php

namespace JesseGall\LightspeedSDK\Resources;

class ShopJavascript extends Resource
{

    protected string $endpoint = '/shops/{id}/javascripts';

    protected string $handle = 'shopJavascript';

    /**
     * @return bool
     */
    public function getIsActive(): bool
    {
        return $this->get('isActive');
    }

    /**
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive(bool $isActive): static
    {
        return $this->set('isActive', $isActive);
    }

    /**
     * @return string
     */
    public function getScript(): string
    {
        return $this->get('script');
    }

    /**
     * @param string $script
     * @return $this
     */
    public function setScript(string $script): static
    {
        return $this->set('script', $script);
    }

}
