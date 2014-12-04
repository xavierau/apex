@extends('system.layouts.default')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Media Library <a class="btn btn-success btn-sm pull-right">Add New</a> </h3>
		</div>
		<div class="panel-body">
			<div class="row medias" style="display:inline">
				@foreach ($medias as $element)
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
						<img sytle="height:200px; width:200px " src="{{$element->uri}}" alt="{{$element->filename}}" class="img-responsive thumbnail">
					</div>
				@endforeach		
			</div>
		</div>
	</div>
@stop