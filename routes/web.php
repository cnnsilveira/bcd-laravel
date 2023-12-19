<?php // @codingStandardsIgnoreFile

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
    return view('pages.index');
});

Route::get('/definicoes', function () {
    return view('pages.definitions');
});

Route::get('/favoritos', function () {
    return view('pages.favorites');
});

Route::get('/perfil', function () {
    return view('pages.profile');
});

Route::get('/imoveis', function () {
    return view('pages.props');
});

Route::get('/imoveis/editar', function () {
    return view('pages.edit');
});

Route::get('/imoveis/cadastro', function () {
    return view('pages.new');
});

Route::get('/usuarios', function () {
    return view('pages.users');
});
