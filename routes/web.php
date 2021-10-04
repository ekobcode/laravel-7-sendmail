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
    return view('welcome');
});

Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Email Dari Eko Ganteng .com',
        'body' => 'ini adalah tes email dari gmail'
    ];
   
    \Mail::to('m.irfansyafalah@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email Terkirim.");
});