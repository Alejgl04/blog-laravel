@extends('adminlte::page')

@section('title', 'Blog AG | Dashboard of Blogger')

@section('content_header')
    <h1>Create new Post</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-body">
      {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off']) !!}
        <div class="form-row mb-1">
          <div class="col-md-6">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter the name of post']) !!}
  
            @error('name')
              <span class="text-danger">
                {{ $message }}
              </span>
            @enderror
          </div>
          <div class="col">
            {!! Form::label('slug', 'Slug:') !!}
            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Enter the slug of post', 'readonly']) !!}
           
            @error('slug')
              <span class="text-danger">
                {{ $message }}
              </span>
            @enderror
          </div>
        </div>

        <div class="form-row mb-1">
          <div class="col-md-6">
            {!! Form::label('category_id', 'Categories:') !!}
            {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
            @error('category_id')
              <span class="text-danger">
                {{ $message }}
              </span>
            @enderror
          </div>
        </div>

        <div class="form-group">
          <p class="font-weight-bold">Tags:</p>
          @foreach ( $tags as $tag )
            <label class="mr-2">
              {!! Form::checkbox('tags[]', $tag->id, null ) !!}
              {{ $tag->name }}

            </label>
          @endforeach
        </div>
                
        <div class="form-group">
          <p class="font-weight-bold">Status:</p>
          
          <label>
            {!! Form::radio('status', 1, true) !!}
            Preview
          </label>

          <label>
            {!! Form::radio('status', 2) !!}
            Publish
          </label>
        </div>
        
        <div class="form-row mb-2">

          <div class="col-md-6">
            {!! Form::label('extract', 'Extract:') !!}
            {!! Form::textarea('extract', null, ['class'=> 'form-control']) !!}
          </div>

          <div class="col-md-6">
            {!! Form::label('body', 'Body of post:') !!}
            {!! Form::textarea('body', null, ['class'=> 'form-control']) !!}
          </div>

        </div>

        {!! Form::submit('Create Post', ['class' => 'btn btn-default']) !!} 

      {!! Form::close() !!}
    </div>
  </div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="./css/admin_custom.css"> --}}
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
  </script>
@stop