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
    echo "Selamat Datang";
});
Route::get('/about', function () {
    echo "<b> Nim : </b> 2041720075 <br> <b>Nama :</b> Khalid Fadhil Arrafi <br><b>Kelas :</b> TI-2D";
});
Route::get('/articles/1', function(){
    echo "Ini merupakan halaman artikel dengan id 1";
});
Route::get('/articles/2', function(){
    echo "Ini merupakan halaman artikel dengan id 2";
});
