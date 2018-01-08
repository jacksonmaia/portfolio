<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{

    protected $fillable = [
        'titulo', 'subTitulo', 'imagem', 'descricao', 'cliente', 'ano', 'url', 'tag', 'class',
    ];
}
