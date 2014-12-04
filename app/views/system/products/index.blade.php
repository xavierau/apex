@extends('system.layouts.default')

@section('content')
	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">products <a href="{{route($routePrefix.'.create')}}" class="btn btn-success btn-sm pull-right">Create</a ></h3>
			</div>
			<div class="panel-body">
				<div >
					<table class="table table-striped" >
						<thead>
							<tr>
								<th>Name</th>
								<th>Description</th>
								<th>Price</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody id="table-content">
							@foreach ($products as $element)
								<tr>
									<td data-title="content_title">{{$element->name}}</td>
									<td>{{$element->description}}</td>
									<td>{{$element->price}}</td>
									<td>
										<div class="btn-group">
											<a href="{{route($routePrefix.'.edit', $element->id)}}" class="btn btn-info">Edit</a>
											<!-- <button class="btn-info btn editButton" data-id="{{$element->id}}" data-toggle="modal" data-target="#editModal">Edit</button> -->
											<button class="btn-danger btn deleteButton" data-id="{{$element->id}}" data-toggle="modal" data-target="#deleteModal">Delete</button>
										</div>
									</td>
								</tr>
							@endforeach


						</tbody>
						<tfoot>
							<td id="link" colspan="4">
								{{$products->links()}}
							</td>
							
						</tfoot>
					</table>
					<!-- End of table -->
				</div>
			</div>
		</div>
	</div>
	<!-- End of container-fluid -->

	<!-- Edit Modal -->
	<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	        <h4 class="modal-title" id="editModalLabel">Edit</h4>
	      </div>
	      <div class="modal-body">
	      	{{Form::open(array("id"=>"editForm", 'method'=>'PUT'))}}
		        @include($viewPrefix.".partials.form_create")
	        {{Form::close()}}
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	
	    </div>
	  </div>
	</div>
	<!-- End of Edit Modal -->

	<!-- Delete Modal -->
	<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	        <h4 class="modal-title" id="deleteModalLabel"></h4>
	      </div>
	      <div class="modal-body">

	      </div>
	      <div class="modal-footer">
	      {{Form::open(array('method'=>'DELETE', "id"=>"deleteForm"))}}
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	         <button type="button" class="btn btn-danger" id="delete-confirm-button" data-dismiss="modal">Delete</button>
	      </div>
	
	    </div>
	  </div>
	</div>
	<!-- End of Delete Modal -->
@stop

@section('script')

<script>
	var URL = "{{route($routePrefix.'.index')}}";
	var deleteButton = $('.deleteButton');
	var deleteConfirmButton = $('#delete-confirm-button');
	var deleteModalTitle = $("#deleteModalLabel");
	var deleteModalContent = $("#deleteModal div.modal-body");
	var deleteForm = $("#deleteForm");
	deleteButton.on('click', function(e){
		e.preventDefault();
		var title = $(this).parents("tr").children('td[data-title]').html();
		deleteModalTitle.html("Delete "+title);
		var id = $(this).attr('data-id');
		deleteForm.attr('action', URL+"/"+id)	
		deleteModalContent.html('Are you sure you want to delete "'+title+'"');
	})
	deleteConfirmButton.on('click', function(e){
		e.preventDefault();
		deleteForm.submit();
	})
</script>
@stop