<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EmpresaController extends Controller
{

    public function index()
    {
        $this->authorize('view',User::class);
        $register = Empresa::all();
        return view('sistema.empresa.index', compact('register'));
    }

    public function create()
    {
        return view('sistema.empresa.form.create');
    }

    public function store(Request $request)
    {
        $image_logo = $request->file('image_logo');

        if($image_logo) {
            $image_logo = $this->saveImage($image_logo);
        }

        $verificarEmail = $this->verificarEmail($request['email']);
        $verificarCPF = $this->verificarCPF($request['cpf']);

        if($verificarEmail) {
            $this->mesagemAviso('E-mail já existe');
            return redirect()->route('empresa.create');
        }

        if($verificarCPF) {
            $this->mesagemAviso('C.P.F já existe');
            return redirect()->route('empresa.create');
        }

        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->cpf = $request['cpf'];
        $user->tipo = 'Empresa';
        $user->telefone = $request['telefone'];
        $user->status = $request['status'];
        $user->password = bcrypt('123456');
        $user->save();

        $empresa = new Empresa();
        $empresa->nome_empresa = $request['nome_empresa'];
        $empresa->user_id = $user->id;
        $empresa->image_logo = $image_logo;

        $empresa->save();

        $this->mensagemSucesso('Empresa cadastrada com sucesso');
        return redirect()->route('empresa');
    }

    public function editEmpresa($id) {
        $user = User::find($id);
        if(!$user) {
            $this->mensagemErro('Boa tentativa mais você não tem acesso');
            return back();
        }
        $empresa = Empresa::where('user_id',$id)->first();

        return view('sistema.empresa.form.edit', compact('empresa','user','id'));
    }

    public function edit($id)
    {
        $empresa = Empresa::find($id);
        $user = User::find($empresa->user_id);

        if(!$empresa) {
            $this->mensagemErro('Empresa não existe');
            return redirect()->route('empresa');
        }

        if(!$user) {
            $this->mensagemErro('Usuario não existe');
            return redirect()->route('empresa');
        }


        return view('sistema.empresa.form.edit', compact('empresa','user','id'));
    }

    public function updateEmpresa(Request $request, $id) {
        $user = User::find($id);
        if(!$user) {
            $this->mensagemErro('Usuário não existe');
            return back();
        }
        $user->name = $request['name'];
        $user->email= $request['email'];
        $user->cpf  = $request['cpf'];
        $user->telefone  = $request['telefone'];
        $user->tipo = 'Empresa';
        $user->status=Auth::user()->status;
        $user->password = bcrypt($request['password']);
        $user->update();

        $empresa = Empresa::where('user_id', $id)->first();
        $empresa->nome_empresa = $request['nome_empresa'];

        $image_logo = file($request['image_logo']);

    }

    public function update(Request $request, $id){

        $empresa = Empresa::find($id);
        $image = $request->file('image_logo');

        if($image) {
            $this->destroyImage($empresa->image_logo);
            $empresa->image_logo = $this->saveImage($image);
        }else{
            $empresa->image_logo = $request['image_logo2'];
        }

        $empresa->nome_empresa = $request['nome_empresa'];
        $empresa->update();

        $user = User::find($empresa->user_id);
        $user->name = $request['name'];
        $user->email= $request['email'];
        $user->cpf  = $request['cpf'];
        $user->telefone  = $request['telefone'];
        $user->tipo = 'Empresa';
        $user->status=$request['status'];
        $user->password = bcrypt('123456');
        $user->update();

        $this->mensagemSucesso('Empresa alterada com sucesso');

        return redirect()->route('empresa');
    }

    public function destroy($id)
    {
        $empresa = Empresa::find($id);
        $this->destroyImage($empresa->image_logo);
        $empresa->delete();
        User::find($empresa->user_id)->delete();
        $this->mensagemSucesso('Empresa excluida com sucesso');
        return redirect()->route('empresa');
    }
}
