<?php
/**
 * Created by PhpStorm.
 * User: tiago
 * Date: 29/11/18
 * Time: 15:47
 */

namespace App\Service\utilities;


use App\Models\Arquivo;
use Illuminate\Support\Facades\Storage;

class ArquivoService
{
    public function novo($path, $request){

        $arquivo = $request->file('arquivo');

        return Arquivo::create([
            'mime' => $arquivo->getClientMimeType(),
            'path' => $path,
            'nome' => $arquivo->getClientOriginalName(),
            'tamanho' => $arquivo->getSize()
        ]);
    }

    public function downalod($id)
    {
        $arquivo = Arquivo::find($id);

        return response()->download(storage_path('app/'.$arquivo->path), $arquivo->nome);

    }

    public function delete($id){

        $arquivo = Arquivo::find($id);

      return Storage::delete(storage_path('app/'.$arquivo->path));


    }
}