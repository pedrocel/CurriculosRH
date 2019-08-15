@extends('layouts.master')

@section('titulo')
    Cadastro de Usuário
@endsection


@section('content')

    @component('componentes.box', ['cor' => 'dark', 'title' => 'Cadastro de Upload', 'erro' => 1])

        {{Form::open(['route' => 'local.novo.post', 'method' => 'post', 'files' => true])}}

        <div class="form-group m-form__group row">

            <div class="col-lg-6">
                <label for="">Nome da Vara</label>
                {{Form::text('local_vara', null, array('class' => 'form-control'))}}

            </div>

            <div class="col-lg-6">
                <label for="">Vara</label>
                {{Form::text('vara', null, array('class' => 'form-control'))}}

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

