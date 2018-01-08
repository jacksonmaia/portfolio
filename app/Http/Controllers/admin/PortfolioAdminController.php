<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Projeto;

class PortfolioAdminController extends Controller
{
    public function index(){
        $registros = Projeto::all();
        return view('admin.projetos', compact('registros'));
    }

    public function cadastrar(){
        return view('admin.novo-projeto');
    }

    public function salvar(Request $req){

        $dados = $req->all();

        $rules = [
            'titulo'=> 'required',
            'subTitulo'=> 'required',
            'imagem'=> 'required',
            'descricao'=> 'required',
            'cliente'=> 'required',
            'ano'=> 'required',
            'url'=> 'required',
            'tag'=> 'required',
            'class'=> 'required'
        ];

        if($req->hasFile('imagem')){
            $img = $req->file('imagem');
            $num = rand(1111, 9999);
            $dir = "img/";
            $ex = $img->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $img->move($dir, $nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        $validate = validator($dados, $rules);

        if( $validate->fails() ){
            return redirect()->route('admin.projetos')->withErrors($validate)->withInput();
        }
        Projeto::create($dados);
        return redirect()->route('admin.projetos');
    }

    public function deletar($id){
        Projeto::find($id)->delete();
        return redirect()->route('admin.projetos');
    }

    public function editar($id){
        $registro = Projeto::find($id);
        return view('admin.editar-projeto', compact('registro'));
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();

        $rules = [
            'titulo'=> 'required',
            'subTitulo'=> 'required'
        ];

        if($req->hasFile('imagem')){
            $img = $req->file('imagem');
            $num = rand(1111, 9999);
            $dir = "img/";
            $ex = $img->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $img->move($dir, $nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        $validate = validator($dados, $rules);

        if( $validate->fails() ){
            return redirect()->route('admin.projetos')->withErrors($validate)->withInput();
        }

        Projeto::find($id)->update($dados);
        return redirect()->route('admin.projetos');
    }
}
