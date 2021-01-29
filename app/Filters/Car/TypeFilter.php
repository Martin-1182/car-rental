<?php


namespace App\Filters\Car;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class TypeFilter extends FilterAbstract
{
    public function mappings()
    {
        return [
            'cargo' => 'cargo',
            'van' => 'van',
            'passanger' => 'passanger',
        ];
    }
    public function filter(Builder $builder, $value)
    {
        $value = $this->resolveFilterValue($value);

        if ($value === null) {
            
            return $builder;
        }

        return $builder->where('type', $value);
    }

}