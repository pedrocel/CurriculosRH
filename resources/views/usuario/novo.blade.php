@extends('layouts.master')

@section('titulo')
    Cadastro de Usuário
@endsection


@section('content')

    @component('componentes.box', ['cor' => 'dark', 'title' => 'Cadastro de Usuário', 'erro' => 1])

        {{Form::open(['route' => 'usuario.novo.post', 'method' => 'post'])}}

        <div class="form-group m-form__group row">
            <div class="col-lg-12">
                <label for="">Nome</label>
                {{Form::text('nome', null, array('class' => 'form-control'))}}

            </div>

        </div>

        <div class="form-group m-form__group row">
            <div class="col-lg-6">
                <label for="">Email</label>
                {{Form::text('email', null, array('class' => 'form-control'))}}

            </div>
            <div class="col-lg-6">
                <label for="">CPF</label>
                {{Form::text('cpf', null, array('class' => 'form-control', 'maxlength' => 11))}}

            </div>

        </div>


        <br><br>

        <div class="form-group row">
            <div class="col-md-12">

                <div class="col-md-1">

                    {{Form::submit('Salvar',['class'=>'btn blue-soft'])}}

                </div>
            </div>

        </div>

        {{Form::close()}}

    @endcomponent

@endsection
