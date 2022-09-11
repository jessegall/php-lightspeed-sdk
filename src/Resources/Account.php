<?php

namespace JesseGall\LightspeedSDK\Resources;

class Account extends Resource
{


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->get('id');
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id): static
    {
        return $this->set('id', $id);
    }

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
        return $this->mapTo('signout', Signout::class);
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
     * @return Permission[]
     */
    public function getPermissions(): array
    {
        return $this->mapTo('permissions', Permission::class);
    }

    /**
     * @param Permission[] $permissions
     * @return $this
     */
    public function setPermissions(array $permissions): static
    {
        $this->set('permissions', $permissions);

        return $this;
    }

    /**
     * @return Ratelimit
     */
    public function getRatelimit(): Ratelimit
    {
        return $this->mapTo('ratelimit', Ratelimit::class);
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
     * @return Metafield[]
     */
    public function getMetafields(): array
    {
        return $this->mapTo('metafields', Metafield::class);
    }

    /**
     * @param Metafield[] $metafields
     * @return $this
     */
    public function setMetafields(array $metafields): static
    {
        $this->set('metafields', $metafields);

        return $this;
    }

}
