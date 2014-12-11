<div class="form-group">
	{{Form::label('url', "Url")}}
	{{Form::text('url', null, ["class"=>"form-control", "required"])}}
	{{$errors->first('url', '<span class="errors"> :message </span>')}}
</div>
@foreach($languages as $language)
    <div class="form-group">
        {{Form::label('title['.$language->id.']', $language->language." Title ")}}
        {{Form::text('title['.$language->id.']', isset($title)? $title[$language->id]:null, ["class"=>"form-control", "required", "data-lang_id"=>$language->id])}}
        {{$errors->first('title['.$language->id.']', '<span class="errors"> :message </span>')}}
    </div>
@endforeach
<div class="form-group">
	{{Form::label('parent_id', "Parent")}}
	{{Form::select('parent_id', $data['array'],null, ["class"=>"form-control", "required"])}}
	{{$errors->first('parent_id', '<span class="errors"> :message </span>')}}
</div>
<div class="form-group">
	{{Form::label('order', "Order")}}
	{{Form::selectRange('order',1,$data['count']+1, null, ["class"=>"form-control", "required"])}}
	{{$errors->first('order', '<span class="errors"> :message </span>')}}
</div>

{{Form::submit('Update', ["class" => "btn btn-block btn-success" , "id" => "edit-confirm-button"])}}
<a href="{{route('admin.pages.index')}}" class="btn btn-info btn-block">Back</a>

