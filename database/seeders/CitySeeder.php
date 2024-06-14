<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert([
            ['title' => 'Челябинск', 'link' => 'chl'],
            ['title' => 'Санкт-Петербург', 'link' => 'spb'],
            ['title' => 'Краснодар', 'link' => 'krd'],
            ['title' => 'Ростов-на-Дону', 'link' => 'rnd'],
            ['title' => 'Калининград', 'link' => 'kln'],
            ['title' => 'Пермь', 'link' => 'prm'],
            ['title' => 'Нижний Новгород', 'link' => 'nnv'],
            ['title' => 'Ижевск', 'link' => 'izh'],
            ['title' => 'Омск', 'link' => 'oms'],
            ['title' => 'Смоленск', 'link' => 'sml'],
            ['title' => 'Новосибирск', 'link' => 'nsk'],
            ['title' => 'Екатеринбург', 'link' => 'ekb'],
            ['title' => 'Астрахань', 'link' => 'ast']
        ]);
    }
}
