<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Model

use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Train::truncate();

        for($i=0; $i < 10; $i++){
            $train = new Train();
            $train->company = fake()->company();
            $train->dep_station = fake()->city();
            $train->arr_station = fake()->city();
            $train->dep_time = fake()->time();
            $train->arr_time = fake()->time();
            $train->code = strtoupper(fake()->bothify('????####'));
            $train->carriages_number = rand(2,7);
            $train->on_time = fake()->boolean(70);
            $train->canceled = fake()->boolean(30);
            $train->save();
        }
    }
}
