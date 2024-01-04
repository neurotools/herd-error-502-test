<?php

use App\Http\Requests\TestFormRequest;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');

Route::post('/', function (TestFormRequest $request) {
    return view('welcome');
});

// This route triggers the 502 error
Route::get('test', function () {
    return dns_get_record('laravel.com', DNS_A);
});
