<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * Language
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/language
 */
class Language extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/languages';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'language';


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
     * @return bool|null
     */
    public function getIsDefault(): ?bool
    {
        return $this->get('isDefault');
    }

    /**
     * @param bool|null $isDefault
     * @return $this
     */
    public function setIsDefault(bool $isDefault = null): static
    {
        return $this->set('isDefault', $isDefault);
    }

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->get('code');
    }

    /**
     * @param string|null $code
     * @return $this
     */
    public function setCode(string $code = null): static
    {
        return $this->set('code', $code);
    }

    /**
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->get('locale');
    }

    /**
     * @param string|null $locale
     * @return $this
     */
    public function setLocale(string $locale = null): static
    {
        return $this->set('locale', $locale);
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
