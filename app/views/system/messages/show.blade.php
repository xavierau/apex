@extends('system.layouts.default')

@section('content')
    <br />
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Message</h4>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-2">
                    <h4 class="pull-right">
                        Name
                    </h4>
                </div>
                <div class="col-xs-10">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            {{$message->name}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-2">
                    <h4 class="pull-right">
                        email
                    </h4>
                </div>
                <div class="col-xs-10">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            {{$message->email}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-2">
                    <h4 class="pull-right">
                        Telephone
                    </h4>
                </div>
                <div class="col-xs-10">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            {{$message->tel}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-2">
                    <h4 class="pull-right">
                        Message
                    </h4>
                </div>
                <div class="col-xs-10">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            {{$message->content}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-2">
                    <h4 class="pull-right">
                        News Letter
                    </h4>
                </div>
                <div class="col-xs-10">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            {{$message->newsletter == 1 ? "Yes":"No"}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <a class="btn btn-info btn-block" href="{{route($routePrefix.".index")}}">Back</a>
        </div>
    </div>


@stop

@section('script')

@stop