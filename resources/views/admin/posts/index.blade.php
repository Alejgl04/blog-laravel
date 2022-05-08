@extends('adminlte::page')

@section('title', 'Blog AG | Dashboard of Blogger')

@section('content_header')
    <h1>List of Posts</h1>
@stop

@section('content')
  @livewire('admin.post-index')
@stop

@section('css')
    {{-- <link rel="stylesheet" href="./css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop