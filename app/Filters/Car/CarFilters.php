<?php


namespace App\Filters\Car;


use Illuminate\Http\Request;
use App\Filters\FiltersAbstract;
use Illuminate\Database\Eloquent\Builder;
use App\Filters\Car\{AccessFilter, FuelFilter, TypeFilter};



class CarFilters extends FiltersAbstract
{
    protected $filters = [

        'access' => AccessFilter::class,
        'fuel' => FuelFilter::class,
        'type' => TypeFilter::class,

    ];


    public static function mappings()
    {
        return [
            'access' => [
                'free' => 'Free',
                'unavailable' => 'Notavailable',
            ],
            'fuel' => [
                'gasoline' => 'Gasoline',
                'diesel' => 'Diesel',
                'gas' => 'Gas',
            ],
            'type' => [
                'passanger' => 'Passanger',
                'van' => 'Van',
                'cargo' => 'Cargo',
            ],
        ];
    }
}
