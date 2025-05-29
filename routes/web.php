<?php

use App\Models\User;
use App\Models\Equipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

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

    return redirect(route('login'));

    
})->name('salva-conta');

Route::get('/teste', function () {
    return "O codigo foi testado";
});

Route::get('/usuario/{nome}', function ($nome) {
    return "O usuário atual é: ".$nome;
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::post('/logar', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);
    
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        
        return redirect()->intended('dashboard');
    }
    
    return back()->withErrors([
        'email' => 'O email e senha digitados não são válidos',
        ])->onlyInput('email');
    })->name('logar');

    Route::get('/cadastra-equipe', function () {
        return view('cadastra-equipe');
    })->name('cadastra-equipe')->middleware('auth');

    Route::post('/salva-equipe', function (Request $request) {
        //dd($request);
        $equipe = new Equipe();
        $equipe->nome = $request->name;
        $equipe->email = $request->email;
        $equipe->formacao = $request->formacao;
        $equipe->experiencia = $request->experiencia;
        $equipe->save();
    
        return redirect(route('cadastra-equipe'));
    
        
    })->name('salva-equipe');

    Route::get('/logout', function (Request $request) {
        $request->session()->regenerate();
       Auth::logout();
        return redirect()->route('inicio');
    })->name('logout');
