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
                    <p>{{Lang::get('frontEndPages.title_contact_us')}}</p>
                    <span class="arrow"></span>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3691.3424055075698!2d114.17304200000001!3d22.302886599999997!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340400ebf8713b13%3A0x9cb900c9aef328a!2sHillwood+Centre%2C+17-19+Hillwood+Rd%2C+Tsim+Sha+Tsui%2C+Hong+Kong!5e0!3m2!1sen!2s!4v1416912566887" width="100%" height="450" frameborder="0" style="border:0"></iframe>

                <p>總行地址：尖沙咀山林道17-19號 山林中心 1601室</p>
                <p>電話：(852) 2682 8516</p>
                <p>電郵：info@apexconsultancy.com.hk</p>

                 <div class="title">
                    <p>網上諮詢</p>
                    <span class="arrow"></span>
                </div>

                {{Form::open(["class"=>"form-horizontal", "id"=>"contact-form"])}}
                    {{-- Name Form Input--}}
                    <div class="form-group">
                        {{Form::label("name",Lang::get('frontEndPages.sidebar_form_label_name').":", ["class"=>"col-sm-2 control-label"])}}
                         <div class="col-sm-10">
                            {{Form::text("name",null,["class"=>"form-control"])}}
                         </div>
                    </div>
                    {{-- Name Form Input--}}
                    <div class="form-group">
                        {{Form::label("tel",Lang::get('frontEndPages.sidebar_form_label_tel').":", ["class"=>"col-sm-2 control-label"])}}
                         <div class="col-sm-10">
                            {{Form::text("tel",null,["class"=>"form-control"])}}
                         </div>
                    </div>
                    {{-- Email Form Input--}}
                    <div class="form-group">
                        {{Form::label("email",Lang::get('frontEndPages.sidebar_form_label_email').":", ["class"=>"col-sm-2 control-label"])}}
                         <div class="col-sm-10">
                            {{Form::input("email", "email",null,["class"=>"form-control"])}}
                         </div>
                    </div>
                    {{-- Message Form Input--}}
                    <div class="form-group">
                        {{Form::label("message",Lang::get('frontEndPages.sidebar_form_label_message').":", ["class"=>"col-sm-2 control-label"])}}
                         <div class="col-sm-10">
                            {{Form::textarea("message",null,["class"=>"form-control"])}}
                         </div>
                    </div>

                    <label class="col-sm-6 control-label">
                      <input type="checkbox" name="contactme" value="1"> {{Lang::get('frontEndPages.sidebar_form_subscribe')}}
                    </label>
                    {{Form::submit("發送", ["class"=>"pull-right theme-button", "id"=>"sendOnlineInquiry"])}}
                    {{Form::input("reset", "reset","重新填寫", ["class"=>"pull-right theme-button"])}}
                {{Form::close()}}
                <div class="clearfix"></div>
            </div>


        </section>

    </div>

</div>
@stop

@section('script')
    <script>
        $("#sendOnlineInquiry").on("click", function(e){
            e.preventDefault();
            var data = {};
            var url = $(this).parent('Form').attr('action');
            $.each($("#contact-form").serializeArray(), function(key, object){
                data[object.name]=object.value
            });

            var ajax = $.ajax({
                method: "POST",
                url: url,
                data: data,
                dataType: "json"
            });
            ajax.done(function(response){
                alert("Thank you, "+data.name+"! We will contact you soon.");
            }).fail(function() {
                alert( "Sorry, "+data.name+"! Something wrong, please contact us later." );
            })

            return false;
        })
    </script>
@stop