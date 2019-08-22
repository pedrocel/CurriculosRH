<?php

namespace App\Http\Controllers\Gestor\Auxiliares\Perfil;

use App\Service\Usuario\UsuarioService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\perfil;

class PerfilController extends Controller
{
   
   public function getNovo(){

       return view('gestor.auxiliares.perfil.novo');

   }


   public function postNovo(Request $request){

     Perfil::create([
         'nome' => $request->nome
     ]);
     return redirect()->route('usuario.lista.get')->with(['status' => 'Perfil Criado com Sucesso']);

   }


}
