@extends('adminlte::page')

@section('title', 'Blog AG | Labels of Blogger')

@section('content_header')
    <h1>List of tags</h1>
@stop

@section('content')
<div class="row">
  <div class="col-md-6">
    @if (session('info'))
    <div class="alert alert-success"> 
      <strong>{{ session('info') }}</strong>
    </div>
    @endif
  </div>
</div>
<div class="card">
  <div class="card-header">
    <a href="{{route('admin.tags.create')}}" class="btn btn-secondary">Add Tag</a>
  </div>
  <div class="card-body">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th colspan="2"></th>
        </tr>
      </thead>
      <tbody>
        @if ($count>0)
          @foreach ($tags as $tag)
            <tr>
              <td>{{$tag->id}}</td>
              <td>{{$tag->name}}</td>
              <td width="10px">
                <a href="{{route('admin.tags.edit', $tag)}}" class="btn btn-primary btn-sm">Editar</a>
              </td>
              <td width="10px">
                <form action="{{route('admin.tags.destroy', $tag)}}" method="POST">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                </form>
              </td>
            </tr>
          @endforeach   
        @else
          <tr>
            <td>Sin datos que mostrar</td>
          </tr>
        @endif
      </tbody>
    </table>
  </div>
</div>
@stop