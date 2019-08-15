<?php

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

Route::post('auth/login', 'LoginController@postLogin')->name('login.post');

Route::get('logout', 'LoginController@getLogout')->name('logout.get');

Route::get('/login', 'LoginController@getLogin')->name('login');

Route::middleware(['auth'])->group(function () {

    Route::get('/', function () {
        return view('welcome');
    })->name('index.get');

    Route::prefix('usuario')->namespace('Usuario')->group(function (){

        Route::get('novo', 'UsuarioController@getNovo')->name('usuario.novo.get');
        Route::post('novo', 'UsuarioController@postNovo')->name('usuario.novo.post');
        Route::get('editar/{usuario}', 'UsuarioController@getEditar')->name('usuario.editar.get');
        Route::post('editar/{usuario}', 'UsuarioController@postEditar')->name('usuario.editar.post');
        Route::get('lista', 'UsuarioController@getLista')->name('usuario.lista.get');

    });

    Route::prefix('upload')->namespace('Upload')->group(function (){

        Route::get('novo', 'UploadController@getNovo')->name('upload.novo.get');
        Route::post('novo', 'UploadController@postNovo')->name('upload.novo.post');
        Route::get('editar/{id}', 'UploadController@getEditar')->name('upload.editar.get');
        Route::post('editar/{id}', 'UploadController@postEditar')->name('upload.editar.post');
        Route::get('lista', 'UploadController@getLista')->name('upload.lista.get');
        Route::get('download/{id}', 'UploadController@getDownload')->name('upload.download.get');

    });
        //pasta local

        Route::get('/local/novo', 'LocaisController@getAdicionar')->name('local.novo');
        Route::post('/local/novo', 'LocaisController@postAdicionar')->name('local.novo.post');
        Route::get('/local/lista', 'LocaisController@getLista')->name('local.lista.get');

        Route::get('/local/editar/{id}', 'LocaisController@getEditar')->name('local.editar');
        Route::post('/local/editar/{id}', 'LocaisController@postEditar')->name('local.editarpost');


        // pasta plantao

        Route::get('/plantao/novo', 'LocaisController@getAdicionar')->name('plantao.novo');
        Route::post('/plantao/novo', 'LocaisController@postAdicionar')->name('plantao.novo.post');

        Route::get('/plantao/lista', 'LocaisController@getLista')->name('plantao.lista.get');


        Route::get('/plantao/editar', 'LocaisController@getEditar')->name('plantao.editar.get');
        Route::post('/plantao/editar', 'LocaisController@postEditar')->name('plantao.editar.post');
});


