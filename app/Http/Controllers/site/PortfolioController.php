<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Projeto;


class PortfolioController extends Controller
{
    function index()
    {
        $portfolios = Projeto::all();
        return view('site.index', compact('portfolios'));
    }
    function pagina($id){
        $single = Projeto::find($id);
        return view('site.single-project', compact('single'));
    }
}
