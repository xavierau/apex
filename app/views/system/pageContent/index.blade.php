@extends('system.layouts.default')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <th>Identifier</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($contents as $key => $content)
                                <tr>
                                    <td>{{$key}}</td>
                                    <td>
                                        <a href="{{route("$routePrefix.edit", $key)}}" class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop

@section('script')

@stop