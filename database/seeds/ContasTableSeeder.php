<?php

use Illuminate\Database\Seeder;

class ContasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Contas::truncate();

        //$faker = \Faker\Factory::create();
        //$password = bcrypt('secret');

        \App\Contas::create([
            'conta'     => '3542613736400929',
            'saldo'    => 5111.18,
        ]);
        \App\Contas::create([
            'conta'     => '5002358666761555',
            'saldo'    => 2692.13,
        ]);
        \App\Contas::create([
            'conta'     => '6334298212212157',
            'saldo'    => 1413.57,
        ]);
        \App\Contas::create([
            'conta'     => '3566692756616896',
            'saldo'    => 4283.82,
        ]);
        \App\Contas::create([
            'conta'     => '3534429276944915',
            'saldo'    => 6075.82,
        ]);
        \App\Contas::create([
            'conta'     => '5602230677353868',
            'saldo'    => 7081.26,
        ]);
        \App\Contas::create([
            'conta'     => '63047130883535492',
            'saldo'    => 8803.54,
        ]);
        \App\Contas::create([
            'conta'     => '6762912045796191',
            'saldo'    => 8453.76,
        ]);
        \App\Contas::create([
            'conta'     => '3571915896135854',
            'saldo'    => 7486.64,
        ]);

    }
}
