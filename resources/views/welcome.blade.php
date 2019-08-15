@extends('layouts.master')

@section('titulo')
Plantões
@endsection


@section('content')

    @component('componentes.box', ['cor' => 'dark', 'title' => 'Plantões', 'erro' => 0])


        <div class="row">
            <div class="col-md-12">
                <div class="portlet box blue-hoki">
                    <div class="portlet-title">

                    </div>
                    <div class="portlet-body">
                        <!-- BEGIN FORM-->

                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th><center>Data</center></th>
                                        <th><center>Juiz</center></th>
                                        <th><center>Local da Vara </center></th>
                                        <th><center>Vara</center></th>
                                        <th><center>Ações</center></th>

                                    </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <!-- END FORM-->
                    </div>
                </div>
            </div>
        </div>

    @endcomponent

@endsection

