<div class="title">
    <p>{{Lang::get('frontEndPages.title_contact_us')}}</p>
    <span class="arrow"></span>
</div>
<div class="sidebar-contactForm">
    <div class="row">
        <div class="col-sm-3">
            總行地址：
        </div>
        <div class="col-sm-9">
            尖沙咀山林道17-19號 <br>山林中心1601室
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            電話：
        </div>
        <div class="col-sm-9">
            (852) 2682 8516
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            電郵：
        </div>
        <div class="col-sm-9">
            info@apexconsultancy.com.hk
        </div>
    </div>
    <br/>
    <p>{{Lang::get('frontEndPages.sidebar_form_title')}}</p>
    {{Form::open(["route"=>"send message" ,"class"=>"form-horizontal", "id"=>"contact-form"])}}
        {{-- Name Form Input--}}
        <div class="form-group">
            {{Form::label("name",Lang::get('frontEndPages.sidebar_form_label_name').":", ["class"=>"col-sm-4 control-label"])}}
             <div class="col-sm-8">
                {{Form::text("name",null,["class"=>"form-control"])}}
             </div>
        </div>
        {{-- Name Form Input--}}
        <div class="form-group">
            {{Form::label("tel",Lang::get('frontEndPages.sidebar_form_label_tel').":", ["class"=>"col-sm-4 control-label"])}}
             <div class="col-sm-8">
                {{Form::text("tel",null,["class"=>"form-control"])}}
             </div>
        </div>
        {{-- Email Form Input--}}
        <div class="form-group">
            {{Form::label("email",Lang::get('frontEndPages.sidebar_form_label_email').":", ["class"=>"col-sm-4 control-label"])}}
             <div class="col-sm-8">
                {{Form::input("email", "email",null,["class"=>"form-control"])}}
             </div>
        </div>
        {{-- Message Form Input--}}
        <div class="form-group">
            {{Form::label("message",Lang::get('frontEndPages.sidebar_form_label_message').":", ["class"=>"col-sm-4 control-label"])}}
             <div class="col-sm-8">
                {{Form::textarea("message",null,["class"=>"form-control", "rows"=>"4"])}}
             </div>
        </div>
        <div class="form-group">
             <label class="col-sm-12 control-label">
                <input type="checkbox" name="contactme" value="1">{{Lang::get('frontEndPages.sidebar_form_subscribe')}}
             </label>
        </div>

        {{Form::submit(Lang::get('frontEndPages.sidebar_form_submit'), ["class"=>"pull-right theme-button", "id"=>"sendOnlineInquiry"])}}
        {{Form::input("reset", "reset",Lang::get('frontEndPages.sidebar_form_reset'), ["class"=>"pull-right theme-button"])}}
    {{Form::close()}}
    <div class="clearfix"></div>
</div>

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