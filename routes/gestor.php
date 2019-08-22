<?php 
Route::middleware(['auth'])->group(function () {

    Route::get('gestor/auxiliares/perfil/novo', 'Gestor/Auxiliares/PerfilController@getNovo')->name('gestor.auxiliares.perfil.novo.get');
    Route::post('gestor/auxiliares/perfil/novo', 'Gestor/Auxiliares/PerfilController@postNovo')->name('gestor.auxiliares.perfil.novo.post');
    // Route::get('editar/{usuario}', 'UsuarioController@getEditar')->name('usuario.editar.get');
    // Route::post('editar/{usuario}', 'UsuarioController@postEditar')->name('usuario.editar.post');
    // Route::get('lista', 'UsuarioController@getLista')->name('usuario.lista.get');

// });

});


