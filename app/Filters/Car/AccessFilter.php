<?php


namespace App\Filters\Car;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;


class AccessFilter  extends FilterAbstract
{
    public function mappings()
    {
        return [
            'unavailable' => false,
            'free' => true,
        ];
    }
    public function filter(Builder $builder, $value)
    {
       $value = $this->resolveFilterValue($value);

       if ($value === null) {
          
           return $builder;

       }

       return $builder->where('occupied', $value);
    }
}