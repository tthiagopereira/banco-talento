<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function mensagemErro($mensagem) {
        return \Session::flash('mensagem', ['msg'=>$mensagem, 'cor'=>'#6E0500']);
    }

    public function mensagemSucesso($mensagem) {
        return \Session::flash('mensagem', ['msg'=>$mensagem, 'cor'=>'#0F6A18']);
    }

    public function mesagemAviso($mensagem) {
        return \Session::flash('mensagem', ['msg'=>$mensagem, 'cor'=>'#FFD700']);
    }

    public function saveImage($image) {
        $rand = rand(11111,99999);
        $diretorio = 'img/banco';
        $ext = $image->guessClientExtension();
        $nomeArquivo = "_img_".$rand.".".$ext;
        $image->move($diretorio,$nomeArquivo);
        return $diretorio.'/'.$nomeArquivo;
    }

    public function destroyImage($caminho) {
        File::delete($caminho);
        return true;
    }

    public function verificarEmail($email) {
        $register = User::where('email',$email)->get()->count();
        if($register === 1){
            return true;
        }else{
            return false;
        }
    }

    public function verificarCPF($cpf) {
        $register = User::where('cpf',$cpf)->get()->count();
        if($register === 1){
            return true;
        }else{
            return false;
        }
    }
}
