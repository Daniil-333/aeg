<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\MenuItem;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
    public function index()
    {
        return view('index')->with([
            'cities' => City::all()->toArray(),
            'menu' => MenuItem::all()->toArray(),
            'products' => Product::all(),
            'services' => Service::all(),
        ]);
    }
}