<?php

namespace Database\Factories;

use App\Models\Moto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Moto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'marca' => $this->faker->name,
            'modelo' => $this->faker->year($max = 'now'),
            'color' => $this->faker->colorName,
        ];
    }

}
