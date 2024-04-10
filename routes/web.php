<?php

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
// Route::get('/', function () {
//     return view('avaliar');
// });
// Route::view('/pix', 'saque');
// Route::post("/pix", [App\Http\Controllers\PixController::class, "pix"])->name("pix");

// Route::view('/concluirSaque', 'pages/concluirSaque');
// Route::view('/sucesso', 'pages/sucesso');
// Route::view('/saqueFinal', 'pages/saqueFinal');
//Route::view("/videos", "pages/videos");
Route::middleware(["step"])->group(function () {
    Route::get("/", [App\Http\Controllers\RegisterController::class, "index"])->name("register");
    Route::post("/", [App\Http\Controllers\RegisterController::class, "register"])->name("register");
    Route::get("/avaliar", [App\Http\Controllers\PageController::class, "video"])->name("avaliar.1");
    Route::get("/vsl", [App\Http\Controllers\PageController::class, "vsl"])->name("vsl");
    Route::get("/pix", [App\Http\Controllers\PixController::class, "index"])->name("pix");
    Route::post("/pix", [App\Http\Controllers\PixController::class, "pix"])->name("pix");
    Route::get("/sucesso", [App\Http\Controllers\PixController::class, "sucesso"])->name("sucesso");
    Route::get("/avaliar2", [App\Http\Controllers\PageController::class, "video2"])->name("avaliar.2");
    Route::get("/saqueFinal", [App\Http\Controllers\PageController::class, "saqueFinal"])->name("saqueFinal");
    Route::get("/concluirSaque", [App\Http\Controllers\PageController::class, "concluirSaque"])->name("concluirSaque");
});

Route::get("ip", function () {
    $ip = file_get_contents('https://api.ipify.org');
    return $ip;
})->name("ip");