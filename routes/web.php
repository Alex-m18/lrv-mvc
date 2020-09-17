<?php

use Illuminate\Support\Facades\Route;
use \App\Models\Guitar;
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

Route::get('/show/{id}', function ($id) {
    $guitar = Guitar::find($id);
    if ($guitar === null) {
        abort(404);
    }
    return
        'ID: ' . $id . '<br>' .
        'Brand: ' . $guitar['brand'] . '<br>' .
        'Model: ' . $guitar['model'] . '<br>' .
        'Type: ' . $guitar->guitarType()['type'] . '<br>' .
        'Price: ' . $guitar['price'] . '<br>';
})->where('id', '[0-9]+');

Route::get('/create', function () {
    $id = Guitar::insertGetId([
        'brand' => 'Fender',
        'model' => 'Stratocaster',
        'type_id' => 1,
        'price' => random_int(1000, 100000),
    ]);
    return 'Product ID=' . $id . ' created successfully';
});

Route::get('/', function () {
    return view('welcome');
});

