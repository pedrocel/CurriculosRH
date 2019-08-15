<?php
/**
 * Created by PhpStorm.
 * User: tiago
 * Date: 28/11/18
 * Time: 17:41
 */

namespace App\Service\Usuario;


use App\Models\Usuario;

class UsuarioService
{
    public function novo($request){

        return Usuario::create($request->all());
        

    }

    public function update($id, $request){

        return Usuario::find($id)->update($request->all());

    }

    public function listaPaginate($page, $request){

        return Usuario::where(function ($q) use($request){

            if($request->nome){

                $q->where('nome', 'like', '%'.$request->nome.'%');

            }

            if($request->email){

                $q->where('email', $request->email);

            }


        })->paginate($page);

    }

    public function listaPluck(){

        return Usuario::pluck('nome', 'id');

    }


    public function get()
    {
        return Usuario::query();
    }
}