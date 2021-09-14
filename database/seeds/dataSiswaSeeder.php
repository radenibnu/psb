<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class dataSiswaSeeder extends Seeder
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
            DB::table('datasiswas')->insert([
                'nik' => $faker->name,
                'created_at' => $faker->dateTime,
                'nama' => $faker->name,
                'ttl' => $faker->dateTime,
                'jenis_kelamin' => $faker->name,
                'asal_tk' => $faker->name,
                'tanggal_lulus' => $faker->date,
                'kk' => $faker->name,
                'kip' => $faker->randomDigit,
                'alamat' => $faker->address,
                'status' => $faker->name,
                'ayah' => $faker->name,
                'ayahttl' => $faker->date,
                'nikayah' => $faker->randomDigit,
                'pendidikan' => $faker->name,
                'pekerjaan' => $faker->jobTitle,
                'penghasilan' => $faker->randomDigit,
                'nomorayah' => $faker->phoneNumber
            ]);
        }
    }
}
