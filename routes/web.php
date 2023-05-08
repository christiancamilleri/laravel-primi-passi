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
        "nome" => 'Christian',
        "cognome" => 'Camilleri',
    ];
    $indirizzo = 'Via enos cerrini 110';
    $paese = 'Venturina Terme';
    return view('home', $data, compact('indirizzo', 'paese'));
});

Route::get('/header', function () {
    $links = [
        'home',
        'pag-1',
        'pag-2',
        'pag-3',
        'pag-4'
    ];
    return view('header', compact('links'));
})->name('header');
