<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    $mais_buscados = \App\Models\Produto::take(4)->get();
    $promocoes = \App\Models\Produto::skip(4)->take(5)->get();
    return view('welcome', compact('mais_buscados', 'promocoes'));
});

Route::middleware(['auth'])->group(function () {
    Route::resource('produtos', ProdutoController::class);
});

require __DIR__.'/auth.php';