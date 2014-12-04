@extends('system.layouts.default')

@section('content')

{{Form::model($product, ["route" => [$routePrefix.".update", $product->id], "method"=>"PUT"])}}

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