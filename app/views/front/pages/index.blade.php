@extends('front.layouts.default')

@section('content')
    @include('front.partials.indexBanner')
    @include('front.partials.indexBox')
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
                            @for($i=0; $i<count($immigrations); $i++)
                                @foreach($immigrations as $immigration)
                                @if($i%2 == 0)
                                    <div class="row">
                                @endif
                                <div class="col-xs-6">
                                     <div class="summary">
                                         <img src="{{asset('assets/imgs/italy.jpg')}}" alt=""/>
                                         <div class="summary">
                                            <h5 class="heading">{{$immigration->title}}</h5>
                                             <div class="index-content">
                                                 {{$immigration->content}}
                                             </div>
                                            <a class="theme-button pull-right" href="{{route("front.pages.immigration")."/?country=$immigration->identifier"}}">更多消息</a>
                                            <div class="clearfix"></div>
                                         </div>
                                    </div>
                                </div>

                            @if($i%2 == 0)
                            </div>
                            @endif
                                @endforeach
                            @endfor
                            <a href="" class="pull-right">更多消息</a>
                        </div>
                        <div class="col-xs-2">
                                <ul class="country-list">
                                    <li><a href="{{route('immigration','hongkong')}}"><p>香港</p><img src="{{asset('assets/imgs/hongkong-sm.jpg')}}" alt=""/></a></li>
                                    <li><a href="{{route('immigration','england')}}"><p>英國</p><img src="{{asset('assets/imgs/england-sm.jpg')}}" alt=""/></a></li>
                                    <li><a href="{{route('immigration','usa')}}"><p>美國</p><img src="{{asset('assets/imgs/usa-sm.jpg')}}" alt=""/></a></li>
                                    <li><a href="{{route('immigration','ireland')}}"><p>愛爾蘭</p><img src="{{asset('assets/imgs/ireland-sm.jpg')}}" alt=""/></a></li>
                                    <li><a href="{{route('immigration','australia')}}"><p>澳洲</p><img src="{{asset('assets/imgs/australia-sm.jpg')}}" alt=""/></a></li>
                                    <li><a href="{{route('immigration','kitts')}}"><p>聖基茨</p><img src="{{asset('assets/imgs/kitts-sm.jpg')}}" alt=""/></a></li>
                                    <li><a href="{{route('immigration','korea')}}"><p>韓國</p><img src="{{asset('assets/imgs/korea-sm.jpg')}}" alt=""/></a></li>
                                    <li><a href="{{route('immigration','hungray')}}"><p>匈牙利</p><img src="{{asset('assets/imgs/huguary-sm.jpg')}}" alt=""/></a></li>
                                    <li><a href="{{route('immigration','taiwan')}}"><p>台灣</p><img src="{{asset('assets/imgs/taiwan-sm.jpg')}}" alt=""/></a></li>
                                    <li><a href="{{route('immigration','protugal')}}"><p>葡萄牙</p><img src="{{asset('assets/imgs/portugal-sm.jpg')}}" alt=""/></a></li>
                                    <li><a href="{{route('immigration','malaysia')}}"><p>馬來西亞</p><img src="{{asset('assets/imgs/malaysia-sm.jpg')}}" alt=""/></a></li>
                                    <li><a href="{{route('immigration','spain')}}"><p>西班牙</p><img src="{{asset('assets/imgs/spain-sm.jpg')}}" alt=""/></a></li>
                                    <li><a href="{{route('immigration','singapore')}}"><p>新加坡</p><img src="{{asset('assets/imgs/singapore-sm.jpg')}}" alt=""/></a></li>
                                    <li><a href="{{route('immigration','italy')}}"><p>意大利</p><img src="{{asset('assets/imgs/italy-sm.jpg')}}" alt=""/></a></li>
                                    <li><a href="{{route('immigration','canada')}}"><p>加拿大 </p><img src="{{asset('assets/imgs/canada-sm.jpg')}}" alt=""/></a></li>
                                    <li><a href="{{route('immigration','holland')}}"><p>荷蘭</p><img src="{{asset('assets/imgs/holland-sm.jpg')}}" alt=""/></a></li>
                                    <li><a href="{{route('immigration','saipan')}}"><p>塞班島</p><img src="{{asset('assets/imgs/saipan-sm.jpg')}}" alt=""/></a></li>
                                    <li><a href="{{route('immigration','cyprus')}}"><p>浦路斯</p><img src="{{asset('assets/imgs/cyprus-sm.jpg')}}" alt=""/></a></li>
                                </ul>
                        </div>
                    </div>
                    <div class="row education">
                     <div class="title">
                        <p>{{Lang::get('frontEndPages.title_education')}}</p>
                        <span class="arrow"></span>
                     </div>
                     <div class="row">
                        <div class="col-xs-4 school">
                            <img class="" src="1212" alt=""/>
                            <div class="description">
                                <h4 class="sch-name">Lorem ipsum dolor sit amet.</h4>
                                <h5 class="subject">Lorem ipsum dolor sit amet.</h5>
                                <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam eveniet ipsa libero nesciunt nostrum quia reiciendis sapiente sequi veritatis!</p>
                            </div>
                        </div>
                        <div class="col-xs-4 school">
                            <img class="" src="1212" alt=""/>
                            <div class="description">
                                <h4 class="sch-name">Lorem ipsum dolor sit amet.</h4>
                                <h5 class="subject">Lorem ipsum dolor sit amet.</h5>
                                <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam eveniet ipsa libero nesciunt nostrum quia reiciendis sapiente sequi veritatis!</p>
                            </div>
                        </div>
                        <div class="col-xs-4 school">
                            <img class="" src="1212" alt=""/>
                            <div class="description">
                                <h4 class="sch-name">Lorem ipsum dolor sit amet.</h4>
                                <h5 class="subject">Lorem ipsum dolor sit amet.</h5>
                                <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam eveniet ipsa libero nesciunt nostrum quia reiciendis sapiente sequi veritatis!</p>
                            </div>
                        </div>
                     </div>
                    </div>
                    <div class="row property">
                        <div class="col-xs-6 rental">
                            <div class="title">
                                <p>{{Lang::get('frontEndPages.title_rental_management')}}</p>
                                <span class="arrow"></span>
                             </div>
                             <ul class="country-list">
                                 <li><a href=""><p>香港</p><img src="{{asset('assets/imgs/hongkong-md.jpg')}}" alt=""/></a></li>
                                 <li><a href=""><p>英國</p><img src="{{asset('assets/imgs/england-md.jpg')}}" alt=""/></a></li>
                                 <li><a href=""><p>美國</p><img src="{{asset('assets/imgs/usa-md.jpg')}}" alt=""/></a></li>
                             </ul>
                        </div>
                        <div class="col-xs-6 investment">
                            <div class="title">
                                <p>{{Lang::get('frontEndPages.title_overseas_property_investment')}}</p>
                                <span class="arrow"></span>
                             </div>
                             <ul>
                                  <li><a href=""><p>香港</p><img src="{{asset('assets/imgs/hongkong-md.jpg')}}" alt=""/></a></li>
                                  <li><a href=""><p>英國</p><img src="{{asset('assets/imgs/england-md.jpg')}}" alt=""/></a></li>
                                  <li><a href=""><p>美國</p><img src="{{asset('assets/imgs/usa-md.jpg')}}" alt=""/></a></li>
                              </ul>
                        </div>
                    </div>
                </div>
        </div>
    </div>

@stop