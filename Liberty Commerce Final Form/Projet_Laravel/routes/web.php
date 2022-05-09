<?php

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

//aceuil par defaut
Route::get('/', function () {
    return view('greeting');
});

//panier
Route::get('/panier', function () {return view('panier');})->name('panier');

//acceuil par header
Route::get('/greeting', function () {return view('greeting');})->name('greeting');
//catalogue
Route::get('/catalogue', function () {return view('catalogue');})->name('catalogue');
//1/JUPITER (DEBUT LISTE PLANETES)
Route::get('/jupiter', function () {return view('jupiter');})->name('jupiter');
//2/MARS
Route::get('/mars', function () {return view('mars');})->name('mars');
//3/LUNE
Route::get('/lune', function () {return view('lune');})->name('lune');
//4/EXOPLANETE
Route::get('/exoplanete', function () {return view('exoplanete');})->name('exoplanete');
//5/MERCURE
Route::get('/mercure', function () {return view('mercure');})->name('mercure');
//6/NEPTUNE
Route::get('/neptune', function () {return view('neptune');})->name('neptune');
//7/NEPTUNE
Route::get('/venus', function () {return view('venus');})->name('venus');
//8/VENUS
Route::get('/gj', function () {return view('gj');})->name('gj');
//9/GJ-504
Route::get('/triton', function () {return view('triton');})->name('triton');
//10/TRITON
Route::get('/kepler', function () {return view('kepler');})->name('kepler');
//11/KEPLER
Route::get('/new', function () {return view('new');})->name('new');
//12/NEW
Route::get('/exo', function () {return view('exo');})->name('exo');
//FIN DES PLANETES

//CONNEXION
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//ADMIN
Route::get('/admin', function(){
    if (! Gate::allows('access-admin')) {
        
        return 'ACCESS DENIED';
    }
    return view('admin');
    
});
