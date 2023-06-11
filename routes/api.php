<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use MongoDB\Client;
use MongoDB\Driver\Exception\Exception;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Connection;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('posts', PostController::class)->only([
    'destroy', 'show', 'store', 'update'
]);
Route::get('test', function() {

    $crmConnection = DB::connection('mysql_crm');
    $results = $crmConnection->select('SELECT * FROM empresa');
    $query = "SHOW TABLES";
    $r = $crmConnection->select($query);
    dd($r);
//    dd(\App\Models\Empresa::all());


});
