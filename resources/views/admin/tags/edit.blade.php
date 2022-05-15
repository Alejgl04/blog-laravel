@extends('adminlte::page')

@section('title', 'Blog AG | Dashboard of Blogger')

@section('content_header')
    <h1>Update Tag</h1>
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
      {!! Form::model( $tag, ['route' => ['admin.tags.update', $tag], 'method' => 'put']) !!}

        @include('admin.tags.partials.form')
        {!! Form::submit('Update Tag', ['class' => 'btn btn-default']) !!}

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