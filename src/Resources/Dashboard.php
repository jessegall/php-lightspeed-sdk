<?php

namespace JesseGall\LightspeedSDK\Resources;

class Dashboard extends Resource
{


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
     * @return int
     */
    public function getVisitors(): int
    {
        return $this->get('visitors');
    }

    /**
     * @param int $visitors
     * @return $this
     */
    public function setVisitors(int $visitors): static
    {
        return $this->set('visitors', $visitors);
    }

    /**
     * @return int
     */
    public function getPageviews(): int
    {
        return $this->get('pageviews');
    }

    /**
     * @param int $pageviews
     * @return $this
     */
    public function setPageviews(int $pageviews): static
    {
        return $this->set('pageviews', $pageviews);
    }

    /**
     * @return int
     */
    public function getOrders(): int
    {
        return $this->get('orders');
    }

    /**
     * @param int $orders
     * @return $this
     */
    public function setOrders(int $orders): static
    {
        return $this->set('orders', $orders);
    }

    /**
     * @return float
     */
    public function getSalesExcl(): float
    {
        return $this->get('salesExcl');
    }

    /**
     * @param float $salesExcl
     * @return $this
     */
    public function setSalesExcl(float $salesExcl): static
    {
        return $this->set('salesExcl', $salesExcl);
    }

    /**
     * @return float
     */
    public function getSalesIncl(): float
    {
        return $this->get('salesIncl');
    }

    /**
     * @param float $salesIncl
     * @return $this
     */
    public function setSalesIncl(float $salesIncl): static
    {
        return $this->set('salesIncl', $salesIncl);
    }

    /**
     * @return int
     */
    public function getPaidExcl(): int
    {
        return $this->get('paidExcl');
    }

    /**
     * @param int $paidExcl
     * @return $this
     */
    public function setPaidExcl(int $paidExcl): static
    {
        return $this->set('paidExcl', $paidExcl);
    }

    /**
     * @return int
     */
    public function getPaidIncl(): int
    {
        return $this->get('paidIncl');
    }

    /**
     * @param int $paidIncl
     * @return $this
     */
    public function setPaidIncl(int $paidIncl): static
    {
        return $this->set('paidIncl', $paidIncl);
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
    public function getDate(): string
    {
        return $this->get('date');
    }

    /**
     * @param string $date
     * @return $this
     */
    public function setDate(string $date): static
    {
        return $this->set('date', $date);
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
