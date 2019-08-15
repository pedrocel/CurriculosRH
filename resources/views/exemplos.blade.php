<div class="container">
    <h2>Registro de Plantão</h2><br/>
    <form method="post" action="{{url('passports')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-7"></div>
            <div class="form-group col-md-7">
                <lable>Data do Plantão</lable>
                <select name="office">
                    <option value="Mumbai">12/07/1997</option>
                    <option value="Chennai">12/07/1997</option>
                    <option value="Delhi">12/07/1997</option>
                    <option value="Bangalore">12/07/1997</option>
                </select>
            </div>

            <div class="form-group col-md-8">
                <lable>Juiz</lable>
                <select name="office">
                    <option value="Mumbai">Pedro vinicius de souza novais</option>
                    <option value="Chennai">Pedro vinicius de souza novais</option>
                    <option value="Delhi">Pedro vinicius de souza novais</option>
                    <option value="Bangalore">Pedro vinicius de souza novais</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="form-group col-md-12">
                <input type="file" name="filename">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="form-group col-md-12">
                <strong>Date : </strong>
                <input class="date form-control"  type="text" id="datepicker" name="date">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-top:60px">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
</div>


<script type="text/javascript">
    $('#datepicker').datepicker({
        autoclose: true,
        format: 'dd-mm-yyyy'
    });
</script>



//eventosssssssssssssssssssssss



<div class="row">
    <div class="col-md-12">

        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-file"></i>Inscrição</div>

            </div>
            <div class="portlet-body form">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <dt>
                        @foreach ($errors->all() as $error)
                            <dd>{{ $error }}</dd>
                            @endforeach
                            </dt>
                    </div>
                @endif

                @if (Session::has('mensagem'))
                    <div class="alert alert-info">
                        {!!Session::get('mensagem')!!}
                    </div>
                @endif
                @if (Session::has('mensagemErro'))
                    <div class="alert alert-danger">
                        {{Session::get('mensagemErro')}}
                    </div>
            @endif

            <!-- BEGIN FORM-->
                <validator name="validacao" >

                    {{Form::open(['route'=>'estagiario.adicionar.post', 'method'=>'post','novalidate', '@submit'=>"onSubmit"])}}
                    <div class="form-body">
                        <h3 class="form-section">Informações Pessoais</h3>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Nome</label>
                                    {{Form::text('nome',null,['class'=>'form-control','id'=>'nome','placeholder'=>'Nome Candidato'])}}
                                    <span class="help-block"> Campo Obrigatório</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    {{Form::label('CPF',null, ['class'=>'control-label'])}}
                                    {{Form::text('cpf', null, ['id'=>'cpf', 'group'=>'profile', 'class'=>'form-control', 'placeholder'=>'CPF', 'detect-change'=>"off" , 'detect-blur'=>"off"  ,'v-validate:cpf'=>'{required: true, message: "DIGITE O CPF"}'])}}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    {{Form::label('RG',null, ['class'=>'control-label'])}}
                                    {{Form::text('rg', null, ['id'=>'rg', 'class'=>'form-control','placeholder'=>'RG'])}}
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    {{Form::label('Orgão Emissor',null, ['class'=>'control-label'])}}
                                    {{Form::text('orgaoEmissor', null, ['id'=>'orgaoEmissor', 'class'=>'form-control' ,'placeholder'=>'Orgão Emissor'])}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        {{Form::label('Data Nascimento',null, ['class'=>'control-label'])}}
                                        {{Form::text('dataNascimento', null, ['id'=>'dataNascimento', 'class'=>'form-control' ,'placeholder'=>'Data Nascimento'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Nome do Pai</label>
                                    {{Form::text('nome_pai',null,['class'=>'form-control','id'=>'nome_pai','placeholder'=>'Nome do pai'])}}
                                    <span class="help-block"> Campo Obrigatório</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Nome da Mãe</label>
                                    {{Form::text('nome_mae',null,['class'=>'form-control','id'=>'nome_mae','placeholder'=>'Nome da mãe'])}}
                                    <span class="help-block"> Campo Obrigatório</span>
                                </div>
                            </div>
                        </div>
                        <h3 class="form-section">Contato</h3>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">E-mail</label>
                                    {{Form::text('email',null,['class'=>'form-control','id'=>'email','placeholder'=>'E-mail'])}}
                                    <span class="help-block"> Campo Obrigatório</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Fone Fixo</label>
                                    {{Form::text('fixo',null,['class'=>'form-control','id'=>'fixo','placeholder'=>'Fixo'])}}
                                    <span class="help-block"> Campo Obrigatório</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Celular</label>
                                    {{Form::text('celular',null,['class'=>'form-control','id'=>'celular','placeholder'=>'Celular'])}}
                                    <span class="help-block"> Campo Obrigatório</span>
                                </div>
                            </div>
                        </div>
                        <h3 class="form-section">Endereço</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Endereço</label>
                                    {{Form::text('endereco',null,['class'=>'form-control','id'=>'endereco','placeholder'=>'Endereço'])}}
                                    <span class="help-block"> Campo Obrigatório</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">CEP</label>
                                    {{Form::text('cep',null,['class'=>'form-control','id'=>'cep','placeholder'=>'CEP'])}}
                                    <span class="help-block"> Campo Obrigatório</span>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">Complemento</label>
                                    {{Form::text('complemento',null,['class'=>'form-control','id'=>'complemento', 'v-validate:complemento'=>"{
                                      required: { rule: true, message: 'required you password !!' },
                                      minlength: { rule: 8, message: 'your password short too !!' }
                                    }",'detect-change'=>'off', 'detect-blur'=>'off'])}}
                                    <span class="help-block"> Campo Obrigatório</span>
                                </div>
                            </div>
                        </div>
                        <h3 class="form-section">Formação</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Formação</label>
                                    {{Form::select('formacao_id',$formacoes,null,['class'=>'form-control','id'=>'formacao'])}}
                                    <span class="help-block"> Campo Obrigatório</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Faculdade</label>
                                    {{Form::select('faculdade_id',$faculdades,null,['class'=>'form-control','id'=>'formacao'])}}
                                    <span class="help-block"> Campo Obrigatório</span>
                                </div>
                            </div>

                            <input id="confirm" type="password" class="form-control"
                                   detect-change="off" detect-blur="off" v-validate:confirm="{
                      required: { rule: true, message: 'required you confirm password !!' },
                      confirm: { rule: password, message: 'your confirm password incorrect !!' }
                    }" />
                            <p v-if="$validacao.touched && $validacao.confirm.required">Required your name.</p>

                            <input id="cpf1" type="password" class="form-control"
                                   detect-change="off" detect-blur="off" v-validate:cpf1="{
                      required: { rule: true, message: 'required you confirm password !!' },
                      confirm: { rule: password, message: 'your confirm password incorrect !!' }
                    }" />
                        </div>
                        <div class="errors" v-if="$validacao.touched">
                            <validator-errors :validation="$validacao"></validator-errors>
                        </div>
                    </div>
                    <div class="form-actions right">
                        {{Form::button('Cancelar', ['class'=>'btn default'])}}
                        {{Form::submit('Salvar', ['class'=>'btn blue'])}}
                    </div>

                    {{Form::close()}}
                </validator>
                <!-- END FORM-->
            </div>
        </div>
    </div>
</div>
</div>
