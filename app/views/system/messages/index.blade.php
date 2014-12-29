@extends('system.layouts.default')

@section('content')
    <br />
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">Messages</h4>
        </div>
        <table class="table" role="table">
            <thead>
                <th>Name</th>
                <th>Message</th>
                <th>Status</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach($messages as $message)
                    <tr>
                        <td>{{$message->status == "NEW" ? "<strong>$message->name</strong>":$message->name}}</td>
                        <td>{{$message->status == "NEW" ? "<strong>$message->content</strong>":$message->content}}</td>
                        <td>{{$message->status == "NEW" ? "<strong>$message->status</strong>":$message->status}}</td>
{{--                        <td class=""><a class="btn btn-primary" href="{{route($routePrefix.".show",$message->id)}}">{{$message->id}}</a></td>--}}
                        <td class=""><a class="btn btn-primary" href="{{route($routePrefix.".show",$message->id)}}">Detail</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@stop

@section('script')

@stop