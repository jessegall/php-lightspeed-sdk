<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class Account extends Resource
{


    /**
     * @return bool
     */
    public function getAppId(): bool
    {
        return $this->get('appId');
    }

    /**
     * @param bool $appId
     * @return $this
     */
    public function setAppId(bool $appId): static
    {
        return $this->set('appId', $appId);
    }

    /**
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->get('apiKey');
    }

    /**
     * @param string $apiKey
     * @return $this
     */
    public function setApiKey(string $apiKey): static
    {
        return $this->set('apiKey', $apiKey);
    }

    /**
     * @return Signout
     */
    public function getSignout(): Signout
    {
        return $this->relation('signout.resource.embedded', Signout::class);
    }


    /**
     * @return int
     */
    public function getSignoutId(): int
    {
        return $this->get('signout.resource.id');
    }

    /**
     * @param Signout $signout
     * @return $this
     */
    public function setSignout(Signout $signout): static
    {
        $this->set('signout', $signout);

        return $this;
    }

    /**
     * @return ResourceCollection<Permission>
     */
    public function getPermissions(): ResourceCollection
    {
        return $this->relation('permissions.resource.embedded', Permission::class);
    }


    /**
     * @param ResourceCollection<Permission> $permissions
     * @return $this
     */
    public function setPermissions(ResourceCollection $permissions): static
    {
        $this->set('permissions', $permissions);

        return $this;
    }

    /**
     * @return Ratelimit
     */
    public function getRatelimit(): Ratelimit
    {
        return $this->relation('ratelimit.resource.embedded', Ratelimit::class);
    }


    /**
     * @return int
     */
    public function getRatelimitId(): int
    {
        return $this->get('ratelimit.resource.id');
    }

    /**
     * @param Ratelimit $ratelimit
     * @return $this
     */
    public function setRatelimit(Ratelimit $ratelimit): static
    {
        $this->set('ratelimit', $ratelimit);

        return $this;
    }

    /**
     * @return ResourceCollection<Metafield>
     */
    public function getMetafields(): ResourceCollection
    {
        return $this->relation('metafields.resource.embedded', Metafield::class);
    }


    /**
     * @param ResourceCollection<Metafield> $metafields
     * @return $this
     */
    public function setMetafields(ResourceCollection $metafields): static
    {
        $this->set('metafields', $metafields);

        return $this;
    }

}
