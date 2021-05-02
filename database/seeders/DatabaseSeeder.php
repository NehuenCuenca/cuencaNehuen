<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Auto;
use App\Models\Moto;
use App\Models\User;
use App\Models\Item;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AutoSeeder::class);
        \App\Models\Moto::factory(99)->create();
        \App\Models\User::factory(99)->create();
        \App\Models\Item::factory(50)->create();
    }
}
