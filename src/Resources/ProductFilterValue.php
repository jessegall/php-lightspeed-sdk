<?php

namespace JesseGall\LightspeedSDK\Resources;

class ProductFilterValue extends Resource
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
     * @return Filter
     */
    public function getFilter(): Filter
    {
        return $this->mapTo('filter', Filter::class);
    }

    /**
     * @param Filter $filter
     * @return $this
     */
    public function setFilter(Filter $filter): static
    {
        $this->set('filter', $filter);

        return $this;
    }

    /**
     * @return Filtervalue
     */
    public function getFiltervalue(): Filtervalue
    {
        return $this->mapTo('filtervalue', Filtervalue::class);
    }

    /**
     * @param Filtervalue $filtervalue
     * @return $this
     */
    public function setFiltervalue(Filtervalue $filtervalue): static
    {
        $this->set('filtervalue', $filtervalue);

        return $this;
    }

}
