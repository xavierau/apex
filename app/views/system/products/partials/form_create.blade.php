<div class="form-group">
	{{Form::label('name', "Name")}}
	{{Form::text('name', null, ["class"=>"form-control", "required"])}}
	{{$errors->first('name', '<span class="errors"> :message </span>')}}
</div>
<div class="form-group">
	{{Form::label('description', "Description")}}
	{{Form::textarea('description', null, ["class"=>"form-control", "required", "id"=>"testing"])}}
	{{$errors->first('description', '<span class="errors"> :message </span>')}}
</div>
<div class="form-group">
	{{Form::label('price', "Price")}}
	{{Form::number('price', null, ["class"=>"form-control"])}}
	{{$errors->first('price', '<span class="errors"> :message </span>')}}
</div>
{{Form::submit('Update', ["class" => "btn btn-block btn-success" , "id" => "edit-confirm-button"])}}
<a href="{{route($routePrefix.'.index')}}" class="btn btn-info btn-block">Back</a>

