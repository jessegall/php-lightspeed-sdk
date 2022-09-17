<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * Dashboard
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/dashboard
 */
class Dashboard extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/dashboards';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'dashboard';


    /**
     * @return string|null
     */
    public function getDateMin(): ?string
    {
        return $this->get('dateMin');
    }

    /**
     * @param string|null $dateMin
     * @return $this
     */
    public function setDateMin(string $dateMin = null): static
    {
        return $this->set('dateMin', $dateMin);
    }

    /**
     * @return string|null
     */
    public function getDateMax(): ?string
    {
        return $this->get('dateMax');
    }

    /**
     * @param string|null $dateMax
     * @return $this
     */
    public function setDateMax(string $dateMax = null): static
    {
        return $this->set('dateMax', $dateMax);
    }

    /**
     * @return array|null
     */
    public function getTotals(): ?array
    {
        return $this->get('totals');
    }

    /**
     * @param array|null $totals
     * @return $this
     */
    public function setTotals(array $totals = null): static
    {
        return $this->set('totals', $totals);
    }

    /**
     * @return array|null
     */
    public function getPeriods(): ?array
    {
        return $this->get('periods');
    }

    /**
     * @param array|null $periods
     * @return $this
     */
    public function setPeriods(array $periods = null): static
    {
        return $this->set('periods', $periods);
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->get('type');
    }

    /**
     * @param string|null $type
     * @return $this
     */
    public function setType(string $type = null): static
    {
        return $this->set('type', $type);
    }

}
