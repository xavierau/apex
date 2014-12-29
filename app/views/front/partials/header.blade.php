<header>
    <img class="logo" src="{{asset('assets/imgs/logo-bg.jpg')}}"/>
    <div class="lang-links pull-right">
        <ol class="breadcrumb pull-right">
            @foreach(Cache::get('languages') as $language)
                <li><a href="{{route('setLang',$language['iso_code'])}}">{{$language['language']}}</a></li>
            @endforeach
        </ol>
        <span class="pull-right">
            {{Lang::get('frontEndPages.hotline')}}（+852）2682 8516
        </span>
    </div>

</header>

@include('front.partials.blocks.MainMenu')