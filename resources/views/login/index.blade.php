<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>Banco de Leiloeiros | Poder Judiciario do Estado de alagoas</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Web font -->


    <!--begin::Base Styles -->
    <link href="{{asset('/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />



    <!--RTL version:<link href="../../../assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <link href="{{asset('demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="../../../assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->


    <!--end::Base Styles -->
    <link rel="shortcut icon" href="../../../assets/demo/default/media/img/logo/favicon.ico" />
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-3" id="m_login" style="background-image: url({{asset('img/banco_leiloeiro3.jpg')}});">
        <div class="m-grid__item m-grid__item--fluid   m-login__wrapper">
            <div class="m-login__container">
                <div class="m-login__logo">
                    <a href="#">
                        <img src="{{asset('img/LogoLeiloeiros2.png')}}">
                    </a>
                </div>
                <div class="m-login__signin">
                    <div class="m-login__head">
                        {{--<h3 class=""><center>Banco de Leiloiros</center></h3>--}}
                    </div>


                    <form class="m-login__form m-form" action="{{route('login.post')}}" method="post">
                        @csrf

                        @if (count($errors) > 0)

                            <div class="m-alert m-alert--outline alert alert-danger alert-dismissible animated fadeIn" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                <span>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </span>
                            </div>

                        @endif

                        @if(Session::has('status'))

                            <div class="m-alert m-alert--outline alert alert-success alert-dismissible animated fadeIn" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                <span>
                                    {{Session::get('status')}}
                                </span>
                            </div>

                        @endif


                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="text" placeholder="CPF" name="cpf" autocomplete="off">
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Senha" name="password">
                        </div>
                        <div class="row m-login__form-sub">
                            <div class="col m--align-left m-login__form-left">
                                <label class="m-checkbox  m-checkbox--light">
                                    <input type="checkbox" name="remember"> Manter conectado
                                    <span></span>
                                </label>
                            </div>
                            <div class="col m--align-right m-login__form-right">
                                <a href="javascript:;" id="m_login_forget_password" class="m-link">Esqueceu a senha ?</a>
                            </div>
                        </div>
                        <div class="m-login__form-action">
                            <button id="" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">Entrar</button>
                        </div>
                    </form>
                </div>
                <div class="m-login__signup">
                    <div class="m-login__head">
                        <h3 class="m-login__title">Cadastrar</h3>
                        <div class="m-login__desc"><b>Preencha os dados solicitados abaixo:</b></div>
                    </div>

                    {{--{{Form::open(['route' => 'usuario.novo.post', 'class' => 'm-login__form m-form'])}}--}}

                    {{--<div class="form-group m-form__group">--}}
                        {{--<input class="form-control m-input" type="text" placeholder="Nome Completo" name="nome">--}}
                    {{--</div>--}}
                    {{--<div class="form-group m-form__group">--}}
                        {{--<input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">--}}
                    {{--</div>--}}
                    {{--<div class="form-group m-form__group">--}}
                        {{--<input class="form-control m-input" type="password" placeholder="Senha" name="senha">--}}
                    {{--</div>--}}
                    {{--<div class="form-group m-form__group">--}}
                        {{--<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Confirma Senha" name="senha_confirmation">--}}
                    {{--</div>--}}



                    {{--<br>--}}
                    {{--<center>  {!! NoCaptcha::display(['data-theme' => 'dark']) !!}</center>--}}

                    {{--<div class="m-login__form-action">--}}
                        {{--<button type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">Cadastrar</button>&nbsp;&nbsp;--}}
                        {{--<button id="m_login_signup_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom m-login__btn">Voltar</button>--}}
                    {{--</div>--}}
                    {{--{{Form::close()}}--}}
                </div>
                <div class="m-login__forget-password">
                    <div class="m-login__head">
                        <h3 class="m-login__title">Esqueceu a Senha ?</h3>
                        <div class="m-login__desc">Preencha os dados solicitados abaixo:</div>
                    </div>
                    <form class="m-login__form m-form" action="">
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
                        </div>
                        <div class="m-login__form-action">
                            <button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">Request</button>&nbsp;&nbsp;
                            <button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom  m-login__btn">Cancel</button>
                        </div>
                    </form>
                </div>
                <div class="m-login__account">
                     <span class="m-login__account-msg">
Ainda não é Cadastrado?                      </span>&nbsp;&nbsp;
                    <a href="javascript:;" id="m_login_signup" class="m-link m-link--light m-login__account-link">Cadastre-se Aqui</a>
                    <br>
                    <br>

                    <a class="m-link m-link--light m-login__account-link"> Telefone:4009-7184 / 40097172</a><br>
                    <a class="m-link m-link--light m-login__account-link"> Email:bancocl@tjal.jus.br</a>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- end:: Page -->

<!--begin::Base Scripts -->
<script src="{{asset('vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>



<!--end::Base Scripts -->

<!--begin::Page Snippets -->
<script src="{{asset('snippets/custom/pages/user/login.js')}}" type="text/javascript"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<!--end::Page Snippets -->
</body>

<!-- end::Body -->
</html>