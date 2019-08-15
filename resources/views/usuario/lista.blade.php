@extends('layouts.master')

@section('titulo')
    Cadastro de Usuário
@endsection


@section('content')

    @component('componentes.box', ['cor' => 'dark', 'title' => 'Busca de Usuários', 'erro' =>1])

        {{Form::open(['route' => 'usuario.lista.get', 'method' => 'get'])}}

        <div class="form-group m-form__group row">
            <div class="col-lg-6">
                <label for="">Nome</label>
                {{Form::text('nome', null, array('class' => 'form-control'))}}

            </div>
            <div class="col-lg-6">
                <label for="">E-mail</label>
                {{Form::text('email', null, array('class' => 'form-control'))}}

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

    @component('componentes.box', ['cor' => 'dark', 'title' => 'Listagem de Usuários', 'erro' =>0])

        @slot('acoes')

            <a class="btn white btn-outline btn blue-soft" href="{{route('usuario.novo.get')}}">
                &nbsp;Cadastrar</a>
        @endslot

        <table class="table table-striped table-bordered table-hover" id="sample_2">
            <thead>
            <tr>
                <th><center>Id</center></th>
                <th><center>Nome</center></th>
                <th><center>E-mail</center></th>
                <th><center>CPF</center></th>
                <td><center>Editar</center></td>
            </tr>
            </thead>

            <tbody>

            @foreach($usuarios as $usuario)
                <tr>
                    <td><center>{{$usuario->id}}</center></td>
                    <td><center>{{$usuario->nome}}</center></td>
                    <td><center>{{$usuario->email}}</center></td>
                    <td><center>{{$usuario->cpf}}</center></td>
                    <td><center><a class="btn blue-soft" href="{{route('usuario.editar.get', $usuario)}}"><i class="flaticon-edit" aria-hidden="true"></i></a></center></td>
                </tr>
            @endforeach

            </tbody>

        </table>
        {{$usuarios->appends(request()->all())->render()}}

    @endcomponent

@endsection
