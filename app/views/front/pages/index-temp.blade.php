@extends('front.layouts.default')

@section('style')
    <style>
        div.list{
            color:white;
        }
        div.list>div.text-center{
            margin-top: 30px;
        }
    </style>
@stop

@section('content')
    @include('front.partials.indexBanner')

    <div class="row">
        <div class="col-xs-3">
            @include('front.partials.leftSidebarForm')
        </div>
        <div class="col-xs-9 index-page">
            <div class="content-wrapper">
                <div class="row">
                    <div class="title">
                        <p>{{Lang::get('frontEndPages.title_invesment_immigration')}}</p>
                        <span class="arrow"></span>
                    </div>
                    <div class="col-xs-10">
                        @foreach($immigrations->chunk(2) as $chunk)
                            <div class="row">
                                @foreach($chunk as $immigration)
                                    <div class="col-xs-6">
                                        <div class="summary">
                                            <img src="{{asset("assets/imgs/$immigration->identifier.jpg")}}" alt="" />

                                            <div class="summary">
                                                <h5 class="heading">{{$immigration->title}}</h5>
                                                <span class="border-bottom"></span>

                                                <div class="index-content">
                                                    {{$immigration->content}}
                                                </div>
                                                <a class="theme-button pull-right"
                                                   href="{{route('immigration')}}/{{$immigration->identifier}}">更多消息</a>

                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                        <a href="{{route('immigration')}}" class="pull-right">更多消息</a>
                    </div>
                    <div class="col-xs-2">
                        <ul class="country-list">
                            <li><a href="{{route('immigration','hongkong')}}"><p>香港</p><img
                                            src="{{asset('assets/imgs/hongkong-sm.jpg')}}" alt="" /></a></li>
                            <li><a href="{{route('immigration','england')}}"><p>英國</p><img
                                            src="{{asset('assets/imgs/england-sm.jpg')}}" alt="" /></a></li>
                            <li><a href="{{route('immigration','usa')}}"><p>美國</p><img
                                            src="{{asset('assets/imgs/usa-sm.jpg')}}" alt="" /></a></li>
                            <li><a href="{{route('immigration','ireland')}}"><p>愛爾蘭</p><img
                                            src="{{asset('assets/imgs/ireland-sm.jpg')}}" alt="" /></a></li>
                            <li><a href="{{route('immigration','australia')}}"><p>澳洲</p><img
                                            src="{{asset('assets/imgs/australia-sm.jpg')}}" alt="" /></a></li>
                            <li><a href="{{route('immigration','kitts')}}"><p>聖基茨</p><img
                                            src="{{asset('assets/imgs/kitts-sm.jpg')}}" alt="" /></a></li>
                            <li><a href="{{route('immigration','korea')}}"><p>韓國</p><img
                                            src="{{asset('assets/imgs/korea-sm.jpg')}}" alt="" /></a></li>
                            <li><a href="{{route('immigration','hungray')}}"><p>匈牙利</p><img
                                            src="{{asset('assets/imgs/huguary-sm.jpg')}}" alt="" /></a></li>
                            <li><a href="{{route('immigration','taiwan')}}"><p>台灣</p><img
                                            src="{{asset('assets/imgs/taiwan-sm.jpg')}}" alt="" /></a></li>
                            <li><a href="{{route('immigration','protugal')}}"><p>葡萄牙</p><img
                                            src="{{asset('assets/imgs/portugal-sm.jpg')}}" alt="" /></a></li>
                            <li><a href="{{route('immigration','malaysia')}}"><p>馬來西亞</p><img
                                            src="{{asset('assets/imgs/malaysia-sm.jpg')}}" alt="" /></a></li>
                            <li><a href="{{route('immigration','spain')}}"><p>西班牙</p><img
                                            src="{{asset('assets/imgs/spain-sm.jpg')}}" alt="" /></a></li>
                            <li><a href="{{route('immigration','singapore')}}"><p>新加坡</p><img
                                            src="{{asset('assets/imgs/singapore-sm.jpg')}}" alt="" /></a></li>
                            <li><a href="{{route('immigration','italy')}}"><p>意大利</p><img
                                            src="{{asset('assets/imgs/italy-sm.jpg')}}" alt="" /></a></li>
                            <li><a href="{{route('immigration','cananda')}}"><p>加拿大 </p><img
                                            src="{{asset('assets/imgs/canada-sm.jpg')}}" alt="" /></a></li>
                            <li><a href="{{route('immigration','holland')}}"><p>荷蘭</p><img
                                            src="{{asset('assets/imgs/holland-sm.jpg')}}" alt="" /></a></li>
                            <li><a href="{{route('immigration','saipan')}}"><p>塞班島</p><img
                                            src="{{asset('assets/imgs/saipan-sm.jpg')}}" alt="" /></a></li>
                            <li><a href="{{route('immigration','cyprus')}}"><p>浦路斯</p><img
                                            src="{{asset('assets/imgs/cyprus-sm.jpg')}}" alt="" /></a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 list clearfix">
                        <div class="col-xs-4 text-center">
                            <div class="text-center">升學顧問 </div>
                            <div class="">
                                <img src="{{asset('assets/imgs/school.png')}}"  width="25%"/>
                            </div>
                        </div>
                        <div class="col-xs-4 text-center">
                            <div class="text-center">物業租務管理 </div>
                            <div class="">
                                <img src="{{asset('assets/imgs/property.png')}}"  width="25%"/>
                            </div>
                        </div>
                        <div class="col-xs-4 text-center">
                            <div class="text-center">海外房產投資</div>
                            <div class="">
                                <img src="{{asset('assets/imgs/house.png')}}"  width="25%"/>
                            </div>
                        </div>
                        <div class="col-xs-12 text-center">
                            <h3>外國升學 海外物業投資 顧問 </h3>
                            <h4>更多資訊 請致電 ( +852 ) 2682 8516</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop