@extends("front.layouts.default")

@section("content")
<div class="row">
    <div class="bannerContainer">
        <img src="{{asset('assets/imgs/about_work_banner.jpg')}}" alt=""/>
    </div>
    <div class="col-xs-3">
        @include("...partials.leftSidebarAll")
    </div>
    <div class="col-xs-9">
        <section class="content" style="background-image: url('{{asset('assets/imgs/education_background.jpg')}}')">
            <div class="content-wrapper">
                <div class="title">
                    <p>升學顧問</p>
                    <span class="arrow"></span>
                </div>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" id="content-carousel">
                  <!-- Indicators -->
                  <ol class=" pull-right" id="indicator" style="">
                      <li data-target="#carousel-example-generic" data-slide-to="2">3</li>
                      <li data-target="#carousel-example-generic" data-slide-to="1">2</li>
                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active">1</li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="http://www07.abb.com/images/default-source/smart-grids/room_932_277.jpg?sfvrsn=0&CropWidth=1205&CropHeight=359&Quality=High&CropX=0&CropY=0&Width=852&Height=254&Method=CropToFixedAreaCropToFixedAreaArguments&Key=10c7da8cb8c08ee2a5c86ccbee729a59" alt="...">
                      <div class="carousel-caption">

                      </div>
                    </div>
                    <div class="item">
                      <img src="http://www07.abb.com/images/librariesprovider15/master-images/power-update-header.jpg?sfvrsn=1&CropWidth=1183&CropHeight=353&Quality=High&CropX=0&CropY=0&Width=852&Height=254&Method=CropToFixedAreaCropToFixedAreaArguments&Key=bb68b95e1e46034144414be991bbd2d0" alt="...">
                      <div class="carousel-caption">

                      </div>
                    </div>
                    <div class="item">
                      <img src="http://www.spreewiesel.de/spreewieselcenter/images/layout_02.jpg" alt="...">
                      <div class="carousel-caption">

                      </div>
                    </div>
                  </div>

                  <!-- Controls -->
                  {{--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">--}}
                    {{--<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>--}}
                    {{--<span class="sr-only">Previous</span>--}}
                  {{--</a>--}}
                  {{--<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">--}}
                    {{--<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>--}}
                    {{--<span class="sr-only">Next</span>--}}
                  {{--</a>--}}
                </div>

                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab, ad alias aut, deserunt doloremque doloribus earum eius iste, magnam numquam officia placeat praesentium provident quibusdam quidem reprehenderit unde voluptatum.</p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cum dolor eligendi nam necessitatibus praesentium recusandae sint tempora vero voluptas!</p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci alias, amet aspernatur doloremque eligendi enim inventore ipsum magni nisi obcaecati quae quaerat sapiente vitae?</p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et minima neque quibusdam sunt totam? Animi architecto cum doloribus error in neque quidem quo sapiente ullam. Mollitia pariatur quod quos temporibus! Autem facere itaque nulla voluptas.</p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A asperiores dicta ducimus esse exercitationem fuga neque quo veniam voluptatum! Fuga.</p>
                 <div class="row">
                    <div class="col-xs-2"><img class="img-responsive" src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Tesoro_High_School_Logo.svg/256px-Tesoro_High_School_Logo.svg.png" alt=""/></div><div class="col-xs-2"><img class="img-responsive" src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Tesoro_High_School_Logo.svg/256px-Tesoro_High_School_Logo.svg.png" alt=""/></div><div class="col-xs-2"><img class="img-responsive" src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Tesoro_High_School_Logo.svg/256px-Tesoro_High_School_Logo.svg.png" alt=""/></div><div class="col-xs-2"><img class="img-responsive" src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Tesoro_High_School_Logo.svg/256px-Tesoro_High_School_Logo.svg.png" alt=""/></div><div class="col-xs-2"><img class="img-responsive" src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Tesoro_High_School_Logo.svg/256px-Tesoro_High_School_Logo.svg.png" alt=""/></div><div class="col-xs-2"><img class="img-responsive" src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Tesoro_High_School_Logo.svg/256px-Tesoro_High_School_Logo.svg.png" alt=""/></div>
                 </div>
                 <div class="row">
                     <div class="col-xs-2"><img class="img-responsive" src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Tesoro_High_School_Logo.svg/256px-Tesoro_High_School_Logo.svg.png" alt=""/></div><div class="col-xs-2"><img class="img-responsive" src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Tesoro_High_School_Logo.svg/256px-Tesoro_High_School_Logo.svg.png" alt=""/></div><div class="col-xs-2"><img class="img-responsive" src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Tesoro_High_School_Logo.svg/256px-Tesoro_High_School_Logo.svg.png" alt=""/></div><div class="col-xs-2"><img class="img-responsive" src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Tesoro_High_School_Logo.svg/256px-Tesoro_High_School_Logo.svg.png" alt=""/></div><div class="col-xs-2"><img class="img-responsive" src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Tesoro_High_School_Logo.svg/256px-Tesoro_High_School_Logo.svg.png" alt=""/></div><div class="col-xs-2"><img class="img-responsive" src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Tesoro_High_School_Logo.svg/256px-Tesoro_High_School_Logo.svg.png" alt=""/></div>
                  </div>
                 <div class="clearfix"></div>
            </div>
        </section>
    </div>
</div>
@stop