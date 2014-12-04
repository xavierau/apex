<div class="form-group">
	{{Form::label('title', "Title")}}
	{{Form::text('title', null, ["class"=>"form-control", "required"])}}
	{{$errors->first('title', '<span class="errors"> :message </span>')}}
</div>
<div class="form-group">
	{{Form::label('url', "Url")}}
	{{Form::text('url', null, ["class"=>"form-control", "required"])}}
	{{$errors->first('url', '<span class="errors"> :message </span>')}}
</div>
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

