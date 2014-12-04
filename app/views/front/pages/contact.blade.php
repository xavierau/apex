@extends("front.layouts.default")

@section("content")
<div class="row">
    <div class="bannerContainer">
        <img src="{{asset('assets/imgs/about_banner.jpg')}}" alt=""/>
    </div>
    <div class="col-xs-3">
        @include("front.partials.leftsidebar")
    </div>
    <div class="col-xs-9">
        <section class="content">
            <div class="content-wrapper">
                <div class="title">
                    <p>聯絡我們</p>
                    <span class="arrow"></span>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3691.3424055075698!2d114.17304200000001!3d22.302886599999997!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340400ebf8713b13%3A0x9cb900c9aef328a!2sHillwood+Centre%2C+17-19+Hillwood+Rd%2C+Tsim+Sha+Tsui%2C+Hong+Kong!5e0!3m2!1sen!2s!4v1416912566887" width="100%" height="450" frameborder="0" style="border:0"></iframe>

                <p>總行地址：尖沙咀山林道17-19號 山林中心'1003室</p>
                <p>電話：(852) 2682 8516</p>
                <p>電郵：info@apexconsultancy.com.hk</p>

                 <div class="title">
                    <p>網上諮詢</p>
                    <span class="arrow"></span>
                </div>

                {{Form::open(["class"=>"form-horizontal", "id"=>"contact-form"])}}
                    {{-- Name Form Input--}}
                    <div class="form-group">
                        {{Form::label("name","你的姓名:", ["class"=>"col-sm-2 control-label"])}}
                         <div class="col-sm-10">
                            {{Form::text("name",null,["class"=>"form-control"])}}
                         </div>
                    </div>
                    {{-- Name Form Input--}}
                    <div class="form-group">
                        {{Form::label("name","你的電話:", ["class"=>"col-sm-2 control-label"])}}
                         <div class="col-sm-10">
                            {{Form::text("name",null,["class"=>"form-control"])}}
                         </div>
                    </div>
                    {{-- Email Form Input--}}
                    <div class="form-group">
                        {{Form::label("email","你的電郵:", ["class"=>"col-sm-2 control-label"])}}
                         <div class="col-sm-10">
                            {{Form::input("email", "email",null,["class"=>"form-control"])}}
                         </div>
                    </div>
                    {{-- Message Form Input--}}
                    <div class="form-group">
                        {{Form::label("message","訊息內容:", ["class"=>"col-sm-2 control-label"])}}
                         <div class="col-sm-10">
                            {{Form::textarea("message",null,["class"=>"form-control"])}}
                         </div>
                    </div>

                    <label class="col-sm-6 control-label">
                      <input type="checkbox" name="contactme"> 我希望收到 德盛(大中華)有限公司寄給我的最新資訊。
                    </label>
                    {{Form::submit("發送", ["class"=>"pull-right theme-button"])}}
                    {{Form::input("reset", "reset","重新填寫", ["class"=>"pull-right theme-button"])}}
                {{Form::close()}}
                <div class="clearfix"></div>
            </div>


        </section>

    </div>

</div>
@stop