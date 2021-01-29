<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Filters\Car\FuelFilter;

class CarController extends Controller
{
    public function index(Request $request)
    {
        return Car::filter($request, $this->getFilters())->get();
    }

    protected function getFilters()
    {
        return [
            
            //
 
        ];
    }
}
