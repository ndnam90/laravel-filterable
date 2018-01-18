<?php

namespace Potato\Filterable;


trait Filterable
{
    /**
     * @param $query
     * @param QueryFilters $filters
     * @return mixed
     */
    public function scopeFilter($query, QueryFilters $filters)
    {
        return $filters->apply($query);
    }
}
