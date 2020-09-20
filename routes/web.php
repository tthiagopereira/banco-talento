<?php

Auth::routes();

Route::middleware('auth')->group(function() {
    Route::get('/', 'HomeController@paginaInicial');

    //	Sistema
    Route::get('detalhe/{id}','ServicoViaturaController@detalhe')->name('detalhe');

    //Usuárioss
    Route::get('usuarios','UsuarioController@index')->name('usuarios');
    Route::get('usuario/adicionar','UsuarioController@adicionar')->name('usuario.adicionar');
    Route::post('usuario/salvar','UsuarioController@salvar')->name('usuario.salvar');
    Route::get('usuario/editar/{id}','UsuarioController@editar')->name('usuario.editar');
    Route::post('usuario/atualizar/{id}','UsuarioController@atualizar')->name('usuario.atualizar');
    Route::get('usuario/deletar/{id}','UsuarioController@excluir')->name('usuario.excluir');

    //Dashboard
    ///carrega/pedidos
    Route::get('carrega/pedidos','HomeController@carregaPedidos');
    Route::get('carrega/viaturas','HomeController@carregaViaturas');
    Route::get('carrega/quantidade/missoes','HomeController@carregarQuantidadeMissoes');

    //om
    Route::get('om','OmController@index')->name('om');
    Route::get('om/adicionar','OmController@adicionar')->name('om.adicionar');
    Route::post('om/salvar','OmController@salvar')->name('om.salvar');
    Route::get('om/editar/{id}','OmController@editar')->name('om.editar');
    Route::post('om/atualizar/{id}','OmController@atualizar')->name('om.atualizar');
    Route::get('om/deletar/{id}','OmController@excluir')->name('om.excluir');

    //curso
    Route::get('curso','CursoController@index')->name('cursos');
    Route::get('curso/create','CursoController@create')->name('curso.create');
    Route::post('curso/store','CursoController@store')->name('curso.store');
    Route::get('curso/edit/{id}','CursoController@edit')->name('curso.edit');
    Route::post('curso/update/{id}','CursoController@update')->name('curso.update');
    Route::get('curso/destroy/{id}','CursoController@destroy')->name('curso.destroy');

    //uf
    Route::get('uf','UfController@index')->name('uf');
    Route::get('uf/adicionar','UfController@adicionar')->name('uf.adicionar');
    Route::post('uf/salvar','UfController@salvar')->name('uf.salvar');
    Route::get('uf/editar/{id}','UfController@editar')->name('uf.editar');
    Route::post('uf/atualizar/{id}','UfController@atualizar')->name('uf.atualizar');
    Route::get('uf/deletar/{id}','UfController@excluir')->name('uf.excluir');

    //Formação militar
    Route::get('formacao/militar','FormacaoMilitarController@index')->name('formacao.militar');
    Route::get('formacao/militar/create','FormacaoMilitarController@create')->name('formacao.militar.create');
    Route::post('formacao/militar/store','FormacaoMilitarController@store')->name('formacao.militar.store');
    Route::get('formacao/militar/edit/{id}','FormacaoMilitarController@edit')->name('formacao.militar.edit');
    Route::post('formacao/militar/update/{id}','FormacaoMilitarController@update')->name('formacao.militar.update');
    Route::get('formacao/militar/destroy/{id}','FormacaoMilitarController@destroy')->name('formacao.militar.destroy');

    //contato
    Route::get('contato','ContatoController@index')->name('contato');
    Route::get('contato/create','ContatoController@adicionar')->name('contato.create');
    Route::post('contato/store/{id}','ContatoController@store')->name('contato.store');
    Route::post('contato/store/contato/{id}','ContatoController@storeHome')->name('contato.storeHome');
    Route::get('contato/edit/{id}','ContatoController@editar')->name('contato.edit');
    Route::post('contato/update/{id}','ContatoController@atualizar')->name('contato.update');
    Route::get('contato/destroy/{id}','ContatoController@excluir')->name('contato.destroy');

    //talento
    Route::get('recrutar/talento','TalentoController@index')->name('talento');
    Route::get('recrutar/talento/create','TalentoController@create')->name('talento.create');
    Route::post('recrutar/talento/store','TalentoController@store')->name('talento.store');
    Route::get('recrutar/talento/edit/{id}','TalentoController@edit')->name('talento.edit');
    Route::post('recrutar/talento/update/{id}','TalentoController@update')->name('talento.update');
    Route::get('recrutar/talento/destroy/{id}','TalentoController@destroy')->name('talento.destroy');

    //empresa
    Route::get('empresa','EmpresaController@index')->name('empresa');
    Route::get('empresa/create','EmpresaController@create')->name('empresa.create');
    Route::post('empresa/store','EmpresaController@store')->name('empresa.store');
    Route::get('empresa/edit/{id}','EmpresaController@edit')->name('empresa.edit');
    Route::post('empresa/update/{id}','EmpresaController@update')->name('empresa.update');
    Route::get('empresa/destroy/{id}','EmpresaController@destroy')->name('empresa.destroy');

});

Route::view('/sample/error404','errors.404')->name('error404');
Route::view('/sample/error500','errors.500')->name('error500');