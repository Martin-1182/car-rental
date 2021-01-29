<?php


namespace App\Filters\Car;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class FuelFilter extends FilterAbstract
{
    public function filter(Builder $builder, $value)
    {
        return $builder;
    }
}