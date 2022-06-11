@extends('adminlte::page')

@section('title', 'Blog AG | Tags of Blog')

@section('content_header')
    <h1>List of tags</h1>
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
    <div class="card-header">
      @can('admin.tags.create')
        <a href="{{route('admin.tags.create')}}" class="btn btn-secondary">Add Tag</a>  
      @endcan
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
                  @can('admin.tags.edit')
                    <a href="{{route('admin.tags.edit', $tag)}}" class="btn btn-primary btn-sm">Update</a>
                  @endcan
                </td>
                <td width="10px">
                  @can('admin.tags.destroy')    
                    <form action="{{route('admin.tags.destroy', $tag)}}" method="POST">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                    </form>
                  @endcan
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