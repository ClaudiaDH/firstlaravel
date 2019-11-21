<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cidade;

class CidadeController extends Controller
{
    public function viewCidades(){
        $listaCidades = Cidade::all();

        return view('cidades',["listaCidades"=>$listaCidades]);
    }
}

