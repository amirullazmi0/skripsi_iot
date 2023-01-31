<?php

use App\Models\Sensor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
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


Route::get('/', [DataController::class, 'index']);
Route::get('/getData', [DataController::class, 'store']);


Route::post('/sensor', function (Request $request) {
    // kode untuk menyimpan data dari request ke database
    $value = $request->input('value');
    Sensor::create(['value' => $value]);
});
