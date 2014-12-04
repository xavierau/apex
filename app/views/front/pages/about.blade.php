@extends("front.layouts.default")

@section("content")
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
                    <p>簡介德盛</p>
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

                 <p>德盛顧問，總部位於加拿大溫哥華，並分別在英國倫敦，美國羅省設有辦事處。本公司由多名資深專業顧問開設，熟悉法律、會計等專業範疇，擁有精通各國移民法的專業顧問，提供專業的各國投資移民等顧問服務。</p>
                 <p>本公司俱豐富經驗、熟悉各國移民法規及審核標準的專業顧問團成員，定期和政府有關部門聯繫，以取得最新移民資訊，為客人提供移民計畫的最新消息，保持與移民局的移民要求一致。 本公司的服務範圍相當廣泛，除了一般移民公司提供之移民服務外，還會因應不同客戶的需求，瞬息萬變的移民條例，為客戶整理及審查其個人、公司的資料及資產記錄，為客戶提供專業的諮詢意見，由移民申請到子女入學，本公司亦會代客人悉心安排一切，讓客人可儘快適應新的居住環境。</p>
                 <p>本公司俱有良好的信譽及口碑，以悉心的服務、專業的諮詢、不成功不收費為我們的服務宗旨，確保客戶享受到高質素的專業服務。</p>
            </div>
        </section>
    </div>
</div>
@stop