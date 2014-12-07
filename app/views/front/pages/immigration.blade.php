@extends("front.layouts.default")

@section("content")
<div class="row">
    <div class="bannerContainer">
        <img src="{{asset('assets/imgs/immigration_banner.jpg')}}" alt=""/>
    </div>
    <div class="col-xs-3">
        @include("front.partials.leftSidebarAll")
    </div>
    <div class="col-xs-9">
        <section class="content" style="background-image: url('{{asset('assets/imgs/immigration_background.jpg')}}')">
            <div class="content-wrapper">
                <div class="title">
                    <p>海外房產投資</p>
                    <span class="arrow"></span>
                </div>

                <img class="img-responsive heading-img" src="{{asset('assets/imgs/immigration_1.jpg')}}" width="100%" alt=""/>
                <div class="row countries-icon">
                    <div class="col-xs-4"><img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_canada.jpg')}}" alt=""/></div><div class="col-xs-4"><img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_canada.jpg')}}" alt=""/></div><div class="col-xs-4"><img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_canada.jpg')}}" alt=""/></div><div class="col-xs-4"><img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_canada.jpg')}}" alt=""/></div><div class="col-xs-4"><img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_canada.jpg')}}" alt=""/></div><div class="col-xs-4"><img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_canada.jpg')}}" alt=""/></div><div class="col-xs-4"><img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_canada.jpg')}}" alt=""/></div><div class="col-xs-4"><img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_canada.jpg')}}" alt=""/></div><div class="col-xs-4"><img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_canada.jpg')}}" alt=""/></div><div class="col-xs-4"><img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_canada.jpg')}}" alt=""/></div><div class="col-xs-4"><img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_canada.jpg')}}" alt=""/></div><div class="col-xs-4"><img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_canada.jpg')}}" alt=""/></div><div class="col-xs-4"><img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_canada.jpg')}}" alt=""/></div><div class="col-xs-4"><img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_canada.jpg')}}" alt=""/></div><div class="col-xs-4"><img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_canada.jpg')}}" alt=""/></div><div class="col-xs-4"><img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_canada.jpg')}}" alt=""/></div><div class="col-xs-4"><img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_canada.jpg')}}" alt=""/></div><div class="col-xs-4"><img class="img-responsive" width="100%" src="{{asset('assets/imgs/immigration_canada.jpg')}}" alt=""/></div>
                </div>

                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab, ad alias aut, deserunt doloremque doloribus earum eius iste, magnam numquam officia placeat praesentium provident quibusdam quidem reprehenderit unde voluptatum.</p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cum dolor eligendi nam necessitatibus praesentium recusandae sint tempora vero voluptas!</p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci alias, amet aspernatur doloremque eligendi enim inventore ipsum magni nisi obcaecati quae quaerat sapiente vitae?</p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et minima neque quibusdam sunt totam? Animi architecto cum doloribus error in neque quidem quo sapiente ullam. Mollitia pariatur quod quos temporibus! Autem facere itaque nulla voluptas.</p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A asperiores dicta ducimus esse exercitationem fuga neque quo veniam voluptatum! Fuga.</p>


                 <div class="clearfix"></div>
            </div>
        </section>
    </div>
</div>
@stop