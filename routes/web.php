<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/formulir', [FormController::class, 'formulir']);
Route::post('/hasil', [FormController::class, 'hasil']);


Route::get('/', function () {
    return view('welcome');
});

//Formulir Views Routers
//Article Views Routers
Route::get('/history',[ArticleController::class, 'article']);
Route::get('/history/{history:slug}',[ArticleController::class, 'content']);

//Categories Views Routers
Route::get('/categories/{category:slug}',function(Category $category){
    return view('category',[
        'articles' =>$category->article,
        'category' =>$category->name,
    ]);
});
require __DIR__.'/auth.php';
