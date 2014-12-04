<div class="title">
    <p>聯絡我們</p>
    <span class="arrow"></span>
</div>
<div class="sidebar-contactForm">
    <div class="row">
        <div class="col-sm-3">
            總行地址：
        </div>
        <div class="col-sm-9">
            尖沙咀山林道17-19號 山林中心1003室
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
    <p>網上咨詢</p>
    {{Form::open(["class"=>"form-horizontal", "id"=>"contact-form"])}}
        {{-- Name Form Input--}}
        <div class="form-group">
            {{Form::label("name","你的姓名:", ["class"=>"col-sm-4 control-label"])}}
             <div class="col-sm-8">
                {{Form::text("name",null,["class"=>"form-control"])}}
             </div>
        </div>
        {{-- Name Form Input--}}
        <div class="form-group">
            {{Form::label("name","你的電話:", ["class"=>"col-sm-4 control-label"])}}
             <div class="col-sm-8">
                {{Form::text("name",null,["class"=>"form-control"])}}
             </div>
        </div>
        {{-- Email Form Input--}}
        <div class="form-group">
            {{Form::label("email","你的電郵:", ["class"=>"col-sm-4 control-label"])}}
             <div class="col-sm-8">
                {{Form::input("email", "email",null,["class"=>"form-control"])}}
             </div>
        </div>
        {{-- Message Form Input--}}
        <div class="form-group">
            {{Form::label("message","訊息內容:", ["class"=>"col-sm-4 control-label"])}}
             <div class="col-sm-8">
                {{Form::textarea("message",null,["class"=>"form-control", "rows"=>"4"])}}
             </div>
        </div>
        <div class="form-group">
             <label class="col-sm-12 control-label">
                <input type="checkbox" name="contactme">我希望收到 德盛(大中華)有限公司寄給我的最新資訊。
             </label>
        </div>

        {{Form::submit("發送", ["class"=>"pull-right theme-button"])}}
        {{Form::input("reset", "reset","重新填寫", ["class"=>"pull-right theme-button"])}}
    {{Form::close()}}
    <div class="clearfix"></div>

</div>