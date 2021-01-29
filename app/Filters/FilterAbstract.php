<?php


namespace App\Filters;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Builder;


abstract class FilterAbstract
{
    abstract public function filter(Builder $builder, $value);

    public function mappings()
    {
        return [];
    }

    protected function resolveFilterValue($value)
    {
        return Arr::get($this->mappings(), $value);
    }
}