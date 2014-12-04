@extends('system.layouts.default')

@section('content')

{{Form::model($page, ["route" => [$routePrefix.".update", $page->id], "method"=>"PUT"])}}

@include($viewPrefix.'.partials.form_create')

{{Form::close()}}

@stop

@section('script')
	<script>
		var target = $('select[name=parent_id]');
		var dart = $("select[name=order]");
		var originalParent = target.val();
		var originalOrder = dart.val();
		var originalOptions = dart.find('option');
		var url = window.location.href;

		target.on('change', function() {
			if (target.val() !== originalParent)
			{
				$.getJSON(url,{
					parent_id : target.val(), 
				}).done(function(data) {
					dart.find('option').remove().end()
					var newOptions = "";
					for (var i =  1; i <= data+1; i++) {
						 newOptions += '<option value="'+i+'">'+i+'</option>';
					};
				    dart.append(newOptions).val('1');
				})
			}else{
				dart.find('option').remove().end().append(originalOptions).val(originalOrder);
			}	
		})
	</script>
@stop