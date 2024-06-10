<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'title' => 'Демонтаж-монтаж встраиваемой панели',
                'url' => 'demontazh_montazh_vstraivaemoy_paneli',
                'price' => 600,
                'product_id' => 1
            ],
            [
                'title' => 'Диагностика',
                'url' => 'diagnostika',
                'price' => 0,
                'product_id' => 1
            ],
            [
                'title' => 'Замена инвертора индукционной варочной панели',
                'url' => 'zamena_invertora_induktsionnoy_varochnoy_paneli',
                'price' => 2400,
                'product_id' => 1

            ],
            [
                'title' => 'Замена клеммной коробки',
                'url' => 'zamena_klemmnoy_korobki',
                'price' => 1400,
                'product_id' => 1
            ],
            [
                'title' => 'Замена конфорки',
                'url' => 'zamena_konforki',
                'price' => 800,
                'product_id' => 1
            ],
            [
                'title' => 'Замена панели управления',
                'url' => 'zamena_paneli_upravleniya',
                'price' => 1800,
                'product_id' => 1
            ],
            [
                'title' => 'Замена платы сенсорного управления',
                'url' => 'zamena_platy_sensornogo_upravleniya',
                'price' => 1700,
                'product_id' => 1
            ],
            [
                'title' => 'Замена регулятора мощности конфорки',
                'url' => 'zamena_regulyatora_moschnosti_konforki',
                'price' => 900,
                'product_id' => 1
            ],
            [
                'title' => 'Замена реле',
                'url' => 'zamena_rele',
                'price' => 1100,
                'product_id' => 1
            ],
            [
                'title' => 'Замена сетевого шнура',
                'url' => 'zamena_setevogo_shnura',
                'price' => 800,
                'product_id' => 1
            ],
            [
                'title' => 'Замена блока управления',
                'url' => 'zamena-bloka-upravleniya',
                'price' => 2700,
                'product_id' => 2
            ],
            [
                'title' => 'Замена вентилятора',
                'url' => 'zamena-ventilyatora',
                'price' => 2990,
                'product_id' => 2
            ],
            [
                'title' => 'Замена двигателя вентилятора',
                'url' => 'zamena-dvigatelya-ventilyatora',
                'price' => 15000,
                'product_id' => 2
            ],
            [
                'title' => 'Замена компрессора',
                'url' => 'zamena-kompressora',
                'price' => 18000,
                'product_id' => 2
            ],
            [
                'title' => 'Замена крыльчатки вентилятора',
                'url' => 'zamena-krilchatki-ventilyatora',
                'price' => 3000,
                'product_id' => 2
            ],
            [
                'title' => 'Замена сенсорных датчиков',
                'url' => 'zamena-sensornih-datchikov',
                'price' => 5600,
                'product_id' => 2
            ],
            [
                'title' => 'Замена терморегулятора',
                'url' => 'zamena-termoregulyatora',
                'price' => 4500,
                'product_id' => 2
            ],
            [
                'title' => 'Заправка холодильника фреоном',
                'url' => 'zapravka-holodilnika-freonom',
                'price' => 2500,
                'product_id' => 2
            ],
            [
                'title' => 'Прочистка слива воды',
                'url' => 'prochistka-sliva-vodi',
                'price' => 3500,
                'product_id' => 2
            ],
            [
                'title' => 'Ремонт испарителя',
                'url' => 'remont-isparitelya',
                'price' => 3500,
                'product_id' => 2
            ]
        ]);
    }
}
