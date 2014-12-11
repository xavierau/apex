<header>
    <img class="logo" src="{{asset('assets/imgs/logo-bg.jpg')}}"/>
    <div class="lang-links pull-right">
        <ol class="breadcrumb pull-right">
          <li><a href="{{route('setLang','chi')}}">繁體</a></li>
          <li><a href="{{route('setLang','chi')}}">簡體</a></li>
          <li><a href="{{route('setLang','en')}}">English</a></li>
        </ol>
        <span class="pull-right">
            {{Lang::get('frontEndPages.hotline')}}（+852）2682 8516
        </span>
    </div>

</header>

@include('front.partials.blocks.MainMenu')