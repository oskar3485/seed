<?php

use Illuminate\Database\Seeder;
use App\PaywayType;
use App\Currency;
use App\Payway;

class PaywaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payway = [
            'balance' => [
                'title' => 'Личный счет Bitles',
                'values' => [
                    [
                        'title'=>'Bitcoin',
                    ],
                    [
                        'title'=>'Bitcoin1',
                    ],
                    [
                        'title'=>'Bitcoin2',
                    ],
                    [
                        'title'=>'Bitcoin3',
                    ],
                    [
                        'title'=>'Bitcoin4',
                    ],
                    [
                        'title'=>'Bitcoin5',
                    ],
                    [
                        'title'=>'Bitcoin6',
                    ],
                ]
            ],
            'card' => [
                'title' => 'Bank Card',
                'values' => [
                    [
                        'title'=>'VISA',
                    ],
                    [
                        'title'=>'MasterCard',
                    ],
                ]
            ]
        ];
        foreach ($payway as $type_name=>$payway_type){
            PaywayType::firstOrCreate([
                'title' => $payway_type['title']
            ]);
            if ($type_name == 'balance') {
                $payway_type_obj = PaywayType::where('title',$payway_type['title'])->first();
                $payway_type_id = $payway_type_obj->id;
                foreach ($payway_type['values'] as $values) {
                    $currency = Currency::where('title',$values['title'])->first();
                    $currency_id = $currency->id;
                    Payway::firstOrCreate([
                        'title' => $values['title'],
                        'payway_type_id' => $payway_type_id,
                        'currency_id' => $currency_id
                    ]);
                }
            }
        }
    }
}
