<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
    public function index()
    {
        $cities = [
            1 => [
                'name' => 'Челябинск',
                'link' => 'chl'
            ],
            2 => [
                'name' => 'Санкт-Петербург',
                'link' => 'spb'
            ],
            3 => [
                'name' => 'Краснодар',
                'link' => 'krd'
            ]
        ];
        $menu = [
            1 => [
                'name' => 'Цены',
                'link' => '#',
                'submenu' => [
                    1 => [
                        'name' => 'Варочная панель',
                        'link' => '#'
                    ],
                    2 => [
                        'name' => 'Варочная панель2',
                        'link' => '#'
                    ],
                    3 => [
                        'name' => 'Варочная панель3',
                        'link' => '#'
                    ],
                    4 => [
                        'name' => 'Варочная панель4',
                        'link' => '#'
                    ],
                    5 => [
                        'name' => 'Варочная панель5',
                        'link' => '#'
                    ],
                    6 => [
                        'name' => 'Варочная панель6',
                        'link' => '#'
                    ],
                    7 => [
                        'name' => 'Варочная панель7',
                        'link' => '#'
                    ],
                ]
            ],
            2 => [
                'name' => 'Комплектующие',
                'link' => '#'
            ],
            3 => [
                'name' => 'Неисправности',
                'link' => '#'
            ],
            4 => [
                'name' => 'О компании',
                'link' => '#'
            ],
            5 => [
                'name' => 'Контакты',
                'link' => '#'
            ]
        ];
        $footerLinks = [
            'left' => [
                1 => [
                    'id' => 1,
                    'name' => 'Варочная панель',
                    'link' => 'varochnyh_panelej',
                    'img' => 'cooking-panel',
                    'views_repair' => [
                        1 => [
                            'title' => 'Демонтаж-монтаж встраиваемой панели',
                            'link' => 'demontazh_montazh_vstraivaemoy_paneli',
                            'cost' => 600,
                        ],
                        2 => [
                            'title' => 'Диагностика',
                            'link' => 'diagnostika',
                            'cost' => 0,
                        ],
                        3 => [
                            'title' => 'Замена инвертора индукционной варочной панели',
                            'link' => 'zamena_invertora_induktsionnoy_varochnoy_paneli',
                            'cost' => 2400,
                        ],
                        4 => [
                            'title' => 'Замена клеммной коробки',
                            'link' => 'zamena_klemmnoy_korobki',
                            'cost' => 1400
                        ],
                        5 => [
                            'title' => 'Замена конфорки',
                            'link' => 'zamena_konforki',
                            'cost' => 800
                        ],
                        6 => [
                            'title' => 'Демонтаж-монтаж встраиваемой панели2',
                            'link' => 'demontazh_montazh_vstraivaemoy_paneli2',
                            'cost' => 600,
                        ],
                        7 => [
                            'title' => 'Диагностика2',
                            'link' => 'diagnostika2',
                            'cost' => 0,
                        ],
                        8 => [
                            'title' => 'Замена инвертора индукционной варочной панели2',
                            'link' => 'zamena_invertora_induktsionnoy_varochnoy_paneli2',
                            'cost' => 2400,
                        ],
                        9 => [
                            'title' => 'Замена клеммной коробки2',
                            'link' => 'zamena_klemmnoy_korobki2',
                            'cost' => 1400
                        ],
                        10 => [
                            'title' => 'Замена конфорки2',
                            'link' => 'zamena_konforki2',
                            'cost' => 800
                        ],
                    ]
                ],
                2 => [
                    'id' => 2,
                    'name' => 'Винный шкаф',
                    'link' => 'winecabinetov',
                    'img' => 'wine-cabinet',
                    'views_repair' => [
                        1 => [
                            'title' => 'Замена блока управления',
                            'link' => 'demontazh_montazh_vstraivaemoy_paneli',
                            'cost' => 2700,
                        ],
                        2 => [
                            'title' => 'Замена вентилятора',
                            'link' => 'diagnostika',
                            'cost' => 2990,
                        ],
                        3 => [
                            'title' => 'Замена двигателя вентилятора',
                            'link' => 'zamena_invertora_induktsionnoy_varochnoy_paneli',
                            'cost' => 15000,
                        ],
                        4 => [
                            'title' => 'Замена компрессора',
                            'link' => 'zamena_klemmnoy_korobki',
                            'cost' => 18000
                        ],
                        5 => [
                            'title' => 'Замена крыльчатки вентилятора',
                            'link' => 'zamena_konforki',
                            'cost' => 3000
                        ],
                        6 => [
                            'title' => 'Замена блока управления2',
                            'link' => 'demontazh_montazh_vstraivaemoy_paneli2',
                            'cost' => 2700,
                        ],
                        7 => [
                            'title' => 'Замена вентилятора2',
                            'link' => 'diagnostika2',
                            'cost' => 2990,
                        ],
                        8 => [
                            'title' => 'Замена двигателя вентилятора2',
                            'link' => 'zamena_invertora_induktsionnoy_varochnoy_paneli2',
                            'cost' => 15000,
                        ],
                        9 => [
                            'title' => 'Замена компрессора2',
                            'link' => 'zamena_klemmnoy_korobki2',
                            'cost' => 18000
                        ],
                        10 => [
                            'title' => 'Замена крыльчатки вентилятора2',
                            'link' => 'zamena_konforki2',
                            'cost' => 3000
                        ],
                    ]
                ],
                3 => [
                    'id' => 3,
                    'name' => 'Водонагреватель',
                    'link' => '#',
                    'img' => 'water-heater'
                ],
                4 => [
                    'id' => 4,
                    'name' => 'Вытяжка',
                    'link' => '#',
                    'img' => 'cooker-hood'
                ],
                5 => [
                    'id' => 5,
                    'name' => 'Газовая плита',
                    'link' => '#',
                    'img' => 'gas-stove'
                ],
                6 => [
                    'id' => 6,
                    'name' => 'Духовой шкаф',
                    'link' => '#',
                    'img' => 'oven'
                ],
                7 => [
                    'id' => 7,
                    'name' => 'Кондиционер',
                    'link' => '#',
                    'img' => 'air-conditioning'
                ],
                8 => [
                    'id' => 8,
                    'name' => 'Кофемашина',
                    'link' => '#',
                    'img' => 'coffee-machine'
                ],
                9 => [
                    'id' => 9,
                    'name' => 'Микроволновая печь',
                    'link' => '#',
                    'img' => 'microwave'
                ],
                10 => [
                    'id' => 10,
                    'name' => 'Морозильник',
                    'link' => '#',
                    'img' => 'microwave'
                ],
                11 => [
                    'id' => 11,
                    'name' => 'Посудомоечная машина',
                    'link' => '#',
                    'img' => 'dishwasher'
                ],
                12 => [
                    'id' => 12,
                    'name' => 'Пылесос',
                    'link' => '#',
                    'img' => 'vacuum-cleaner'
                ],
                13 => [
                    'id' => 13,
                    'name' => 'Робот-пылесос',
                    'link' => '#',
                    'img' => 'vacuum-cleaner-robot'
                ],
                14 => [
                    'id' => 14,
                    'name' => 'Стиральная машина',
                    'link' => '#',
                    'img' => 'washing-machine'
                ],
                15 => [
                    'id' => 15,
                    'name' => 'Сушильная машина',
                    'link' => '#',
                    'img' => 'drying-machine'
                ],
                16 => [
                    'id' => 16,
                    'name' => 'Телевизор',
                    'link' => '#',
                    'img' => 'tv'
                ],
                17 => [
                    'id' => 17,
                    'name' => 'Холодильник',
                    'link' => '#',
                    'img' => 'fridge'
                ],
                18 => [
                    'id' => 18,
                    'name' => 'Электрическая плита',
                    'link' => '#',
                    'img' => 'electric-stove'
                ],
            ],
            'right' => [
                1 => [
                    'name' => 'О Нас',
                    'link' => '#',
                ],
                2 => [
                    'name' => 'Неисправности',
                    'link' => '#',
                ],
                3 => [
                    'name' => 'Комплектующие',
                    'link' => '#',
                ],
                4 => [
                    'name' => 'Цены',
                    'link' => '#',
                ],
                5 => [
                    'name' => 'Контакты',
                    'link' => '#',
                ]
            ]
        ];
        return view('index')->with([
            'cities' => $cities,
            'menu' => $menu,
            'footer_links' => $footerLinks,
        ]);
    }
}