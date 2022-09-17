<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * ProductFilterValue
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/productfiltervalue
 */
class ProductFilterValue extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/products/{id}/filters/{id}/values';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'productFilterValue';


    /**
     * @return Filter|null
     */
    public function getFilter(): ?Filter
    {
        return $this->relation('filter.resource.embedded', Filter::class);
    }


    /**
     * @return int|null
     */
    public function getFilterId(): ?int
    {
        return $this->get('filter.resource.id');
    }

    /**
     * @param Filter|null $filter
     * @return $this
     */
    public function setFilter(Filter $filter = null): static
    {
        $this->set('filter.resource.embedded', $filter);

        return $this;
    }

    /**
     * @return FilterValue|null
     */
    public function getFiltervalue(): ?FilterValue
    {
        return $this->relation('filtervalue.resource.embedded', FilterValue::class);
    }


    /**
     * @return int|null
     */
    public function getFiltervalueId(): ?int
    {
        return $this->get('filtervalue.resource.id');
    }

    /**
     * @param FilterValue|null $filtervalue
     * @return $this
     */
    public function setFiltervalue(FilterValue $filtervalue = null): static
    {
        $this->set('filtervalue.resource.embedded', $filtervalue);

        return $this;
    }

}
