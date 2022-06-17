<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
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
    return view('home');
});

Route::get('register', "App\Http\Controllers\RegisterController@registerForm");
Route::post('register', "App\Http\Controllers\RegisterController@do_register");
Route::get('register/email/{query}', "App\Http\Controllers\RegisterController@checkEmail");
Route::get('logout', "App\Http\Controllers\RegisterController@do_logout");

Route::get('login', "App\Http\Controllers\LoginController@loginForm");
Route::post('login', "App\Http\Controllers\LoginController@do_login");

Route::get('home', "App\Http\Controllers\HomeController@home_access");

Route::get('areapersonale', "App\Http\Controllers\areaPersonaleController@areaP");
Route::get('areapersonale/ricerca', "App\Http\Controllers\areaPersonaleController@ricerca_api");
Route::post('areapersonale/carica/', "App\Http\Controllers\areaPersonaleController@carica_api");
Route::get('areapersonale/carica/stampa', "App\Http\Controllers\areaPersonaleController@stampa_api");

Route::get('areasocial', "App\Http\Controllers\areaSocialController@areaS");
Route::get('areasocial/verifica/{id}', "App\Http\Controllers\areaSocialController@verifica_like");
Route::get('areasocial/like/{user_id}/{social_id}', "App\Http\Controllers\areaSocialController@miPiace");
Route::get('areasocial/dislike/{user_id}/{social_id}', "App\Http\Controllers\areaSocialController@NonMiPiace");



