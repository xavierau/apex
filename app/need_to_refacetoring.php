@extends('system.layouts.default')

@section('content')
	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Users <a href="{{route('users.create')}}" class="btn btn-success btn-sm pull-right">Create</a ></h3>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
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
									<td>{{$element->descritpion}}</td>
									<td>{{$element->price}}</td>
									<td>
										<div class="btn-group">
											<a href="{{route('users.edit', $element->id)}}" class="btn btn-info">Edit</a>
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
		        @include($path.".partials.form_edit")
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
	// var editButton = $('.editButton');
	// var editConfirmButton = $('#edit-confirm-button');
	// var editModalTitle = $("#editModalLabel");
	// var editForm = $("#editForm");
	// var editFromInputs = editForm.find(":input");
	var URL = "{{$URL}}";

	// var errorsMessage = $(".errorsMessage")

	// editButton.on('click', function(e){
	// 	var title = $(this).parents("tr").children('td[data-title]').html();
	// 	editModalTitle.html("Edit "+title);
	// 	var id = $(this).attr('data-id');
	// 	editForm.attr('action', URL+"/"+id)
	// 	getEditItem(URL, id);
	// })

	// function getEditItem(url, id){
	// 	var request = $.ajax({
	// 		url:url,
	// 		data:{id : id},
	// 		type:"GET",
	// 	})

	// 	request.success(function(data){
	// 		$.each(editFromInputs, function(i, val){
	// 			if(data.hasOwnProperty(val.name)) val.value = data[val.name];
				 
	// 		})
			
	// 	})
	// }

	// var updateErrors = {{Session::has('updateerrors') ? 1 : 0}};
	// var createErrors = {{Session::has('createerrors') ? 1 : 0}};
	// console.log(updateErrors);
	// if(updateErrors){
	// 	$('#editModal').modal('show')
	// }

	// editConfirmButton.on('click', function(e){
	// 	e.preventDefault();
	// 	// console.log(editForm.find('input'));
	// 	editForm.submit();
	// })

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
		// console.log(deleteForm.find('input[name=_method]'));
		deleteForm.submit();
	})

	/**
	*
	* Pagination
	*
	*/

	// // the dom traget
	// var contentPosition = $("#table-content");

	// // // Pagination link
	
	// var linkPosition = $("#link");

	// var linkNumbers = 20;

	// // laravel db collection need to be pagninated
	// var data = 

	// // laravel db collection need to be pagninated
	// var itemPerPage = 15;

	// var currentPage = 2;

	// (function(${
	// 	$.fn.pagination
	// })




	// 	var totalItem = data.length;
	// 	var totalPage = Math.ceil(totalItem/itemPerPage);
	// 	var displayStartItem = currentPage * itemPerPage;
	// 	var displayEndItem = displayStartItem + itemPerPage;

	// 	function segmentContent (target) {
	// 		var j = 0;
	// 		var targetSegment = new Array;
	// 		$.each(target, function(i, val){	
	// 			if(i>=displayStartItem && i<displayEndItem)
	// 			{
	// 				targetSegment[j] = data[i];
	// 				j++
	// 			}
	// 		})
	// 		return targetSegment;
	// 	}
		
	// 	function appendContent(position, content){
	// 		$.each(content, function(i, val){
	// 				position.append("<tr><td>"+val.firstname+"</td><td>"+val.lastname+"</td><td>"+val.email+'</td><td><div class="btn-group"><button class="btn-info btn editButton" data-id="'+val.id+'" data-toggle="modal" data-target="#editModal">Edit</button><button class="btn-danger btn deleteButton" data-id="'+val.id+'" data-toggle="modal" data-target="#deleteModal">Delete</button></div></td></tr>');
	// 			})
	// 	}

	// 	function linkCreation (current, total, number) {
	// 		var limit = Math.ceil(number/2);
	// 		var link = '<nav><ul class="pagination"><li><a href="#">&laquo;</a></li>';
	// 		for(var i = 1; i<=total; i++ )
	// 		{
	// 			if(current == i) {
	// 				link += '<li class="active" ><a data-page="'+i+'" href="'+i+'">'+i+'</a></li>'
	// 			}
	// 			else if(i == total){
	// 				link += '<li><a data-page="'+i+'" href="#">&raquo;</a></li></ul></nav>';
	// 			}else if(current - i > 0 && current - i < limit)
	// 			{
	// 				link += '<li><a data-page="'+i+'" href="'+i+'">'+i+'</a></li>';
	// 			}else if( i - current > 0 && i - current < limit )
	// 			{
	// 				link += '<li><a data-page="'+i+'" href="'+i+'">'+i+'</a></li>';
	// 			}
	// 		}
	// 		return link;
	// 	}
		
	// 	appendContent(contentPosition, segmentContent(data));	

	// 	linkPosition.append(linkCreation(currentPage, totalPage, linkNumbers));

</script>
@stop