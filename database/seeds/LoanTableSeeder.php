<?php

use Illuminate\Database\Seeder;

class LoanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loan')->insert([
            'user_id' => 1,
            'amount' => 100000,
            'interest' => 3.2,
            'date_start' => '2016-02-15',
            'years' => 30
        ]);

        DB::table('loan')->insert([
            'user_id' => 2,
            'amount' => 100000,
            'interest' => 3.2,
            'date_start' => '2016-02-15',
            'years' => 30
        ]);

        DB::table('loan')->insert([
            'user_id' => 1,
            'amount' => 1000,
            'interest' => 2,
            'date_start' => '2016-02-15',
            'years' => 30
        ]);

        DB::table('loan')->insert([
            'user_id' => 3,
            'amount' => 100000,
            'interest' => 3.2,
            'date_start' => '2016-02-15',
            'years' => 30
        ]);

        DB::table('loan')->insert([
            'user_id' => 4,
            'amount' => 100000,
            'interest' => 3.2,
            'date_start' => '2016-02-15',
            'years' => 30
        ]);

    }
}
