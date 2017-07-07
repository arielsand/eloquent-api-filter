<?php

namespace Arielsand\MoloquentApiFilter\Traits;

use Jenssegers\Mongodb\Eloquent\Builder;
use Illuminate\Http\Request;
use Arielsand\MoloquentApiFilter\MoloquentApiFilter;

/**
 * Class FiltersMoloquentApi
 * @package Arielsand\MoloquentApiFilter
 */
trait FiltersMoloquentApi {

    /**
     * @param Request $request
     * @param Builder $query
     * @return Builder
     */
    protected function filterApiRequest(Request $request, Builder $query, array $mapping=null, $search=false)
    {
        $eaf = new MoloquentApiFilter($request, $query);
        return $eaf->filter($mapping, $search);
    }

}