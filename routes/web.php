<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/criar-conta', function () {
    return view('criar-conta');
});

Route::post('/salva-conta', function (Request $request) {
    //dd($request);
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = $request->password;
    $user->save();

    return "Usuário salvo com sucesso";

    
})->name('salva-conta');

Route::get('/teste', function () {
    return "O codigo foi testado";
});

Route::get('/usuario/{nome}', function ($nome) {
    return "O usuário atual é: ".$nome;
});

Route::get('/sum/{num1}/{num}', function ($num1,$num2) {
    return "Resultado é: ".$num1 + $num2;
});

Route::get('/subtraction/{num1}/{num}', function ($num1,$num2) {
    return "Resultado é: ".$num1 - $num2;
});

Route::get('/division/{num1}/{num}', function ($num1,$num2) {
    return "Resultado é: ".$num1 / $num2;
});

Route::get('/multiplication/{num1}/{num}', function ($num1,$num2) {
    return "Resultado é: ".$num1 * $num2;
});