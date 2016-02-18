<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name' => str_random(10),
            'phone_number' => '555-555-5555',
            'address' => str_random(20)
        ]);

        DB::table('clients')->insert([
            'name' => str_random(10),
            'phone_number' => '555-555-5555',
            'address' => str_random(20)
        ]);

        DB::table('clients')->insert([
            'name' => str_random(10),
            'phone_number' => '555-555-5555',
            'address' => str_random(20)
        ]);

        DB::table('clients')->insert([
            'name' => str_random(10),
            'phone_number' => '555-555-5555',
            'address' => str_random(20)
        ]);

        DB::table('clients')->insert([
            'name' => str_random(10),
            'phone_number' => '555-555-5555',
            'address' => str_random(20)
        ]);
    }
}
