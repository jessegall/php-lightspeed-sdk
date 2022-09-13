<?php

namespace JesseGall\LightspeedSDK\Resources;

class Language extends Resource
{

    protected string $url = '/languages';


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
     * @return bool
     */
    public function getIsDefault(): bool
    {
        return $this->get('isDefault');
    }

    /**
     * @param bool $isDefault
     * @return $this
     */
    public function setIsDefault(bool $isDefault): static
    {
        return $this->set('isDefault', $isDefault);
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->get('code');
    }

    /**
     * @param string $code
     * @return $this
     */
    public function setCode(string $code): static
    {
        return $this->set('code', $code);
    }

    /**
     * @return string
     */
    public function getLocale(): string
    {
        return $this->get('locale');
    }

    /**
     * @param string $locale
     * @return $this
     */
    public function setLocale(string $locale): static
    {
        return $this->set('locale', $locale);
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
