@extends('layouts.master')

@section('titulo')
Perfil
@endsection


@section('content')

    @component('componentes.box', ['cor' => 'dark', 'title' => 'Perfil', 'erro' => 0])

    {{Form::open(['route' => 'usuario.novo.post', 'method' => 'post'])}}

<div class="form-group m-form__group row">
    <div class="col-lg-12">
        <label for="">Perfil</label>
        {{Form::text('perfil', null, array('class' => 'form-control'))}}
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

