{{Form::open(["class"=>"form-horizontal"])}}
    {{-- Name Form Input--}}
    <div class="form-group">
        {{Form::label("name","Name:", ["class"=>"col-xm-2 control-label"])}}
        <div class="col-xm-10">
           {{Form::text("name",null,["class"=>"form-control"])}}
        </div>
    </div>
    {{-- Tel Form Input--}}
    <div class="form-group">
        {{Form::label("tel","Tel:", ["class"=>"col-xm-2 control-label"])}}
        <div class="col-xm-10">
            {{Form::text("tel",null,["class"=>"form-control"])}}
        </div>
    </div>

    {{-- Email Form Input--}}
    <div class="form-group">
        {{Form::label("email","Email:", ["class"=>"col-xm-2 control-label"])}}
        <div class="col-xm-10">
            {{Form::input("email","email",null,["class"=>"form-control"])}}
        </div>
    </div>

    {{-- Message Form Input--}}
    <div class="form-group">
        {{Form::label("message","Message:", ["class"=>"col-xm-2 control-label"])}}
        <div class="col-xm-10">
             {{Form::text("message",null,["class"=>"form-control"])}}
        </div>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" name="messageMe"> 我希望收到 德盛(大中華)有限公司寄給 我的最新資訊。
        </label>
    </div>
         <input type="submit" value="Submit now" />
         <input type="reset" value="Clear form" />
{{Form::close()}}


