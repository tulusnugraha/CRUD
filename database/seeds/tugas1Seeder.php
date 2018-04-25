<?php

use Illuminate\Database\Seeder;

class tugas1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker\Factory::create();

        $limit = 5;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('tugas1')->insert([ 
                'nama' => $faker->name,
                'alamat' => $faker->address,
            ]);
    }
}