<?php

use Illuminate\Database\Seeder;
use App\Currency;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = [
            [
                'title'=>'Bitcoin',
                'code' => 'BTC'
            ],
            [
                'title'=>'Bitcoin1',
                'code' => 'BTC1'
            ],
            [
                'title'=>'Bitcoin2',
                'code' => 'BTC2'
            ],
            [
                'title'=>'Bitcoin3',
                'code' => 'BTC3'
            ],
            [
                'title'=>'Bitcoin4',
                'code' => 'BTC4'
            ],
            [
                'title'=>'Bitcoin5',
                'code' => 'BTC5'
            ],
            [
                'title'=>'Bitcoin6',
                'code' => 'BTC6'
            ],
        ];
        foreach ($currencies as $currency) {
            Currency::firstOrCreate([
               'title' => $currency['title'],
               'code' => $currency['code']
            ]);
        }
    }
}
