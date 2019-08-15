@extends('layouts.master')

@section('titulo')
    Editar upload
@endsection


@section('content')

    @component('componentes.box', ['cor' => 'dark', 'title' => 'Editar Upload', 'erro' => 1])

        {{Form::open(['route' => ['upload.editar.post', $upload->id], 'method' => 'post', 'files' => true])}}

        <div class="form-group m-form__group row">

            <div class="col-lg-6">
                <label for="">Nome</label>
                {{Form::text('nome', $upload->nome, array('class' => 'form-control'))}}

            </div>
            <div class="col-lg-6">
                <label for="">Alterar Arquivo</label><br>
                <input type="file" name="arquivo" class="fileinputs">
                &nbsp;&nbsp; <a  href="{{route('upload.download.get', $upload->arquivo->id)}}" class="btn blue-soft"><i  class="flaticon-download" aria-hidden="true"></i></a>
            </div>

        </div>

        <br><br>

        <div class="form-group row">
            <div class="col-md-12">

                <div class="col-md-1">

                    {{Form::submit('Editar',['class'=>'btn blue-soft'])}}

                </div>
            </div>

        </div>

        {{Form::close()}}

    @endcomponent

@endsection

