<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Auto;

class AutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Auto::create([
            'marca' => 'Fiat',
            'modelo' => '2010'
        ]);
    }
}
