<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'title' => 'Варочная панель', 'url' => 'varochnyh_panelej', 'img' => 'cooking-panel'
            ],
            [
                'title' => 'Винный шкаф', 'url' => 'winecabinetov', 'img' => 'wine-cabinet'
            ],
            [
                'title' => 'Водонагреватель', 'url' => 'vodonagrevatelej', 'img' => 'water-heater'
            ],
            [
                'title' => 'Вытяжка', 'url' => 'vytyazhek', 'img' => 'cooker-hood'
            ],
            [
                'title' => 'Газовая плита', 'url' => 'gazovih_plit', 'img' => 'gas-stove'
            ],
            [
                'title' => 'Духовой шкаф', 'url' => 'duhovyh_shkafov', 'img' => 'oven'
            ],
            [
                'title' => 'Кондиционер', 'url' => 'kondicionerov', 'img' => 'air-conditioning'
            ],
            [
                'title' => 'Кофемашина', 'url' => 'ofemashin', 'img' => 'coffee-machine'
            ],
            [
                'title' => 'Микроволновая печь', 'url' => 'mikrovolnovyh_pechej', 'img' => 'microwave'
            ],
            [
                'title' => 'Морозильник', 'url' => 'morozilnikov', 'img' => 'freezer'
            ],
            [
                'title' => 'Посудомоечная машина', 'url' => 'posudomoechnyh_mashin', 'img' => 'dishwasher'
            ],
            [
                'title' => 'Пылесос', 'url' => 'pylesosov', 'img' => 'vacuum-cleaner'
            ],
            [
                'title' => 'Робот-пылесос', 'url' => 'robotov-pylesosov', 'img' => 'vacuum-cleaner-robot'
            ],
            [
                'title' => 'Стиральная машина', 'url' => 'stiralnayh_mashin', 'img' => 'washing-machine'
            ],
            [
                'title' => 'Сушильная машина', 'url' => 'sushilnyh_mashin', 'img' => 'drying-machine'
            ],
            [
                'title' => 'Телевизор', 'url' => 'televizorov', 'img' => 'tv'
            ],
            [
                'title' => 'Холодильник', 'url' => 'kholodilnikov', 'img' => 'fridge'
            ],
            [
                'title' => 'Электрическая плита', 'url' => 'electric-stove', 'img' => 'electric-stove'
            ],
        ]);
    }
}
