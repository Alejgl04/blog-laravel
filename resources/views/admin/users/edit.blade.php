@extends('adminlte::page')

@section('title', 'Blog AG | Users of Blog')

@section('content_header')
    <h1>Add Rol</h1>
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
      <p class="h5">Name:</p>
      <p class="form-control"> {{ $user->name }} </p>

      <h2 class="h5"> List of roles </h2>
      {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put' ]) !!}
        @foreach ($roles as $role)
          <div class="">
            <label>
              {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
              {{ $role->name }}
            </label>
          </div>
        @endforeach

        {!! Form::submit('Assign Role', ['class' => 'btn btn-primary mt-2']) !!}
      {!! Form::close() !!}
    </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="./css/admin_custom.css">
@stop
