<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Requests\Usuario\UsuarioRequest;
use App\Models\Usuario;
use App\Service\Usuario\UsuarioService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    private $usuarioService;

    public function __construct(UsuarioService $usuarioService)
    {
        $this->usuarioService = $usuarioService;
    }

    public function getNovo(){

        return view('usuario.novo');

    }

    public function postNovo(UsuarioRequest $request){

        $request->merge(['senha' => 123456]);

        $this->usuarioService->novo($request);

        return redirect()->route('usuario.lista.get')->with(['status' => 'Usuário cadastrado com sucesso senha 123456']);
    }

    public function getLista(Request $request){

        $usuarios = $this->usuarioService->listaPaginate(15, $request);

        return view('usuario.lista', compact('usuarios'));

    }

    public function getEditar(Usuario $usuario){

        return view('usuario.editar', compact('usuario'));

    }

    public function postEditar(UsuarioRequest $request, Usuario $usuario){

        $this->usuarioService->update($usuario->id, $request);

        return redirect()->route('usuario.lista.get')->with(['status' => 'Usuário editado com sucesso!']);

    }


}
