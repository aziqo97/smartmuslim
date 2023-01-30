<?php

use Illuminate\Support\Facades\Route;
use Longman\TelegramBot\Telegram;
use Illuminate\Http\Request;
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
Route::get('/members', function () {
    return view('members');
});
Route::get('/123', function () {
    return view('members');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::post('/telegram', function (request $request) {
    \Illuminate\Support\Facades\Http::post('https://api.telegram.org/bot5125611449:AAFW--6N8y_VjHeXgk9V2kj-Vm3ULTUpufg/sendMessage?chat_id=5339418857&text=Alhikma.Uz dan yangi buyurtma
    Telefon raqami :'.$request->phone.'
    Darslik: '.$request->kitob.'');
    return redirect('/');
});

