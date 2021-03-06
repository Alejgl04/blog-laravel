@extends('adminlte::page')

@section('title', 'Blog AG | Create new Tag')

@section('content_header')
    <h1>Create new tag</h1>
@stop

@section('content')
    <div class="card">
      <div class="card-body">
        {!! Form::open(['route' => 'admin.tags.store']) !!}
       
          @include('admin.tags.partials.form')
          {!! Form::submit('Create Tag', ['class' => 'btn btn-default']) !!}

        {!! Form::close() !!}
      </div>
  </div>
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script>
      $(document).ready( function() {
        $("#name").stringToSlug({
          setEvents: 'keyup keydown blur',
          getPut: '#slug',
          space: '-'
        });
      });
    </script>
@endsection