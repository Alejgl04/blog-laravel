@extends('adminlte::page')

@section('title', 'Blog AG | Create Role ')

@section('content_header')
    <h1>Create new roles</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-body">
      {!! Form::open(['route' => 'admin.roles.store']) !!}

         @include('admin.roles.partials.form')


        {!! Form::submit('Create Rol', ['class' => 'btn btn-default']) !!}

      {!! Form::close() !!}
    </div>
  </div>
@stop