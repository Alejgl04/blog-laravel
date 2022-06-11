@extends('adminlte::page')

@section('title', 'Blog AG | Create new Category')

@section('content_header')
    <h1>Create new Category</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-body">
      {!! Form::open(['route' => 'admin.categories.store']) !!}
        <div class="form-group">
          {!! Form::label('name', 'Name') !!}
          {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter the name of category']) !!}

          @error('name')
            <span class="text-danger">
              {{ $message }}
            </span>
          @enderror
        </div>

        <div class="form-group">
          {!! Form::label('slug', 'Slug') !!}
          {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Enter the slug of the category', 'readonly']) !!}
          @error('slug')
          <span class="text-danger">
            {{ $message }}
          </span>
        @enderror
        </div>

        {!! Form::submit('Create Category', ['class' => 'btn btn-default']) !!}

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