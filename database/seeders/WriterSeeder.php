<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Writer;
use Faker\Factory as Faker;
use App\Models\Category;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $categories = Category::all();

        for ($i = 0; $i < 2; $i++) {
            Writer::create([
                'name' => $faker->name(),
                'specialization' => $categories[$i]->name
                ]);
        }
    }
}
