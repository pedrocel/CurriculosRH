<?php
/**
 * Created by PhpStorm.
 * User: tiago
 * Date: 29/11/18
 * Time: 15:47
 */

namespace App\Service\Upload;


use App\Models\Upload;
use Illuminate\Http\Request;

class UploadService
{

   public function create($request){

      return Upload::create($request);

   }

   public function listaPaginate($request){

      return Upload::paginate();

   }

   public function get(){

       return Upload::query();
   }

   public function queryFind($id){

       return Upload::find($id);

   }

   public function update($id, Request $request){

       return Upload::find($id)->update($request->only('id_arquivo', 'nome'));

   }

}