<?php

namespace JesseGall\LightspeedSDK\Resources;

class ProductFilterValue extends Resource
{


    /**
     * @return Filter
     */
    public function getFilter(): Filter
    {
        return $this->relation('filter.resource.embedded', Filter::class);
    }


    /**
     * @return int
     */
    public function getFilterId(): int
    {
        return $this->get('filter.resource.id');
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
        return $this->relation('filtervalue.resource.embedded', Filtervalue::class);
    }


    /**
     * @return int
     */
    public function getFiltervalueId(): int
    {
        return $this->get('filtervalue.resource.id');
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
