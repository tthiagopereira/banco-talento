<?php

namespace App\Http\Controllers;

use App\Escalao;
use App\Om;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{

    public function index(){
        $this->authorize('view',User::class);
        $usuario = User::with('om')->where('tipo','!=','Empresa')->get();
        return view('sistema.usuario.index',compact('usuario'));
    }

    public function adicionar(){

        $registro = User::all();
        $oms = Om::all();
        return view('sistema.usuario.form.adicionar',compact('registro','oms'));

    }

    public function salvar(Request $request){

        $this->authorize('create',User::class);
        $verificacao = User::where('email',$request['email']);
        $verificacaoCPF = User::where('cpf',$request['cpf']);

        if($verificacaoCPF->count() != 0 ){
            $this->mensagemErro('CPF já cadastrado');
            return redirect()->route('users');
        }

        if($verificacao->count() != 0 ){
            \Session::flash('mensagem',['msg'=>'E-mail já cadastrada!','cor'=>'#6E0500']);
            $registro = $request->all();
            return redirect()->route('usuario.adicionar',compact('registro'));
        }

        $registro = new User();
        $registro->name = $request['name'];
        $registro->cpf= $request['cpf'];
        $registro->telefone= $request['telefone'];
        $registro->email= $request['email'];
        $registro->tipo = $request['tipo'];
        $registro->status = $request['status'];
        $registro->om_id = $request['om_id'];

        $registro->password = bcrypt($request['password']);

        $registro->save();

        \Session::flash('mensagem',['msg'=>'Usuário criado com sucesso!','cor'=>'#0F6A18']);

        return redirect()->route('usuarios');
    }

    public function editar($id){

        $registro = User::find($id);
        $oms = Om::all();

        if(!$registro) {

            \Session::flash('mensagem',['msg'=>'Usuário não existe!','cor'=>'#6E0500']);
            return redirect()->route('usuarios');

        }
        return view('sistema.usuario.form.editar',compact('registro','id','oms'));

    }

    public function atualizar(Request $request, $id){

        $registro = User::find($id);

        if($request['password']){
            $request['password'] = bcrypt($request['password']);
        }else{
            $request['password'] = $registro->password;
        }

        $registro->update($request->all());

        \Session::flash('mensagem',['msg'=>'atualizado com sucesso!','cor'=>'#0F6A18']);


        return redirect()->route('usuarios');

    }

    public function excluir($id){

        $this->authorize('delete',User::class);
        $registro = User::find($id);

        if($registro->id === 1){
            \Session::flash('mensagem',['msg'=>'Boa tentativa o adiministrador do sistema não pode ser excluido','cor'=>'#6E0500']);
            return redirect()->route('usuarios');
        }


        if($registro->tipo === 'Administrador'){
            \Session::flash('mensagem',['msg'=>'Somente o Administrador pode excluir!','cor'=>'#6E0500']);
            return redirect()->route('usuarios');
        }

        User::find($id)->delete();
        \Session::flash('mensagem',['msg'=>'Excluido com sucesso!','cor'=>'#6E0500']);
        return redirect()->route('usuarios');

    }

}
