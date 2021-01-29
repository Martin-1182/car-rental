<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'brand' => $this->faker->text(10),
            'slug' => $this->faker->slug,
            'occupied' => rand(0, 1),
            'price' => rand(100, 800),
            'horse_power' => rand(1000, 3000),
            'kilometers' => $this->faker->numberBetween($min = 10000, $max = 100000),
            'fuel' => ['gasoline', 'diesel', 'gas'][rand(0, 2)],
            'type' => ['cargo', 'passanger', 'van'][rand(0, 2)],
        ];
    }
}
