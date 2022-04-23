@extends('adminlte::page')

@section('title', 'Blog AG')

@section('content_header')
    <h1>Update Category</h1>
@stop

@section('content')
  <div class="row">
    <div class="col-md-8">
      @if (session('info'))
      <div class="alert alert-success"> 
        <strong>{{ session('info') }}</strong>
      </div>
      @endif
      <div class="card">
        <div class="card-body">
          {!! Form::model( $category, ['route' => ['admin.categories.update', $category], 'method' => 'put']) !!}
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
    
            {!! Form::submit('Update Category', ['class' => 'btn btn-default']) !!}
    
          {!! Form::close() !!}
        </div>
      </div>
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