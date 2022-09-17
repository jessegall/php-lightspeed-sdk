<?php

namespace JesseGall\LightspeedSDK\Resources;

class Dashboard extends Resource
{

    protected string $apiUrl = '/dashboards';

    protected string $handle = 'dashboard';

    /**
     * @return string
     */
    public function getDateMin(): string
    {
        return $this->get('dateMin');
    }

    /**
     * @param string $dateMin
     * @return $this
     */
    public function setDateMin(string $dateMin): static
    {
        return $this->set('dateMin', $dateMin);
    }

    /**
     * @return string
     */
    public function getDateMax(): string
    {
        return $this->get('dateMax');
    }

    /**
     * @param string $dateMax
     * @return $this
     */
    public function setDateMax(string $dateMax): static
    {
        return $this->set('dateMax', $dateMax);
    }

    /**
     * @return array
     */
    public function getTotals(): array
    {
        return $this->get('totals');
    }

    /**
     * @param array $totals
     * @return $this
     */
    public function setTotals(array $totals): static
    {
        return $this->set('totals', $totals);
    }

    /**
     * @return array
     */
    public function getPeriods(): array
    {
        return $this->get('periods');
    }

    /**
     * @param array $periods
     * @return $this
     */
    public function setPeriods(array $periods): static
    {
        return $this->set('periods', $periods);
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->get('type');
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type): static
    {
        return $this->set('type', $type);
    }

}
