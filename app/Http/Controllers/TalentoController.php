<?php

namespace App\Http\Controllers;

use App\Curso;
use App\FormacaoMilitar;
use App\Om;
use App\Talento;
use App\Uf;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TalentoController extends Controller
{
    public function index()
    {
//        $register = User::with('contatos')->where('tipo','Militar')->get();
        $register = Talento::all();
        return view('sistema.talento.index', compact('register'));
    }

    public function create()
    {
        $oms = Om::all();
        $formacaoMilidar = FormacaoMilitar::all();
        $ufs = Uf::all();
        $cursosGraduacao = DB::table('talentos')->where('tipo','curso livres');
        dd($cursosGraduacao->count());
        return view('sistema.talento.form.create', compact('oms','formacaoMilidar','ufs'));
    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
        $register = Talento::find($id);
        return view('sistema.talento.form.show');
    }

    public function edit(Talento $talento)
    {
        $oms = Om::all();
        return view('sistema.talento.form.edit', compact('oms'));
    }

    public function update(Request $request, Talento $talento)
    {
        //
    }

    public function destroy(Talento $talento)
    {
        //
    }
}