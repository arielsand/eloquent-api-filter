<?php

namespace Arielsand\EloquentApiFilter\Traits;

use Jenssegers\Mongodb\Eloquent\Builder;
use Illuminate\Http\Request;
use Arielsand\EloquentApiFilter\EloquentApiFilter;

/**
 * Class FiltersEloquentApi
 * @package Matthenning\EloquentApiFilter
 */
trait FiltersEloquentApi {

    /**
     * @param Request $request
     * @param Builder $query
     * @return Builder
     */
    protected function filterApiRequest(Request $request, Builder $query, array $mapping=null, $search=false)
    {
        $eaf = new EloquentApiFilter($request, $query);
        return $eaf->filter($mapping, $search);
    }

}