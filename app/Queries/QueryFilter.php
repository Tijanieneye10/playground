<?php

namespace App\Queries;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Request;

class QueryFilter
{
    protected Builder $builder;

    public function apply(Builder $builder): Builder
    {
        $this->builder = $builder;

        foreach (request()->all() as $key => $value) {
            if(method_exists($this, $key)) {
               $this->$key($value);
            }
        }
        return $this->builder;
    }
}
