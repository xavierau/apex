<div class="form-group">
	{{Form::label('url', "Url")}}
	{{Form::text('url', null, ["class"=>"form-control", "required"])}}
	{{$errors->first('url', '<span class="errors"> :message </span>')}}
</div>

<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
    @foreach($languages as $language)
        @if(Cache::get('setting_default_language') == $language->id)
            <li class="active"><a href="#{{$language->iso_code}}" data-toggle="tab">{{$language->language}}</a></li>
        @else
            <li><a href="#{{$language->iso_code}}" data-toggle="tab">{{$language->language}}</a></li>
        @endif
    @endforeach
</ul>

<div class="tab-content" id="my-tab-content">
@foreach($languages as $language)
    <?php $i=0 ?>
    @foreach($page->content as $content)
        @if(!isset($content->lang_id))
            @if($i==0)
                @if(Cache::get('setting_default_language') == $language->id)
                    <div class="active tab-pane" id="{{$language->iso_code}}">
                @else
                    <div class="tab-pane" id="{{$language->iso_code}}">
                @endif
                    <div class="form-group">
                        {{Form::label('title['.$language->id.']', $language->language." Title ")}}
                        {{Form::text('title['.$language->id.']', null, ["class"=>"form-control", "required", "data-lang_id"=>$language->id])}}
                        {{$errors->first('title['.$language->id.']', '<span class="errors"> :message </span>')}}
                    </div>
                    <div class="form-group">
                        {{Form::label('content['.$language->id.']', $language->language." Content ")}}
                        {{Form::textarea('content['.$language->id.']', null, ["class"=>"form-control", "required", "data-lang_id"=>$language->id])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('status['.$language->id.']', "Content Status ")}}
                        {{Form::select('status['.$language->id.']',['published'=>'Published','draft'=>'Draft'],null,["class"=>"form-control", "required", "data-lang_id"=>$language->id])}}
                    </div>
                </div>
                <?php $i=1 ?>
            @endif
        @elseif($language->id == $content->lang_id)
                @if(Cache::get('setting_default_language') == $language->id)
                    <div class="active tab-pane" id="{{$language->iso_code}}">
                @else
                    <div class="tab-pane" id="{{$language->iso_code}}">
                @endif
                <div class="form-group">
                    {{Form::label('title['.$language->id .']', $language->language." Title ")}}
                    {{Form::text('title['.$language->id.']', isset($content->title)? $content->title:null, ["class"=>"form-control", "required", "data-lang_id"=>$language->id])}}
                    {{$errors->first('title['.$language->id.']', '<span class="errors"> :message </span>')}}
                </div>
                <div class="form-group">
                    {{Form::label('content['.$content->title .']', $language->language." Content ")}}
                    {{Form::textarea('content['.$language->id.']', isset($content->content)? $content->content:null, ["class"=>"form-control", "required", "data-lang_id"=>$language->id])}}
                </div>
                <div class="form-group">
                    {{Form::label('status['.$language->id.']', "Content Status ")}}
                    {{Form::select('status['.$language->id.']',['published'=>'Published','draft'=>'Draft'], $content->status,["class"=>"form-control", "required", "data-lang_id"=>$language->id])}}
                </div>
            </div>
                            <?php $i=1 ?>
        @endif
    @endforeach
@endforeach
</div>


{{Form::submit('Update', ["class" => "btn btn-block btn-success" , "id" => "edit-confirm-button"])}}
<a href="{{route('admin.pages.index')}}" class="btn btn-info btn-block">Back</a>