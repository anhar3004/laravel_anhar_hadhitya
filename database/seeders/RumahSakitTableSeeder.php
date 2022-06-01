<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Spatie\LaravelIgnition\Support\Composer\FakeComposer;

class RumahSakitTableSeeder extends Seeder
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
            DB::table('tb_rumah_sakit')->insert([

                'nama_RS'=> $faker->name ,
                'alamat'=> $faker->address,
                'email'=> $faker->email,
                'no_hp'	=> $faker->numberBetween(8000,9000)
    		]);

        }


    }
}
