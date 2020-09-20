<?php

namespace App\Http\Controllers;

use App\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{

    public function index()
    {
        $register = Curso::all();
        return view('sistema.curso.index', compact('register'));
    }

    public function create()
    {
        return view('sistema.curso.form.create');
    }

    public function store(Request $request)
    {
        $registro = new Curso($request->all());
        $registro->save();
        $this->mensagemSucesso('Curso registrado com sucesso');
        return redirect()->route('cursos');
    }

    public function edit($id)
    {
        $registro = Curso::find($id);
        if(!$registro){
            $this->mesagemAviso('Boa tentativa mais curso não foi encontrado');
            return redirect()->route('cursos');
        }
        return view('sistema.curso.form.edit', compact('registro','id'));
    }

    public function update(Request $request, $id)
    {
        $registro = Curso::find($id);
        if($registro) {
            $this->mesagemAviso('Boa tentativa mais curso não pode ser atualizado');
        }
        $registro->update($request->all());
        $this->mensagemSucesso('Registro alterado com sucesso');
        return redirect()->route('cursos');
    }

    public function destroy($id)
    {
        $registro = Curso::find($id);
        if($registro) {
            \Session::flash('mensagem',['msg'=>'Curso deletado com sucesso!','cor'=>'#0F6A18']);
            $registro->delete();
            return redirect()->route('cursos');
        }else{
            \Session::flash('mensagem',['msg'=>'Não encontrado!','cor'=>'#6E0500']);
        }
    }

}
