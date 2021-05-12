<?php

namespace Database\Factories;

use App\Models\Tienda;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TiendaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tienda::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->company,
            'ubicacion' => $this->faker->streetAddress,
            'telefono' => $this->faker->tollFreePhoneNumber,
            'horarioCierre' => $this->faker->time($format = 'H:i:s', $max = 'now'),

        ];
    }
}
