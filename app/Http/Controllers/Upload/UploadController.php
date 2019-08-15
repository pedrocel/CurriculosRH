<?php

namespace App\Http\Controllers\Upload;

use Illuminate\Support\Facades\Storage;

use App\Http\Requests\Upload\UploadRequest;
use App\Service\Upload\UploadService;
use App\Service\utilities\ArquivoService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{

    private $arquivoService;
    private $uploadService;

    public function __construct(ArquivoService $arquivoService, UploadService $uploadService)
    {
        $this->arquivoService = $arquivoService;
        $this->uploadService = $uploadService;
    }

    public function getNovo()
    {

        return view('upload.novo');

    }

    public function postNovo(UploadRequest $request)
    {

        $path = $request->file('arquivo')->store('arquivo/' . auth()->user()->id);

        $arquivo = $this->arquivoService->novo($path, $request);

        $request->merge(['id_arquivo' => $arquivo->id]);

        $this->uploadService->create($request->only('nome', 'id_arquivo'));

        return redirect()->route('upload.lista.get')->with(['status' => 'Upload cadastrado com sucesso!']);

    }

    public function getLista(Request $request)
    {

        $uploads = $this->uploadService->get();

        $uploads = $uploads->when($request->nome, function ($q) use ($request) {

            $q->where('nome', 'like', '%' . $request->nome . '%');

        })->paginate();

        return view('upload.lista', compact('uploads'));
    }

    public function getDownload($id)
    {

        return $this->arquivoService->downalod($id);

    }

    public function getEditar($id)
    {

        $upload = $this->uploadService->queryFind($id);

        return view('upload.editar', compact('upload'));

    }

    public function postEditar($id, UploadRequest $request)
    {

        $upload = $this->uploadService->queryFind($id);


        if ($request->hasFile('arquivo')) {

            $this->arquivoService->delete($upload->arquivo->id);

            $path = $request->file('arquivo')->store('arquivo/' . auth()->user()->id);

            $arquivo = $this->arquivoService->novo($path, $request);

            $request->merge(['id_arquivo' => $arquivo->id]);
       }

       $this->uploadService->update($id, $request);


        return redirect()->route('upload.lista.get')->with(['status' => 'Upload editado com sucesso!']);


    }
}
