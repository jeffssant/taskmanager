<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TarefaController;
use App\Mail\MsgTestMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
    return view('bem-vindo');
});

Auth::routes(['verify' => true]);


//Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('verified');

Route::resource('/tarefa', TarefaController::class)->middleware('verified');


Route::get('/msg-test', function() {
    //Mail::to('santana.jeff@gmail.com')->send(new MsgTestMail());
   // return 'Email enviado com sucesso';
    return new MsgTestMail();
});
