<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * AccountRatelimit
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/accountratelimit
 */
class AccountRatelimit extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/accounts/{id}/ratelimits';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'accountRatelimit';


    /**
     * @return array|null
     */
    public function getLimit5Min(): ?array
    {
        return $this->get('limit5Min');
    }

    /**
     * @param array|null $limit5Min
     * @return $this
     */
    public function setLimit5Min(array $limit5Min = null): static
    {
        return $this->set('limit5Min', $limit5Min);
    }

    /**
     * @return array|null
     */
    public function getLimitHour(): ?array
    {
        return $this->get('limitHour');
    }

    /**
     * @param array|null $limitHour
     * @return $this
     */
    public function setLimitHour(array $limitHour = null): static
    {
        return $this->set('limitHour', $limitHour);
    }

    /**
     * @return array|null
     */
    public function getLimitDay(): ?array
    {
        return $this->get('limitDay');
    }

    /**
     * @param array|null $limitDay
     * @return $this
     */
    public function setLimitDay(array $limitDay = null): static
    {
        return $this->set('limitDay', $limitDay);
    }

}
