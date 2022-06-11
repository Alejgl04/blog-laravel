@extends('adminlte::page')

@section('title', 'Blog AG | Posts of Blog')

@section('content_header')
    <h1>List of Posts</h1>
@stop

@section('content')
<div class="row text-center">
  <div class="col-md-12">
    @if (session('info'))
    <div class="alert alert-success"> 
      <strong>{{ session('info') }}</strong>
    </div>
    @endif
  </div>
</div>
  @livewire('admin.post-index')
@stop