<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class dataUploadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 10; $i++){
            DB::table('forms')->insert([
            'nama' => $faker->name,
            'kelas' => $faker->name,
            'nama_rekening' => $faker->name,
            'nomor_rekening' => $faker->name,
            'image' => $faker->name
            ]);
        }
    }
}
