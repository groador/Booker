<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Consultant;

require_once('Generator.php');
require_once('Generatordb.php');
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
Route::get('/date', function () {
    return generez_date();
})->name('date');
Route::get('/db', function () {
    return mkdbt();
    try {
        return $test = mkdbt();
    } catch(Exception $e) { echo "<p size = 120 color = red> Inca se testeaza </p>";}
    
});

Route::get('/consultant', function () {
    return generez_date();
});
Route::view('/consultant', '/consultant');
Route::post('/consultant/post', 'ConsultantControl@programeaza');