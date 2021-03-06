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
    $data = [
        'menu' => [
            'contatti',
            'blog',
            'maps'
        ]
    ];

    dump($data);

    return view('home', $data);
})->name('/');


Route::get('/blog', function () {
    return view('menu.blog');
});
Route::get('/maps', function () {
    return view('menu.maps');
});
Route::get('/contatti', function () {
    return view('menu.contacts');
});
