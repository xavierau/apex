@extends('system.layouts.default')

@section('content')

{{Form::open(["route" => [$routePrefix.".store"]])}}

@include($viewPrefix.'.partials.form_create')

{{Form::close()}}

@stop

@section('script')
	<script>
		var target = $('select[name=parent_id]');
		target.on('change', function() {
			var url = window.location.href;
			$.getJSON(url,{
				parent_id : target.val(), 
			}).done(function(data) {
				var dart = $("select[name=order]");
				dart.find('option').remove().end()
				var newOptions = "";
				for (var i =  1; i <= data+1; i++) {
					 newOptions += '<option value="'+i+'">'+i+'</option>';
				};
			    dart.append(newOptions).val('1');
				console.log(data);
			})
		})
	</script>
@stop