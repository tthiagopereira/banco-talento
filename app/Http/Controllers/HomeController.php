<?php

namespace App\Http\Controllers;

use App\Contato;
use App\Empresa;
use App\Escalao;
use App\Ficha;
use App\Om;
use App\ServicoViatura;
use App\User;
use App\Viatura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user()->status;
        return view('home', compact('user'));
    }

    public function paginaInicial(){
        $oms = Om::all()->count();
        $empresas = Empresa::all()->count();
        $user =Auth::user();
        $id = $user->id;
        return view('panel.blank', compact('oms','user','empresas','id'));
    }

    public function carregarDados() {
        $oms = Om::all()->count();
        return response()->json('teste feito com sucesso');
    }

    public function carregaPedidos(){

        $analise = ServicoViatura::where('status','Analise')->count();
        $processando = ServicoViatura::where('status','Processando')->count();
        $aprovado = ServicoViatura::where('status','Aprovado')->count();

        return response()->json([$analise,$processando,$aprovado]);

    }

    public function carregaViaturas() {
        $viaturaAtiva = Viatura::where('status','Ativa')->count();
        $viaturaBaixada = Viatura::where('status','Baixada')->count();
        return response()->json([$viaturaAtiva,$viaturaBaixada]);
    }

    public function carregarQuantidadeMissoes(){

        $janeiro =   DB::table('servico_viaturas')->where('status','Aprovado')->whereMonth('data_saida','1')->count();
        $fevereiro = DB::table('servico_viaturas')->where('status','Aprovado')->whereMonth('data_saida','2')->count();
        $marco =     DB::table('servico_viaturas')->where('status','Aprovado')->whereMonth('data_saida','3')->count();
        $abril =     DB::table('servico_viaturas')->where('status','Aprovado')->whereMonth('data_saida','4')->count();
        $maio =      DB::table('servico_viaturas')->where('status','Aprovado')->whereMonth('data_saida','5')->count();
        $junho =     DB::table('servico_viaturas')->where('status','Aprovado')->whereMonth('data_saida','6')->count();
        $julho =     DB::table('servico_viaturas')->where('status','Aprovado')->whereMonth('data_saida','7')->count();
        $agosto =    DB::table('servico_viaturas')->where('status','Aprovado')->whereMonth('data_saida','8')->count();
        $setembro =  DB::table('servico_viaturas')->where('status','Aprovado')->whereMonth('data_saida','9')->count();
        $outubro =   DB::table('servico_viaturas')->where('status','Aprovado')->whereMonth('data_saida','10')->count();
        $novembro =  DB::table('servico_viaturas')->where('status','Aprovado')->whereMonth('data_saida','11')->count();
        $dezembro =  DB::table('servico_viaturas')->where('status','Aprovado')->whereMonth('data_saida','12')->count();

        return response()->json([$janeiro,$fevereiro,$marco,$abril,$maio,$junho,$julho,$agosto,$setembro,$outubro,$novembro,$dezembro]);

    }

}
