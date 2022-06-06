@extends('adminlte::page')

@section('title', 'Blog AG | Update Role ')

@section('content_header')
    <h1>Update role</h1>
@stop

@section('content')
<div class="row text-center">
  <div class="col-lg-12">
    @if (session('info'))
    <div class="alert alert-success"> 
      <strong>{{ session('info') }}</strong>
    </div>
    @endif
  </div>
</div>
<div class="card">
  <div class="card-body">
    {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method' => 'put']) !!}

      @include('admin.roles.partials.form')
      {!! Form::submit('Update Rol', ['class' => 'btn btn-default']) !!}

    {!! Form::close() !!}
  </div>
</div>@stop

@section('css')
    {{-- <link rel="stylesheet" href="./css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop