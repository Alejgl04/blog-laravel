<div class="form-group">
  {!! Form::label( 'name', 'Name:' ) !!}
  {!! Form::text('name', null, ['class'=> 'form-control', 'placeholder' => 'Enter the name of tag']) !!}

  @error('name')
    <span class="text-danger">
      {{ $message }}
    </span>
  @enderror
</div>

<div class="form-group">
  {!! Form::label( 'slug', 'Slug:' ) !!}
  {!! Form::text('slug', null, ['class'=> 'form-control', 'placeholder' => 'Enter the slug of tag', 'readonly']) !!}
  @error('slug')
    <span class="text-danger">
      {{ $message }}
    </span>
  @enderror
</div>

<div class="form-group">
  {!! Form::label('color', 'Color:') !!}
  {!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}

  @error('color')
    <span class="text-danger">
      {{ $message }}
    </span>
  @enderror
</div>