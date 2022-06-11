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
  <div class="col-md-6">
    <div class="image-wrapper">
      @isset ($post->image)
      @if (env('APP_ENV')=='Local')
        <img id="image-background" src="{{ Storage::url($post->image->url)}}" alt="Image by default">          

      @else
        <img id="image-background" src="{{$post->image->url}}" alt="Image by default">          

      @endif
      @else
        <img id="image-background" src="https://cdn.pixabay.com/photo/2022/01/22/09/42/buildings-6956678_960_720.jpg" alt="Image by default">
      @endisset
    </div>
  </div>
  <div class="col-md-6">
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