<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MailController;

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
    return view('clients');
});

Route::get('/{main}', function ($lang) {
    App::setlocale($lang);
    return view('clients');
});

Route::get('/locale/{locale}', 'App\Http\Controllers\MainController@changeLocale')->name('locale');

 Route::view('/', 'clients');

Route::post('/',  'App\Http\Controllers\UploadController@index');


