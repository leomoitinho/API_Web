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

        \App\Contas::create([
            'conta'     => '35426137',
            'saldo'    => 5111.18,
        ]);
        \App\Contas::create([
            'conta'     => '50023586',
            'saldo'    => 2692.13,
        ]);
        \App\Contas::create([
            'conta'     => '63342982',
            'saldo'    => 1413.57,
        ]);
        \App\Contas::create([
            'conta'     => '35666927',
            'saldo'    => 4283.82,
        ]);
        \App\Contas::create([
            'conta'     => '35344292',
            'saldo'    => 6075.82,
        ]);
        \App\Contas::create([
            'conta'     => '56022306',
            'saldo'    => 7081.26,
        ]);
        \App\Contas::create([
            'conta'     => '63047130',
            'saldo'    => 8803.54,
        ]);
        \App\Contas::create([
            'conta'     => '67629120',
            'saldo'    => 8453.76,
        ]);
        \App\Contas::create([
            'conta'     => '35719158',
            'saldo'    => 7486.64,
        ]);

    }
}
