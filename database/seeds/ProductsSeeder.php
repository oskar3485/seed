<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\ProductAttribute;
use App\ProductAttributeItem;
use App\ProductCategory;
use App\ProductItem;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attributes = [
            'color' => [
                'title' => 'Цвет',
                'type' => 'color',
                'attributes' => [
                    [
                        'title' => 'black',
                        'value' => '#000000'
                    ],
                    [
                        'title' => 'gray',
                        'value' => '#7a7a7a'
                    ],
                    [
                        'title' => 'light_gray',
                        'value' => '#ababab'
                    ],
                    [
                        'title' => 'blue',
                        'value' => '#07bced'
                    ], [
                        'title' => 'white',
                        'value' => '#ffffff'
                    ],
                    [
                        'title' => 'yellow',
                        'value' => '#ebcb00'
                    ],
                    [
                        'title' => 'red',
                        'value' => '#eb0000'
                    ],
                    [
                        'title' => 'purple',
                        'value' => '#4600eb'
                    ], [
                        'title' => 'burgundy',
                        'value' => '#b2386f'
                    ],
                    [
                        'title' => 'aqua',
                        'value' => '#00FFFF'
                    ],
                    [
                        'title' => 'dark_gray',
                        'value' => '#636363'
                    ],
                    [
                        'title' => 'dark_blue',
                        'value' => '#005366'
                    ],
                    [
                        'title' => 'pink',
                        'value' => '#ff69b4'
                    ],
                    [
                        'title' => 'military',
                        'value' => '#379a45'
                    ],
                ]
            ],
            'size' => [
                'title' => 'Размер',
                'type' => '',
                'attributes' => [
                    [
                        'title' => 'Small',
                        'value' => 'S'
                    ],
                    [
                        'title' => 'Medium',
                        'value' => 'M'
                    ],
                    [
                        'title' => 'Large',
                        'value' => 'L'
                    ],
                    [
                        'title' => 'Extra Large',
                        'value' => 'XL'
                    ],
                ]
            ],
            'length' => [
                'title' => 'Длина цепи',
                'type' => 'length',
                'attributes' => [
                    [
                        'value' => '18',
                        'title' => '18'
                    ],
                    [
                        'value' => '20',
                        'title' => '20'
                    ],
                    [
                        'value' => '22',
                        'title' => '22'
                    ],
                    [
                        'value' => '24',
                        'title' => '24'
                    ],
                ]
            ],
        ];

        $each = [
            'clothes' => [
                'title' => 'Одежда',
                'products' => [
                    [
                        'title' => 'Men’s T-Shirt Crypto Millionaire',
                        'price' => '72.99',
                        'attributes' => ['Цвет', 'Размер'],
                        'attribute_values' => [
                            'S' => [
                                ['title' => 'black'],
                                ['title' => 'gray'],
                                ['title' => 'light_gray'],
                                ['title' => 'dark_blue'],
                            ],
                            'M' => [
                                ['title' => 'black'],
                                ['title' => 'gray'],
                                ['title' => 'light_gray'],
                                ['title' => 'dark_blue'],
                            ],
                            'L' => [
                                ['title' => 'black'],
                                ['title' => 'gray'],
                                ['title' => 'light_gray'],
                                ['title' => 'dark_blue'],
                            ],
                            'XL' => [
                                ['title' => 'black'],
                                ['title' => 'gray'],
                                ['title' => 'light_gray'],
                                ['title' => 'dark_blue'],
                            ]
                        ]
                    ],
                    [
                        'title' => 'Round BTC Logo Tie',
                        'price' => '51.99',
                        'attributes' => ['Цвет', 'Размер'],
                        'attribute_values' => [
                            'S' => [
                                ['title' => 'black'],
                            ],
                            'M' => [
                                ['title' => 'black'],
                            ],
                            'L' => [
                                ['title' => 'black'],
                            ],
                            'XL' => [
                                ['title' => 'black'],
                            ]
                        ],
                    ],
                    [
                        'title' => 'Men\'s T-Shirt Ripple (XRP)',
                        'price' => '65.99',
                        'attributes' => ['Цвет', 'Размер'],
                        'attribute_values' => [
                            'S' => [
                                ['title' => 'light_gray'],
                                ['title' => 'blue'],
                                ['title' => 'white'],
                                ['title' => 'yellow'],
                                ['title' => 'red']
                            ],
                            'M' => [
                                ['title' => 'light_gray'],
                                ['title' => 'blue'],
                                ['title' => 'white'],
                                ['title' => 'yellow'],
                                ['title' => 'red']
                            ],
                            'L' => [
                                ['title' => 'light_gray'],
                                ['title' => 'blue'],
                                ['title' => 'white'],
                                ['title' => 'yellow'],
                                ['title' => 'red']
                            ],
                            'XL' => [
                                ['title' => 'light_gray'],
                                ['title' => 'blue'],
                                ['title' => 'white'],
                                ['title' => 'yellow'],
                                ['title' => 'red']
                            ]
                        ],
                    ],
                    [
                        'title' => 'Unisex Tri-Blend T-Shirt HODL',
                        'price' => '100',
                        'attributes' => ['Цвет', 'Размер'],
                        'attribute_values' => [
                            'S' => [
                                ['title' => 'black'],
                                ['title' => 'gray'],
                                ['title' => 'blue'],
                                ['title' => 'purple'],
                                ['title' => 'burgundy']
                            ],
                            'M' => [
                                ['title' => 'black'],
                                ['title' => 'gray'],
                                ['title' => 'blue'],
                                ['title' => 'purple'],
                                ['title' => 'burgundy']
                            ],
                            'L' => [
                                ['title' => 'black'],
                                ['title' => 'gray'],
                                ['title' => 'blue'],
                                ['title' => 'purple'],
                                ['title' => 'burgundy']
                            ],
                            'XL' => [
                                ['title' => 'black'],
                                ['title' => 'gray'],
                                ['title' => 'blue'],
                                ['title' => 'purple'],
                                ['title' => 'burgundy']
                            ]
                        ],

                    ],
                    [
                        'title' => 'Unisex Two-Tone Hoodie Crypto To The Moon',
                        'price' => '100',
                        'attributes' => ['Цвет', 'Размер'],
                        'attribute_values' => [
                            'S' => [
                                ['title' => 'black'],
                                ['title' => 'aqua'],
                                ['title' => 'dark_gray'],
                            ],
                            'M' => [
                                ['title' => 'black'],
                                ['title' => 'aqua'],
                                ['title' => 'dark_gray'],
                            ],
                            'L' => [
                                ['title' => 'black'],
                                ['title' => 'aqua'],
                                ['title' => 'dark_gray'],
                            ],
                            'XL' => [
                                ['title' => 'black'],
                                ['title' => 'aqua'],
                                ['title' => 'dark_gray'],
                            ]
                        ],
                    ],
                    [
                        'title' => 'Men\'s Premium Long Sleeve Shirt Buy The Dip',
                        'price' => '100',
                        'attributes' => ['Цвет', 'Размер'],
                        'attribute_values' => [
                            'S' => [
                                ['title' => 'black'],
                                ['title' => 'gray'],
                                ['title' => 'light_gray'],
                                ['title' => 'dark_gray'],
                                ['title' => 'dark_blue']
                            ],
                            'M' => [
                                ['title' => 'black'],
                                ['title' => 'gray'],
                                ['title' => 'light_gray'],
                                ['title' => 'dark_gray'],
                                ['title' => 'dark_blue']
                            ],
                            'L' => [
                                ['title' => 'black'],
                                ['title' => 'gray'],
                                ['title' => 'light_gray'],
                                ['title' => 'dark_gray'],
                                ['title' => 'dark_blue']
                            ],
                            'XL' => [
                                ['title' => 'black'],
                                ['title' => 'gray'],
                                ['title' => 'light_gray'],
                                ['title' => 'dark_gray'],
                                ['title' => 'dark_blue']
                            ]
                        ],
                    ],
                    [
                        'title' => 'Women\'s Premium T-Shirt Bitcoin BTC',
                        'price' => '100',
                        'attributes' => ['Цвет', 'Размер'],
                        'attribute_values' => [
                            'S' => [
                                ['title' => 'black'],
                                ['title' => 'gray'],
                                ['title' => 'blue'],
                                ['title' => 'white'],
                                ['title' => 'pink']
                            ],
                            'M' => [
                                ['title' => 'black'],
                                ['title' => 'gray'],
                                ['title' => 'blue'],
                                ['title' => 'white'],
                                ['title' => 'pink']
                            ],
                            'L' => [
                                ['title' => 'black'],
                                ['title' => 'gray'],
                                ['title' => 'blue'],
                                ['title' => 'white'],
                                ['title' => 'pink']
                            ],
                            'XL' => [
                                ['title' => 'black'],
                                ['title' => 'gray'],
                                ['title' => 'blue'],
                                ['title' => 'white'],
                                ['title' => 'pink']
                            ]
                        ],
                    ],
                    [
                        'title' => 'Unisex Tri-Blend T-Shirt Bitcoin',
                        'price' => '100',
                        'attributes' => ['Цвет', 'Размер'],
                        'attribute_values' => [
                            'S' => [
                                ['title' => 'black'],
                                ['title' => 'gray'],
                                ['title' => 'blue'],
                                ['title' => 'purple'],
                                ['title' => 'burgundy']
                            ],
                            'M' => [
                                ['title' => 'black'],
                                ['title' => 'gray'],
                                ['title' => 'blue'],
                                ['title' => 'purple'],
                                ['title' => 'burgundy']
                            ],
                            'L' => [
                                ['title' => 'black'],
                                ['title' => 'gray'],
                                ['title' => 'blue'],
                                ['title' => 'purple'],
                                ['title' => 'burgundy']
                            ],
                            'XL' => [
                                ['title' => 'black'],
                                ['title' => 'gray'],
                                ['title' => 'blue'],
                                ['title' => 'purple'],
                                ['title' => 'burgundy']
                            ]
                        ],
                    ],
                    [
                        'title' => 'BTC Logo Snapback Hats',
                        'price' => '100',
                        'attributes' => ['Цвет', 'Размер'],
                        'attribute_values' => [
                            'S' => [
                                ['title' => 'black'],
                                ['title' => 'blue'],
                                ['title' => 'purple'],
                                ['title' => 'pink'],
                                ['title' => 'military']
                            ],
                            'M' => [
                                ['title' => 'black'],
                                ['title' => 'blue'],
                                ['title' => 'purple'],
                                ['title' => 'pink'],
                                ['title' => 'military']
                            ],
                            'L' => [
                                ['title' => 'black'],
                                ['title' => 'blue'],
                                ['title' => 'purple'],
                                ['title' => 'pink'],
                                ['title' => 'military']
                            ],
                            'XL' => [
                                ['title' => 'black'],
                                ['title' => 'blue'],
                                ['title' => 'purple'],
                                ['title' => 'pink'],
                                ['title' => 'military']
                            ]
                        ],
                    ],
                    [
                        'title' => 'Women\'s T-Shirt Ask Me About Bitcoin',
                        'price' => '100',
                        'attributes' => ['Цвет', 'Размер'],
                        'attribute_values' => [
                            'S' => [
                                ['title' => 'black'],
                                ['title' => 'gray'],
                                ['title' => 'light_gray'],
                                ['title' => 'purple'],
                                ['title' => 'pink']
                            ],
                            'M' => [
                                ['title' => 'black'],
                                ['title' => 'gray'],
                                ['title' => 'light_gray'],
                                ['title' => 'purple'],
                                ['title' => 'pink']
                            ],
                            'L' => [
                                ['title' => 'black'],
                                ['title' => 'gray'],
                                ['title' => 'light_gray'],
                                ['title' => 'purple'],
                                ['title' => 'pink']
                            ],
                            'XL' => [
                                ['title' => 'black'],
                                ['title' => 'gray'],
                                ['title' => 'light_gray'],
                                ['title' => 'purple'],
                                ['title' => 'pink']
                            ]
                        ],
                    ],
                    [
                        'title' => 'ETH Symbol Snapback Hat',
                        'price' => '54.99',
                        'attributes' => ['Цвет', 'Размер'],
                        'attribute_values' => [
                            'S' => [
                                ['title' => 'blue'],
                                ['title' => 'red'],
                                ['title' => 'purple'],
                                ['title' => 'pink']
                            ],
                            'M' => [
                                ['title' => 'blue'],
                                ['title' => 'red'],
                                ['title' => 'purple'],
                                ['title' => 'pink']
                            ],
                            'L' => [
                                ['title' => 'blue'],
                                ['title' => 'red'],
                                ['title' => 'purple'],
                                ['title' => 'pink']
                            ],
                            'XL' => [
                                ['title' => 'blue'],
                                ['title' => 'red'],
                                ['title' => 'purple'],
                                ['title' => 'pink']
                            ]
                        ],
                    ],
                    [
                        'title' => 'Men’s Premium T-Shirt',
                        'price' => '100',
                        'attributes' => ['Цвет', 'Размер'],
                        'attribute_values' => [
                            'S' => [
                                ['title' => 'gray'],
                                ['title' => 'light_gray'],
                                ['title' => 'white'],
                                ['title' => 'yellow'],
                                ['title' => 'dark_gray']
                            ],
                            'M' => [
                                ['title' => 'gray'],
                                ['title' => 'light_gray'],
                                ['title' => 'white'],
                                ['title' => 'yellow'],
                                ['title' => 'dark_gray']
                            ],
                            'L' => [
                                ['title' => 'gray'],
                                ['title' => 'light_gray'],
                                ['title' => 'white'],
                                ['title' => 'yellow'],
                                ['title' => 'dark_gray']
                            ],
                            'XL' => [
                                ['title' => 'gray'],
                                ['title' => 'light_gray'],
                                ['title' => 'white'],
                                ['title' => 'yellow'],
                                ['title' => 'dark_gray']
                            ]
                        ],
                    ]
                ]
            ],
            'jewelry' => [
                'title' => 'Ювелирные изделия',
                'products' => [
                    [
                        'title' => 'Bitcoin Ring - Gold Plated Silver',
                        'price' => '349.99',
                        'attributes' => []
                    ],
                    [
                        'title' => 'Bit by Bit Gold Necklace',
                        'price' => '114.99',
                        'attributes' => ['Длина цепи'],
                        'attribute_values' => [
                            'length' => [
                                ['title' => '18'],
                                ['title' => '20'],
                                ['title' => '22'],
                                ['title' => '24'],
                            ]
                        ]
                    ],
                    [
                        'title' => 'HODL Ring',
                        'price' => '109.99',
                        'attributes' => []
                    ],
                    [
                        'title' => 'Ethereum Gold Cufflinks',
                        'price' => '199.99',
                        'attributes' => []
                    ],
                    [
                        'title' => 'Ethereum Cuff Bracelet',
                        'price' => '199.99',
                        'attributes' => []
                    ],
                    [
                        'title' => 'Litecoin Gold Necklace',
                        'price' => '199.99',
                        'attributes' => ['Длина цепи'],
                        'attribute_values' => [
                            'length' => [
                                ['title' => '18'],
                                ['title' => '20'],
                                ['title' => '22'],
                                ['title' => '24'],
                            ]
                        ]
                    ],
                    [
                        'title' => 'BlingCoin BTC Necklace',
                        'price' => '199.99',
                        'attributes' => ['Длина цепи'],
                        'attribute_values' => [
                            'length' => [
                                ['title' => '18'],
                                ['title' => '20'],
                                ['title' => '22'],
                                ['title' => '24'],
                            ]
                        ]
                    ],
                    [
                        'title' => 'Ethereum Gold Necklace',
                        'price' => '199.99',
                        'attributes' => ['Длина цепи'],
                        'attribute_values' => [
                            'length' => [
                                ['title' => '18'],
                                ['title' => '20'],
                                ['title' => '22'],
                                ['title' => '24'],
                            ]
                        ]
                    ],
                ]
            ],
            'accessories' => [
                'title' => 'Аксессуары',
                'products' => [
                    [
                        'title' => 'Metal Ethereum Coin',
                        'price' => '349.99',
                        'attributes' => []
                    ],
                    [
                        'title' => 'Run BTC Mug',
                        'price' => '34.99',
                        'attributes' => []
                    ],
                    [
                        'title' => 'Bitcoin Bath Mat',
                        'price' => '49.99',
                        'attributes' => []
                    ],
                    [
                        'title' => 'Mini Metal Bitcoin Keychain',
                        'price' => '23.99',
                        'attributes' => []
                    ],
                    [
                        'title' => 'Bitcoin Sign Bag',
                        'price' => '23.99',
                        'attributes' => []
                    ],
                    [
                        'title' => 'Crypto Trading Poster',
                        'price' => '23.99',
                        'attributes' => []
                    ],
                    [
                        'title' => 'I Heart BTC Mousepad',
                        'price' => '23.99',
                        'attributes' => []
                    ],
                    [
                        'title' => 'Bitcoin Metal Pin',
                        'price' => '23.99',
                        'attributes' => []
                    ],
                ]
            ],
            'product_set' => [
                'title' => 'Наборы',
                'products' => [
                    [
                        'title' => 'Pen + Notepad + Mug (Bitles)',
                        'price' => '50',
                        'attributes' => []
                    ],
                    [
                        'title' => 'Badge + Keychain + USB Flash Drive (Bitles)',
                        'price' => '100',
                        'attributes' => []
                    ],
                    [
                        'title' => 'Pendant + Bracelet + Flag (Bitles)',
                        'price' => '250',
                        'attributes' => []
                    ],
                    [
                        'title' => 'Sweatshirt + T-Shirt + Cap (Bitles)',
                        'price' => '500',
                        'attributes' => []
                    ],
                    [
                        'title' => 'Press Wall + Roll Up + Big Flag (Bitles)',
                        'price' => '750',
                        'attributes' => []
                    ],
                    [
                        'title' => 'Bag + Phone Case + Laptop Bag (Bitles)',
                        'price' => '1000',
                        'attributes' => []
                    ],
                ]
            ],
        ];

        foreach ($attributes as  $items) {
            $attribute = ProductAttribute::firstOrCreate([
                'title' => $items['title'],
                'type' => $items['type']
                ]
            );
            foreach ($items['attributes'] as $value) {
                ProductAttributeItem::firstOrCreate([
                    'attribute_id' => $attribute->id,
                    'value' => $value['value'],
                    'title' => $value['title']
                ]);
            }
        }

        foreach ($each as $slug => $data) {

            $product_category = ProductCategory::firstOrCreate(['slug' => $slug]);

            foreach ($data['products'] as  $item) {
                $product = Product::firstOrCreate([
                    'title' => $item['title'],
                    'price' => $item['price']
                ]);
                foreach ($item as $key => $attr_obj) {
                    if ($key === 'attribute_values') {
                        foreach ($attr_obj as $attr_size => $attr_color) {
                            $thing_slug = 'product_' . $product->id . '_' . $attr_size;
                            $attr_size_id = ProductAttributeItem::where('value',$attr_size)->pluck('id')->first();
                            foreach ($attr_color as $color ) {
                                $attr_color_id = ProductAttributeItem::where('title',$color['title'])->pluck('id')->first();
                                $full_thing_slug = $thing_slug . '_' . $color['title'];
                                $product_item =  ProductItem::firstOrCreate([
                                    'product_id' => $product->id,
                                    'slug' => $full_thing_slug,
                                    'price' => $product->price
                                ]);
                                $product_item->attribute_items()->attach($attr_color_id);
                                $product_item->attribute_items()->attach($attr_size_id);
                            }
                        }
                    }
                }
                $product_category->products()->attach($product->id);
                $attributes_ids = ProductAttribute::whereIn('title', $item['attributes'])->pluck('id');
                $product->product_attributes()->sync($attributes_ids);
            }
        }
    }
}
