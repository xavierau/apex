@extends('system.layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Translations</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <th>Variables</th>
                            @foreach($languages as $language)
                            <th> {{$language->language}}</th>
                            @endforeach
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach($variables as $variable)
                                <tr>
                                    <td>{{$variable}}</td>
                                    @foreach($translations as $translation)
                                        @foreach($languages as $language)
                                            @if($translation->key == $variable && $translation->lang_id == $language->id)
                                                <td>{{$translation->value}}</td>
                                            @endif
                                        @endforeach
                                    @endforeach
                                    <td>
                                        <a href="{{route($routePrefix.'.edit', )}}" class="btn btn-primary edit">Edit</a>
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