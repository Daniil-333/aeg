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
            ['title' => 'Варочная панель', 'url' => 'varochnyh_panelej', 'img' => 'cooking-panel'],
            ['title' => 'Винный шкаф', 'link' => 'winecabinetov', 'img' => 'wine-cabinet'],
            ['title' => 'Водонагреватель', 'link' => 'vodonagrevatelej', 'img' => 'water-heater'],
            ['title' => 'Вытяжка', 'link' => 'vytyazhek', 'img' => 'cooker-hood'],
            ['title' => 'Газовая плита', 'link' => 'gazovih_plit', 'img' => 'gas-stove'],
            ['title' => 'Духовой шкаф', 'link' => 'duhovyh_shkafov', 'img' => 'oven'],
            ['title' => 'Кондиционер', 'link' => 'kondicionerov', 'img' => 'air-conditioning'],
            ['title' => 'Кофемашина', 'link' => 'ofemashin', 'img' => 'coffee-machine'],
            ['title' => 'Микроволновая печь', 'link' => 'mikrovolnovyh_pechej', 'img' => 'microwave'],
            ['title' => 'Морозильник', 'link' => 'morozilnikov', 'img' => 'freezer'],
            ['title' => 'Посудомоечная машина', 'link' => 'posudomoechnyh_mashin', 'img' => 'dishwasher'],
            ['title' => 'Пылесос', 'link' => 'pylesosov', 'img' => 'vacuum-cleaner'],
            ['title' => 'Робот-пылесос', 'link' => 'robotov-pylesosov', 'img' => 'vacuum-cleaner-robot'],
            ['title' => 'Стиральная машина', 'link' => 'stiralnayh_mashin', 'img' => 'washing-machine'],
            ['title' => 'Сушильная машина', 'link' => 'sushilnyh_mashin', 'img' => 'drying-machine'],
            ['title' => 'Телевизор', 'link' => 'televizorov', 'img' => 'tv'],
            ['title' => 'Холодильник', 'link' => 'kholodilnikov', 'img' => 'fridge'],
            ['title' => 'Электрическая плита', 'link' => 'electric-stove', 'img' => 'electric-stove'],
        ]);
    }
}
