@extends('layouts.master')

@section('titulo')
    Plantões
@endsection


@section('content')

    @component('componentes.box', ['cor' => 'dark', 'title' => 'Plantões', 'erro' => 1])



    @endcomponent

@endsection

