@extends('adminlte::page')

@section('title', 'Blog AG | Dashboard of Blogger')

@section('content_header')
    <h1>Update Post</h1>
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
      {!! Form::model( $post,['route' => ['admin.posts.update', $post], 'autocomplete' => 'off', 'files' => true, 'method' => 'put']) !!}
          
          @include('admin.posts.partials.form')
          
        {!! Form::submit('Update Post', ['class' => 'btn btn-default']) !!} 

      {!! Form::close() !!}
    </div>
  </div>
@stop
@section('css')
  <style>
    .image-wrapper {
      position: relative;
      padding-bottom: 56.25%;
    }

    .image-wrapper img {
      position: absolute;
      object-fit: cover;
      width: 100%;
      height: 100%;
    }
  </style>
@stop

@section('js')
  <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
  <script>
    $(document).ready( function() {
      $("#name").stringToSlug({
        setEvents: 'keyup keydown blur',
        getPut: '#slug',
        space: '-'
      });
    });
    ClassicEditor
    .create( document.querySelector( '#extract' ), {
        removePlugins: [ 'Heading' ],
        toolbar: [ 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote' , 'link' ]
    } )
    .catch( error => {
        console.log( error );
    } );
    ClassicEditor
    .create( document.querySelector( '#body' ), {
        removePlugins: [ 'Heading' ],
        toolbar: [ 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote' , 'link' ]
    } )
    .catch( error => {
        console.log( error );
    } );

    document.getElementById('file').addEventListener('change', changeImage);

    function changeImage() { 
      const file = event.target.files[0];
      const reader = new FileReader();
      reader.onload = (event) => {
        document.getElementById("image-background").setAttribute('src', event.target.result);
      }
      reader.readAsDataURL(file);
    }

  </script>
@stop