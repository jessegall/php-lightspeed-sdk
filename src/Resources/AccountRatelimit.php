<?php

namespace JesseGall\LightspeedSDK\Resources;

class AccountRatelimit extends Resource
{


    /**
     * @return array
     */
    public function getLimit5Min(): array
    {
        return $this->get('limit5Min');
    }

    /**
     * @param array $limit5Min
     * @return $this
     */
    public function setLimit5Min(array $limit5Min): static
    {
        return $this->set('limit5Min', $limit5Min);
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->get('limit');
    }

    /**
     * @param int $limit
     * @return $this
     */
    public function setLimit(int $limit): static
    {
        return $this->set('limit', $limit);
    }

    /**
     * @return int
     */
    public function getRemaining(): int
    {
        return $this->get('remaining');
    }

    /**
     * @param int $remaining
     * @return $this
     */
    public function setRemaining(int $remaining): static
    {
        return $this->set('remaining', $remaining);
    }

    /**
     * @return int
     */
    public function getReset(): int
    {
        return $this->get('reset');
    }

    /**
     * @param int $reset
     * @return $this
     */
    public function setReset(int $reset): static
    {
        return $this->set('reset', $reset);
    }

    /**
     * @return string
     */
    public function getResetTime(): string
    {
        return $this->get('resetTime');
    }

    /**
     * @param string $resetTime
     * @return $this
     */
    public function setResetTime(string $resetTime): static
    {
        return $this->set('resetTime', $resetTime);
    }

    /**
     * @return array
     */
    public function getLimitHour(): array
    {
        return $this->get('limitHour');
    }

    /**
     * @param array $limitHour
     * @return $this
     */
    public function setLimitHour(array $limitHour): static
    {
        return $this->set('limitHour', $limitHour);
    }

    /**
     * @return array
     */
    public function getLimitDay(): array
    {
        return $this->get('limitDay');
    }

    /**
     * @param array $limitDay
     * @return $this
     */
    public function setLimitDay(array $limitDay): static
    {
        return $this->set('limitDay', $limitDay);
    }

}
