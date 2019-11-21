<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Para importar classe:
use App\Usuario;

class HomeController extends Controller
{
    public function viewHome(){
        //resources>views>home.blade.php
        //return view('home');

        /*
        $usuario = new Usuario();
        $listaUsuarios = $usuario->all();*/

        $listaUsuarios = Usuario::all();

        // dd($listaUsuarios);

        return view('home',["listaUsuarios"=>$listaUsuarios]);
    }
}
