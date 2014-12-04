<!-- jQuery Version 1.11.0 -->
{{HTML::script('components/jquery/dist/jquery.min.js')}}

<!-- Bootstrap Core JavaScript -->
{{HTML::script('components/bootstrap/dist/js/bootstrap.min.js')}}

<!-- Metis Menu Plugin JavaScript -->
{{HTML::script('components/metisMenu/dist/metisMenu.min.js')}}

<!-- Custom Theme JavaScript -->
{{HTML::script('components/sb-admin-2/js/sb-admin-2.js')}}


	
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

    $(function () {
        $('#side-menu').metisMenu({
          toggle: false
        });
    });
</script>

