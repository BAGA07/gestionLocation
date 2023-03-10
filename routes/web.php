<?php

use App\Models\Article;
use App\Models\ProprieteArticle;
use App\Models\TypeArticle;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/article', function () {
    return Article::with("type")->paginate(5);
});
Route::get('/type', function () {
    return TypeArticle::with("articles")->paginate(5);
});
