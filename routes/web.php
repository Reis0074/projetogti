<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return "O codigo foi testado";
});

Route::get('/usuario/{nome}', function ($nome) {
    return "O usuário atual é: ".$nome;
});

Route::get('/sum/{num1}/{num}', function ($num1,$num2) {
    return "A soma é: ".$num1 + $num2;
});

Route::get('/subtraction/{num1}/{num}', function ($num1,$num2) {
    return "A soma é: ".$num1 - $num2;
});

Route::get('/division/{num1}/{num}', function ($num1,$num2) {
    return "A soma é: ".$num1 / $num2;
});

Route::get('/multiplication/{num1}/{num}', function ($num1,$num2) {
    return "A soma é: ".$num1 * $num2;
});