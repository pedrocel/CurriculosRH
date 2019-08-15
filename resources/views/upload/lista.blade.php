@extends('layouts.master')

@section('titulo')
Lista Upload
@endsection


@section('content')

    @component('componentes.box', ['cor' => 'dark', 'title' => 'Busca', 'erro' =>1])

        {{Form::open(['route' => 'upload.lista.get', 'method' => 'get'])}}

        <div class="form-group m-form__group row">
            <div class="col-lg-12">
                <label for="">Nome</label>
                {{Form::text('nome', null, array('class' => 'form-control'))}}

            </div>
        </div>

        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">

                    <input type="submit" class="btn blue-soft" value="Enviar">
                </div>
            </div>
        </div>

        {{Form::close()}}

    @endcomponent

    @component('componentes.box', ['cor' => 'dark', 'title' => 'Listagem de Uploads', 'erro' =>0])

        @slot('acoes')

            <a class="btn white btn-outline btn blue-soft" href="{{route('upload.novo.get')}}">
                &nbsp;Cadastrar</a>
        @endslot

        <table class="table table-striped table-bordered table-hover" id="sample_2">
            <thead>
            <tr>
                <th><center>ID</center></th>
                <th><center>Nome</center></th>
                <td><center>Editar</center></td>
            </tr>
            </thead>

            <tbody>

            @foreach($uploads as $upload)
                <tr>
                    <td><center>{{$upload->id}}</center></td>
                    <td><center>{{$upload->nome}}</center></td>
                    <td><center><a class="btn blue-soft" href="{{route('upload.editar.get', $upload->id)}}"><i class="flaticon-edit" aria-hidden="true"></i></a></center></td>
                </tr>
            @endforeach

            </tbody>

        </table>
        {{$uploads->appends(request()->all())->render()}}

    @endcomponent

@endsection
