@extends('adminlte::page')

@section('title', 'Blog AG | Users of Blog')

@section('content_header')
    <h1>List of Users</h1>
@stop

@section('content')
   @livewire('admin.users-index')
@stop

@section('css')
    <link rel="stylesheet" href="./css/admin_custom.css">
@stop
