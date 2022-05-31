@extends('adminlte::page')

@section('title', 'Blog AG')

@section('content_header')
    <h1>List of Categories</h1>
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
      <a href="{{route('admin.categories.create')}}" class="btn btn-secondary">Add categories</a>
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
            @foreach ($categories as $category)
              <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td width="10px">
                  <a href="{{route('admin.categories.edit', $category)}}" class="btn btn-primary btn-sm">Update</a>
                </td>
                <td width="10px">
                  <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
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
