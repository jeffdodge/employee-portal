<?php

use Illuminate\Support\Facades\Route;
use App\Models\Link;
use App\Models\SpecificLink;
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
    $links = cache()->remember("links", now()->addSeconds(5), function () {
        return Link::all()->sortBy('weight');
    });

    return view('portal', ['links' => $links]);
});

Route::get('/specific', function () {
    $links = cache()->remember('specific_links', now()->addSeconds(5), function () {
        return SpecificLink::all()->sortBy('title');
    });

    return view('specific', ['links' => $links]);
});
