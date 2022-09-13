<?php

namespace JesseGall\LightspeedSDK\Resources;

class ProductFilterValue extends Resource
{

    protected string $url = '/products/{id}/filters/{id}/values';


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
        $this->set('filter.resource.embedded', $filter);

        return $this;
    }

    /**
     * @return FilterValue
     */
    public function getFiltervalue(): FilterValue
    {
        return $this->relation('filtervalue.resource.embedded', FilterValue::class);
    }


    /**
     * @return int
     */
    public function getFiltervalueId(): int
    {
        return $this->get('filtervalue.resource.id');
    }

    /**
     * @param FilterValue $filtervalue
     * @return $this
     */
    public function setFiltervalue(FilterValue $filtervalue): static
    {
        $this->set('filtervalue.resource.embedded', $filtervalue);

        return $this;
    }

}
