<?php

namespace App\Http\Controllers;

use App\Uf;
use App\User;
use Illuminate\Http\Request;

class UfController extends Controller
{

    public function index(){

        $this->authorize('view',User::class);

        $registros = Uf::all();
        return view('sistema.uf.index',compact('registros'));

    }

    public function adicionar(){

        $this->authorize('create',User::class);

        return view('sistema.uf.form.adicionar');

    }

    public function salvar(Request $request){

        $this->authorize('create',User::class);

        $registro = new Uf();
        $registro->nome = $request['nome'];
        $registro->uf = $request['uf'];

        $registro->save();

        \Session::flash('mensagem',['msg'=>'Registrado com sucesso!','cor'=>'#0F6A18']);

        return redirect()->route('uf');
    }

    public function editar($id){

        $registro = Uf::find($id);

        if(!$registro) {

            \Session::flash('mensagem',['msg'=>'Escalão não existe!','cor'=>'#6E0500']);
            return redirect()->route('uf');

        }

        return view('sistema.uf.form.editar',compact('registro','id'));

    }

    public function atualizar(Request $request, $id){

        $registro = Uf::find($id);

        $registro->update($request->all());

        \Session::flash('mensagem',['msg'=>'Atualizado com sucesso!','cor'=>'#0F6A18']);

        return redirect()->route('uf');

    }

    public function excluir($id){
        $registro = Uf::find($id);
        $registro->delete();
        $this->mensagemSucesso('Cidade deletada com sucesso');
        return redirect()->route('uf');
    }
}