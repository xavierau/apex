@extends("front.layouts.default")

@section("content")
<div class="row">
    <div class="bannerContainer">
        <img src="{{asset('assets/imgs/immigration_banner.jpg')}}" alt=""/>
    </div>
    <div class="col-xs-3">
        @include("front.partials.leftSideBarAll")
    </div>
    <div class="col-xs-9">
        <section class="content" style="background-image: url('{{asset('assets/imgs/immigration_background.jpg')}}')">
            <div class="content-wrapper">
                <div class="title">
                    <p>{{Lang::get('frontEndPages.title_invesment_immigration')}}</p>
                    <span class="arrow"></span>
                </div>

                <img class="img-responsive heading-img" src="{{asset('assets/imgs/immigration_1.jpg')}}" width="100%" alt=""/>

                @if ($type == "country")
                    <div class="immigration_content">
                        {{$content}}
                    </div>
                    
                @endif


                <div class="row countries-icon">
                    <div class="col-xs-4">
                        <a href="{{route('immigration','hongkong')}}">
                            <p>香港</p>
                            <img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_hongkong.jpg')}}" alt=""/>
                        </a>
                        
                    </div>
                    <div class="col-xs-4">
                        <a href="{{route('immigration', 'canada')}}">
                            <p>加拿大</p>
                            <img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_canada.jpg')}}" alt=""/>
                        </a>                        
                    </div>
                    <div class="col-xs-4">
                        <a href="{{route('immigration', 'italy')}}">
                             <p>意大利</p>
                            <img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_italy.jpg')}}" alt=""/>
                        </a>
                       
                    </div>
                    <div class="col-xs-4">
                        <a href="{{route('immigration', 'malaysia')}}">
                            <p>馬來西亞</p>
                            <img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_malaysia.jpg')}}" alt=""/>
                        </a>
                        
                    </div>
                    <div class="col-xs-4">
                        <a href="{{route('immigration', 'protugal')}}">
                            <p>葡萄牙</p>
                            <img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_protugal.jpg')}}" alt=""/>
                        </a>
                        
                    </div>
                    <div class="col-xs-4">
                        <a href="{{route('immigration', 'spain')}}">
                            <p>西班牙</p>
                            <img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_spain.jpg')}}" alt=""/>
                        </a>
                        
                    </div>
                    <div class="col-xs-4">
                        <a href="{{route('immigration', 'taiwan')}}">
                            <p>台灣</p>
                            <img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_taiwan.jpg')}}" alt=""/>
                        </a>
                        
                    </div>
                    <div class="col-xs-4">
                        <a href="{{route('immigration', 'hungary')}}">
                            <p>匈牙利</p>
                            <img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_hungary.jpg')}}" alt=""/>
                        </a>
                        
                    </div>
                    <div class="col-xs-4">
                        <a href="{{route('immigration', 'singapore')}}">
                            <p>新加坡</p>
                            <img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_singarpore.jpg')}}" alt=""/>
                        </a>
                        
                    </div>
                    <div class="col-xs-4">
                        <a href="{{route('immigration', 'korea')}}">
                            <p>韓國</p>
                            <img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_korea.jpg')}}" alt=""/>
                        </a>
                        
                    </div>
                    <div class="col-xs-4">
                        <a href="{{route('immigration', 'kitts')}}">
                            <p>聖基茨</p>
                            <img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_kitts.jpg')}}" alt=""/>
                        </a>
                        
                    </div>
                    <div class="col-xs-4">
                        <a href="{{route('immigration', 'australia')}}">
                            <p>澳洲</p>
                            <img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_australia.jpg')}}" alt=""/>
                        </a>
                        
                    </div>
                    <div class="col-xs-4">
                        <a href="{{route('immigration', 'ireland')}}">
                            <p>愛爾蘭</p>
                            <img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_ireland.jpg')}}" alt=""/>
                        </a>
                        
                    </div>
                    <div class="col-xs-4">
                        <a href="{{route('immigration', 'cyprus')}}">
                            <p>浦路斯</p>
                            <img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_cyprus.jpg')}}" alt=""/>
                        </a>
                        
                    </div>
                    <div class="col-xs-4">
                        <a href="{{route('immigration', 'saipan')}}">
                            <p>塞班島</p>
                            <img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_saipan.jpg')}}" alt=""/>
                        </a>
                        
                    </div>
                    <div class="col-xs-4">
                        <a href="{{route('immigration', 'holland')}}">
                            <p>荷蘭</p>
                            <img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_holland.jpg')}}" alt=""/>
                        </a>
                        
                    </div>
                    <div class="col-xs-4">
                        <a href="{{route('immigration', 'usa')}}">
                            <p>美國</p>
                            <img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_usa.jpg')}}" alt=""/>
                        </a>
                        
                    </div>
                    <div class="col-xs-4">
                        <a href="{{route('immigration', 'england')}}">
                            <p>英國</p>
                            <img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_england.jpg')}}" alt=""/>
                        </a>
                        
                    </div>

                </div>

                @if ($type == "default")
                    {{$content}}
                @endif


                 <div class="clearfix"></div>
            </div>
        </section>
    </div>
</div>
@stop