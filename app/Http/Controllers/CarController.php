<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Filters\Car\FuelFilter;

class CarController extends Controller
{
    public function index(Request $request)
    {
        $cars =  Car::filter($request)->paginate(6);

        return view('cars.index', compact('cars'));
    }

    public function show(Car $car)
    {

        return view('cars.show', [

            'car' => $car

        ]);

    }

}
