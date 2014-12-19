@extends('system.layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">All Pages <a href="{{route('admin.pages.create')}}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Create New</a> </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            @foreach($languages as $lang)
                            <th>Title( {{$lang->language}} )</th>
                            @endforeach
                            <th>URL</th>
                            <th>Parent</th>
                            <th>Order</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($pages['page'] as $element)
                                <tr>
                                    @foreach($languages as $lang)
                                        <td>
                                            @foreach($pages['title'][$element->id] as $title)
                                                @if($lang->id == $title->lang_id)
                                                {{$title->title}}
                                                @endif
                                            @endforeach
                                        </td>
                                    @endforeach
                                    <td>{{$element->url}}</td>
                                    <td>
                                    @if ($element->parent_id == 0)
                                        Top Level
                                    @else
                                    @foreach ($pages as $page)
                                        @if ($page->id == $element->parent_id)
                                            {{$page->title}}
                                        @endif
                                    @endforeach
                                    @endif
                                    </td>
                                    <td>{{$element->order}}</td>
                                    <td>
                                        <div class="btn-group">
                                                <a href="{{route($routePrefix.'.edit', $element->id)}}" class="btn btn-info"><i class="fa fa-pencil-square-o"></i> Edit</a>
                                                <button class="btn-danger btn deleteButton" data-id="{{$element->id}}" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-times"></i> Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

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