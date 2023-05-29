<?php

namespace Database\Seeders;

use App\Models\Optional;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $optionals = ['A/C', 'Radio', 'Speakers', 'Cruise control', 'Start and stop'];

        foreach ($optionals as $optional) {
            $newOptional = new Optional();
            $newOptional->name = $optional;
            $newOptional->save();
        }
    }
}
