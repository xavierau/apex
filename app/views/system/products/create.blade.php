@extends('system.layouts.default')

@section('content')

{{Form::open(["route" => [$routePrefix.".store"]])}}

@include('system.products.partials.form_create')

{{Form::close()}}

@stop

@section('script')

{{HTML::style(asset('components/redactor/redactor/redactor.css'))}}
{{HTML::script(asset('components/redactor/redactor/redactor.min.js'))}}

<script type="text/javascript">

$(function()
{
    $('textarea').redactor({
        imageUpload: '{{route("redactorImageUpload")}}',
       
    });
});
</script>


	
	 

	
@stop