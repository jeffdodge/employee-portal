<?php

use Illuminate\Support\Facades\Route;
use App\Models\Link;
use App\Models\SpecificLink;
use App\Models\Manager;
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
    $links = Link::all()->sortBy('weight');
    return view('portal', ['links' => $links]);
});

Route::get('/specific', function () {
    $links = SpecificLink::all()->sortBy('title');
    return view('specific', ['links' => $links]);
});

Route::get('/manager', function () {
    $links = Manager::all()->sortBy('weight');
    return view('manager', ['links' => $links]);
});

Route::get('/laravel-test', function () {
    return 'Test Passed!';
});
