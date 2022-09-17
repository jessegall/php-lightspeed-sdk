<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Account
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/account
 */
class Account extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/accounts';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'account';


    /**
     * @return bool|null
     */
    public function getAppId(): ?bool
    {
        return $this->get('appId');
    }

    /**
     * @param bool|null $appId
     * @return $this
     */
    public function setAppId(bool $appId = null): static
    {
        return $this->set('appId', $appId);
    }

    /**
     * @return string|null
     */
    public function getApiKey(): ?string
    {
        return $this->get('apiKey');
    }

    /**
     * @param string|null $apiKey
     * @return $this
     */
    public function setApiKey(string $apiKey = null): static
    {
        return $this->set('apiKey', $apiKey);
    }

    /**
     * @return ResourceCollection<AccountPermissions>|null
     */
    public function getPermissions(): ?ResourceCollection
    {
        return $this->relation('permissions.resource.embedded', AccountPermissions::class, true);
    }

    /**
     * @param ResourceCollection<AccountPermissions>|null $permissions
     * @return $this
     */
    public function setPermissions(ResourceCollection $permissions = null): static
    {
        $this->set('permissions.resource.embedded', $permissions);

        return $this;
    }

    /**
     * @return ResourceCollection<AccountRatelimit>|null
     */
    public function getRatelimit(): ?ResourceCollection
    {
        return $this->relation('ratelimit.resource.embedded', AccountRatelimit::class, true);
    }


    /**
     * @param ResourceCollection<AccountRatelimit>|null $ratelimit
     * @return $this
     */
    public function setRatelimit(ResourceCollection $ratelimit = null): static
    {
        $this->set('ratelimit.resource.embedded', $ratelimit);

        return $this;
    }

    /**
     * @return ResourceCollection<AccountMetafield>|null
     */
    public function getMetafields(): ?ResourceCollection
    {
        return $this->relation('metafields.resource.embedded', AccountMetafield::class, true);
    }


    /**
     * @param ResourceCollection<AccountMetafield>|null $metafields
     * @return $this
     */
    public function setMetafields(ResourceCollection $metafields = null): static
    {
        $this->set('metafields.resource.embedded', $metafields);

        return $this;
    }

}
