<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {
    $pizza = [
        'type' => 'Mediteran',
        'base' => 'Margarita',
        'price' => 10
    ];

    $pizzas = [
        ['type' => 'hawaiian', 'base' => 'cheesy crust', 'price' => 10],
        ['type' => 'volcano', 'base' => 'garlic crust' , 'price' => 15],
        ['type' => 'peri-peri lover', 'base' => 'hot chilli', 'price' => 20]
    ];

    return view('pizzas',$pizza, ['pizzas' => $pizzas]);


    //$price2 = request('price'); - Query parameters
    //return view('pizzas',$pizza, ['pizzas' => $pizzas, 'price2' => $price2]);

    //return view('pizzas',$pizza, ['pizzas' => $pizzas, 'price2' => request('price')]);
});

// --------------------- Use wildcards ------------------------
Route::get('/pizzas/{id}', function ($id) {
    return view('details', ['id' => $id]);
});


