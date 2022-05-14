@extends('adminlte::page')

@section('title', 'Blog AG | Dashboard of Blogger')

@section('content_header')
    <h1>Create new Post</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-body">
      {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off', 'files' => true]) !!}
        {!! Form::hidden('user_id', auth()->user()->id) !!}
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

          @error('tags')
            <hr>
            <span class="text-danger">
              {{ $message }}
            </span>
          @enderror
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
          @error('status')
            <hr>
            <span class="text-danger">
              {{ $message }}
            </span>
          @enderror
        </div>
        
        <div class="form-row mb-2">

          <div class="col-md-6">
            {!! Form::label('extract', 'Extract:') !!}
            {!! Form::textarea('extract', null, ['class'=> 'form-control']) !!}
            @error('extract')
            <span class="text-danger">
              {{ $message }}
            </span>
           @enderror
          
          </div>
          <div class="col-md-6">
            {!! Form::label('body', 'Body of post:') !!}
            
            {!! Form::textarea('body', null, ['class'=> 'form-control']) !!}
            @error('body')
            <span class="text-danger">
              {{ $message }}
            </span>
           @enderror
          
          </div>

        </div>

        <div class="row mt-3 mb-3">
          <div class="col">
            <div class="image-wrapper">
              <img id="image-background" src="https://cdn.pixabay.com/photo/2022/01/22/09/42/buildings-6956678_960_720.jpg" alt="Image by default">
              
            </div>
          </div>
          <div class="col">
            {!! Form::label('file', 'Upload the image that you want to show on the post') !!}
            {!! Form::file('file', ['class'=>'form-control-file', 'accept' => 'image/*']) !!}
            @error('file')
            <span class="text-danger">
              {{ $message }}
            </span>
            @enderror
            <br>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi laborum quas tempore hic dolorem, architecto repellat cum praesentium debitis obcaecati iusto ducimus id inventore cupiditate omnis soluta nihil qui in!
            </p>  
          </div>  
        </div>

        {!! Form::submit('Create Post', ['class' => 'btn btn-default']) !!} 

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