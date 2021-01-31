<?php


namespace App\Http\ViewComposer;

use Illuminate\View\View;
use App\Filters\Car\CarFilters;



class CarFiltersComposer
{
    public function compose(View $view)
    {
        $view->with([

            'mappings' => CarFilters::mappings()
            
        ]);
    }
}
