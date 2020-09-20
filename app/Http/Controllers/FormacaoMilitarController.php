<?php

namespace App\Http\Controllers;

use App\FormacaoMilitar;
use Illuminate\Http\Request;

class FormacaoMilitarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $register = FormacaoMilitar::all();
        return view('sistema.formacao_militar.index', compact('register'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sistema.formacao_militar.form.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registro = new FormacaoMilitar();
        $registro->nome = $request['nome'];
        $registro->save();

        $this->mensagemSucesso('Formação militar cadastrada com sucesso');
        return redirect()->route('formacao.militar');
    }

    public function edit($id)
    {
        $registro = FormacaoMilitar::find($id);
        if(!$registro) {
            $this->mesagemAviso('Boa tentativa mais essa formação não existe');
            return redirect()->route('formacao.militar');
        }
        return view('sistema.formacao_militar.form.edit',compact('registro','id'));
    }

    public function update(Request $request, $id)
    {
        $registro = FormacaoMilitar::find($id);
        $registro->nome = $request['nome'];
        $registro->save();
        \Session::flash('mensagem',['msg'=>'Atualizado com sucesso!','cor'=>'#0F6A18']);
        return redirect()->route('formacao.militar');
    }

    public function destroy($id)
    {
        $registro = FormacaoMilitar::find($id);
        $registro->delete();
        $this->mensagemSucesso('Deletado com sucesso');
        return redirect()->route('formacao.militar');
    }
}
