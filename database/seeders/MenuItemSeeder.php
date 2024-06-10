<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menu_items')->insert([
            ['title' => 'Цены', 'link' => null, 'submenu' => 1],
            ['title' => 'Комплектующие', 'link' => 'komplektuyshie', 'submenu' => 0],
            ['title' => 'Неисправности', 'link' => 'neispravnosti', 'submenu' => 0],
            ['title' => 'О компании', 'link' => 'o_kompanii', 'submenu' => 0],
            ['title' => 'Контакты', 'link' => 'o_kompanii/informaciya', 'submenu' => 0]
        ]);
    }
}
