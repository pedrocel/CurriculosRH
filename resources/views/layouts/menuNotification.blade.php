<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
    <div class="m-stack__item m-topbar__nav-wrapper">
        <ul class="m-topbar__nav m-nav m-nav--inline">

            <li class="m-nav__item m-topbar__languages m-dropdown m-dropdown--small m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--mobile-full-width" m-dropdown-toggle="click" aria-expanded="true">
                <a href="#" class="m-nav__link m-dropdown__toggle">
		<span class="m-nav__link-text">
			<img class="m-topbar__language-selected-img" src="">
		</span>
                </a>
                <div class="m-dropdown__wrapper" style="z-index: 101;">
                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 5px;"></span>
                    <div class="m-dropdown__inner">
                        <div class="m-dropdown__header m--align-center" style="background: url({{asset('')}}); background-size: cover;">
                            <span class="m-dropdown__header-subtitle">Select your language</span>
                        </div>
                        <div class="m-dropdown__body">
                            <div class="m-dropdown__content">
                                <ul class="m-nav m-nav--skin-light">
                                   {{--@foreach(auth()->user()->perfis as $permissoes)--}}
                                    {{--<li class="m-nav__item m-nav__item--active">--}}
                                        {{--<a href="{{route('usuario.alterar.perfil.get', $permissoes->id)}}" class="m-nav__link m-nav__link--active">--}}
                                            {{--<span class="m-nav__link-icon"><img class="m-topbar__language-img"></span>--}}
                                            {{--<span class="m-nav__link-title m-topbar__language-text m-nav__link-text">{{$permissoes->perfil->nome}}</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                       {{--@endforeach--}}

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
                <a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic">
                                    <img src="{{asset('img/user4.png')}}">
												</span>
                    <span class="m-topbar__username m--hide">Nick</span>
                </a>
                <div class="m-dropdown__wrapper">
                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                    <div class="m-dropdown__inner">
                        <div class="m-dropdown__header m--align-center" style="background: url(../../../public/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
                            <div class="m-card-user m-card-user--skin-dark">
                                <div class="m-card-user__pic">

                                    <img src="{{asset('img/user4.png')}}">
{{--                                    {{Html::image('app/public/img/user4.jpg', null, array('class' => 'm--img-rounded m--marginless'))}}--}}

    {{--<span class="m-type m-type--lg m--bg-danger"><span class="m--font-light">S<span><span>--}}
                                </div>
                                <div class="m-card-user__details">
                                    <span class="m-card-user__name m--font-weight-500">Teste</span>
                                    <a href="" class="m-card-user__email m--font-weight-300 m-link">Teste</a>
                                </div>
                            </div>
                        </div>
                        <div class="m-dropdown__body">
                            <div class="m-dropdown__content">
                                <ul class="m-nav m-nav--skin-light">
                                    <li class="m-nav__section m--hide">
                                        <span class="m-nav__section-text">Section</span>
                                    </li>

                                    <li class="m-nav__item">
                                        {{--<a href="{{route('usuario.alterar.senha.get')}}" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Alterar Senha</a>--}}
                                        {{--&nbsp;&nbsp;--}}
                                        <a href="{{route('logout.get')}}" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Sair</a>

                                    </li>
                                    {{--<li class="m-nav__item">--}}
                                    {{--</li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</div>
