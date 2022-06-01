<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;



class Pasien extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i=1;$i<=10;$i++){
            DB::table('tb_pasien')->insert([

                'nama_pasien'=> $faker->name ,
                'alamat'=> $faker->address,
                'no_hp'	=> $faker->numberBetween(8000,9000),
                'RS'	=> $faker->randomDigit
    		]);

        }

    }
}
