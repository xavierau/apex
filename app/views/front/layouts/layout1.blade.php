@include('front.partials.head')
<div id="wrapper">
    <div id="outterContainer">
        @include('front.partials.header')
        @include('front.partials.righticons')
        <div class="row">
            <div class="bannerContainer">
                <img src="{{asset('assets/imgs/about_work_banner.jpg')}}" alt=""/>
            </div>
            <div class="col-xs-3">
                @include("front.partials.leftSidebarForm")
            </div>
            <div class="col-xs-9">
                <section class="content" style="background-image: url('{{asset('assets/imgs/about_work_background.jpg')}}')">
                    <div class="content-wrapper">
                        <div class="title">
                            <p>{{Lang::get('frontEndPages.title_about')}}</p>
                            <span class="arrow"></span>
                        </div>
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" id="content-carousel">
                            <!-- Indicators -->
                            <ol class=" pull-right" id="indicator" style="">
                                @for($i = $medias->count(); $i>0; $i--)
                                    @if($i==0)
                                        <li data-target="#carousel-example-generic" data-slide-to="{{$i-1}}" class="active">{{$i}}</li>
                                    @else
                                        <li data-target="#carousel-example-generic" data-slide-to="{{$i-1}}">{{$i}}</li>
                                    @endif
                                @endfor
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <?php $i=0 ?>
                                @foreach($medias as $media)
                                    @if($i==0)
                                        <div class="item active">
                                            <img src="{{$media->uri}}" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <?php $i=1 ?>
                                    @else
                                        <div class="item">
                                            <img src="{{$media->uri}}" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="content-block">
                            @yield('content')
                        </div>
                    </div>
                </section>
            </div>
        </div>
        @include('front.partials.footer')
    </div>
</div>
@include('front.partials.blocks.js')