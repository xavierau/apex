@extends('system.layouts.default')

@section('content')

{{Form::model($user, ["route" => ["users.update", $user->id], "method"=>"PUT"])}}

@include('system.users.partials.form_edit')

{{Form::close()}}

@stop