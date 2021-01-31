<?php


namespace App\Filters\Car;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class FuelFilter extends FilterAbstract
{
    public function mappings()
    {
        return [
            'gasoline' => 'gasoline',
            'diesel' => 'diesel',
            'gas' => 'gas',
        ];
    }
    public function filter(Builder $builder, $value)
    {
        $value = $this->resolveFilterValue($value);

        if ($value === null) {

            return $builder;
        }

        return $builder->where('fuel', $value);
    }

}
