<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Projeto;
use App\Especialidade;
use App\Contato;

class HomeController extends Controller
{
    function index(){
        $portfolios = Projeto::All();
        $especidades = Especialidade::All();
        return view('site.index', ["portfolios" => $portfolios, "especidades" => $especidades]);
    }
    public function salvarContato(Request $req){
        $dados = $req->all();

        $rules = [
            'nome'=> 'required',
            'email'=> 'required',
            'objetivo'=> 'required',
            'mensagem'=> 'required'
        ];

        $validate = validator($dados, $rules);

        if( $validate->fails() ){
            return redirect()->route('menu.index')->withErrors($validate)->withInput();
        }


        Contato::create($dados);
        return redirect()->route('menu.index');
    }
}
