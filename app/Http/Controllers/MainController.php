<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex()
    {
        return view('home');
    }

    public function showArray()
    {
        $array = [
            ['id' => 1, 'title' => 'продукт 1', 'price' => 500, 'path' => 'images1.jpg'],
            ['id' => 2, 'title' => 'продукт 2', 'price' => 700, 'path' => 'images.jpg'],
            ['id' => 3, 'title' => 'продукт 3', 'price' => 900, 'path' => 'images1.jpg'],
        ];

        return view('array', compact('array'));
    }
}
