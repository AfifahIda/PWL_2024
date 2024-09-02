<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

//basic routing
/*Route::get('/hello', function () {
    return 'Hello World';
});*/

Route::get('/world', function () {
    return 'World';
});

/*Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'NIM : 2241760032 <br> Nama : Afifah Ida Setyo Rini';
});*/


//routing parameters
Route::get('/user/{nama}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comments}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

/*Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '.$id;
});*/


//optional parameters
Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});



Route::get('/hello', [WelcomeController::class, 'hello']);

/*Route::get('/', [WelcomeController::class, 'index']);
Route::get('/about', [WelcomeController::class, 'about']);
Route::get('/articles/{id}', [WelcomeController::class, 'articles']);*/

use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);

use App\Http\Controllers\AboutController;
Route::get('/about', [AboutController::class, 'about']);

use App\Http\Controllers\ArticleController;
Route::get('/articles/{id}', [ArticleController::class, 'articles']);



use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
    ]);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
    ]);
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