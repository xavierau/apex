@extends('system.layouts.default')

@section('content')

{{Form::model($user, ["route" => ["admin.users.update", $user->id], "method"=>"PUT"])}}

@include('system.users.partials.form_edit')

{{Form::close()}}

@stop