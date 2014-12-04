@extends('system.layouts.default')

@section('content')

{{Form::open(["route" => ["users.store"]])}}

@include('system.users.partials.form_create')

{{Form::close()}}

@stop