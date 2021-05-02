<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'UnidadDeMedida' => $this->faker->lexify('???'),
            'cantidadMetros' => $this->faker->randomDigitNot(0),
            'costoUnidad' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 200, $max = 10000),
            'costoManoDeObra' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 200, $max = 10000),
            //'total' => $this->sum(\DB::raw('costoUnidad + costoManoDeObra')), 
            'total' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 200, $max = 10000),
        ];
    }

}
