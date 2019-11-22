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
    //O QUE VOU RECEBER É UM OBJETO CHAMADO REQUEST DA CLASSE REQUEST
    //usando o parametro da rota aqui tambem.
    //precisamos colocar um valor default para o parametro.
    public function request(Request $request, $id=0){

       if($id == 0){
           echo "Passa algo ai!";
       }else{
           dd($id);
           
       }

    }

    public function exibirFormulario(){
        return view('formulario');
    }
    public function cadastrarFormulario(Request $request){
        //PARA VIZUALIAR OS DADOS
        //-> nome: nome do input que quero visualizar.
        dd($request->nome);
    }
}
