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
})->name('home');

Route::get('/header', function () {
    $links = [
        'pag-1',
        'pag-2',
        'pag-3',
        'pag-4'
    ];
    return view('header', compact('links'));
})->name('header');

Route::get('/pag-1', function () {
    return view('pag-1');
})->name('pag-1');

Route::get('/pag-2', function () {
    return view('pag-2');
})->name('pag-2');

Route::get('/pag-3', function () {
    return view('pag-3');
})->name('pag-3');

Route::get('/pag-4', function () {
    return view('pag-4');
})->name('pag-4');
