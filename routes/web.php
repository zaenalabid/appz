<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\komputer;
use App\Http\Controllers\ruangan;
use App\Http\Controllers\it;
use App\Http\Controllers\kerusakan;
use App\Http\Controllers\trouble;
use App\Http\Controllers\home;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Route as RoutingRoute;

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

<<<<<<< HEAD
Route::get('/a', function () {
    $judul = "Dashboard";
    return view('a', compact('judul'));
});
Route::get('/', function () {

    $judul = "Dashboard";
    return view('v_dashboard', compact('judul'));
});

=======
// Route::get('/', function () {

//     $judul = "Dashboard";
//     return view('v_dashboard', compact('judul'));
// });
>>>>>>> df86510a8d7484df492c577ce690ed8039a1b6ad
Route::get('/dashboard', [home::class, 'index']);

Route::get('/icons', function () {
    $judul = "Icons";
    return view('v_icons', compact('judul'));
});
Route::get('/map', function () {
    $judul = "maps";
    return view('v_map', compact('judul'));
});
Route::get('/maps', function () {
    $judul = "maps";
    return view('v_maps', compact('judul'));
});
Route::get('/notifications', function () {
    $judul = "notifications";
    return view('v_notifications', compact('judul'));
});
Route::get('/rtl', function () {
    $judul = "rtl";
    return view('v_rtl', compact('judul'));
});
//komputer
Route::get('/data_komputer', [komputer::class, 'index']);
Route::get('/json_komputer',  [komputer::class, 'json']);
Route::post('/store_komputer', [komputer::class, 'store']);
Route::post('/edit_komputer', [komputer::class, 'edit']);
Route::put('/update_komputer/{id}', [komputer::class, 'update']);
Route::delete('/delete_komputer/{id}/{idspe}', [komputer::class, 'destroy']);
//ruangan
Route::get('/data_ruangan', [ruangan::class, 'index']);
Route::get('/json_ruangan',  [ruangan::class, 'json']);
Route::post('/store_ruangan', [ruangan::class, 'store']);
Route::post('/edit_ruangan', [ruangan::class, 'edit']);
Route::put('/update_ruangan/{id}', [ruangan::class, 'update']);
Route::delete('/delete_ruangan/{id}', [ruangan::class, 'destroy']);
//IT
Route::get('/data_it', [it::class, 'index']);
Route::get('/json_it',  [it::class, 'json']);
Route::post('/store_it', [it::class, 'store']);
Route::post('/edit_it', [it::class, 'edit']);
Route::put('/update_it/{id}', [it::class, 'update']);
Route::delete('/delete_it/{id}', [it::class, 'destroy']);
//kerusakan
Route::get('/data_kerusakan', [kerusakan::class, 'index']);
Route::get('/json_kerusakan',  [kerusakan::class, 'json']);
Route::post('/store_kerusakan', [kerusakan::class, 'store']);
Route::post('/edit_kerusakan', [kerusakan::class, 'edit']);
Route::put('/update_kerusakan/{id}', [kerusakan::class, 'update']);
Route::delete('/delete_kerusakan/{id}', [kerusakan::class, 'destroy']);
//trouble
Route::get('/', [trouble::class, 'index']);
Route::post('/create_ticket', [trouble::class, 'create_ticket']);
Route::post('/update_ticket', [trouble::class, 'status_ticket']);
Route::post('/close_ticket', [trouble::class, 'close_ticket']);
Route::get('/{ticket}/{it}', [trouble::class, 'it_progress']);
Route::post('/solu_ticket', [trouble::class, 'solu_ticket']);
Route::post('/ustatus_ticket', [trouble::class, 'ustatus_ticket']);

Route::get('/login', function () {
    $judul = "typography";
    return view('v_login', compact('judul'));
});
Route::get('/typography', function () {
    $judul = "typography";
    return view('v_typography', compact('judul'));
});
Route::get('/upgrade', function () {
    $judul = "upgrade";
    return view('v_upgrade', compact('judul'));
});
Route::get('/user', function () {
    $judul = "user";
    return view('v_user', compact('judul'));
});
