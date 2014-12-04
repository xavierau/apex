<div class="form-group">
	{{Form::label('firstname', "First Name")}}
	{{Form::text('firstname', null, ["class"=>"form-control"])}}
	{{$errors->first('firstname', '<span class="errors"> :message </span>')}}
</div>
<div class="form-group">
	{{Form::label('lastname', "Last Name")}}
	{{Form::text('lastname', null, ["class"=>"form-control"])}}
	{{$errors->first('lastname', '<span class="errors"> :message </span>')}}
</div>
<div class="form-group">
	{{Form::label('email', "Email")}}
	{{Form::email('email', null, ["class"=>"form-control"])}}
	{{$errors->first('email', '<span class="errors"> :message </span>')}}
</div>
<div class="form-group">
	{{Form::label('username', "User Name")}}
	{{Form::text('username', null, ["class"=>"form-control"])}}
	{{$errors->first('username', '<span class="errors"> :message </span>')}}
</div>
<div class="form-group">
	{{Form::label('password', "Password")}}
	{{Form::password('password', ["class"=>"form-control"])}}
	{{$errors->first('password', '<span class="errors"> :message </span>')}}
</div>
<div class="form-group">
	{{Form::label('password_confirmation', "Confirm Password")}}
	{{Form::password('password_confirmation', ["class"=>"form-control"])}}
</div>
{{Form::submit('Update', ["class" => "btn btn-block btn-success"])}}
<a href="{{route('users.index')}}" class="btn btn-info btn-block">Back</a>