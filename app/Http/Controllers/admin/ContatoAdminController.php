<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contato;

class ContatoAdminController extends Controller
{
    public function index(){
        $registros = Contato::all();
        return view('admin.contato', compact('registros'));
    }

    public function deletar($id){
        Contato::find($id)->delete();
        return redirect()->route('admin.contatos');
    }
}
