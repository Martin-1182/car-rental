<?php

namespace App\Models;

use App\Filters\Car\CarFilters;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class Car extends Model
{
    use HasFactory;


    public function getFormattedBrandAttribute()
    {
        return ucfirst($this->brand);
    }

    public function getFormattedTypeAttribute()
    {
        return strtoupper($this->type);
    }

    public function getFormattedFuelAttribute()
    {
        return strtoupper($this->fuel);
    }

    public function getFormattedAccessAttribute()
    {
        return strtoupper($this->occupied === 0 ? 'Free' : 'Occupied');
    }

    public function scopeFilter(Builder $builder, $request, array $filters = [])
    {
        return (new CarFilters($request))->add($filters)->filter($builder);
    }
}
