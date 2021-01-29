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

    public function scopeFilter(Builder $builder, $request, array $filters = [])
    {
        return (new CarFilters($request))->add($filters)->filter($builder);
    }
}
