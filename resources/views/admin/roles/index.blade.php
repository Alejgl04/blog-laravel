@extends('adminlte::page')

@section('title', 'Blog AG | Roles of Blog')

@section('content_header')
    <h1>List of Roles</h1>
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
      <a href="{{route('admin.roles.create')}}" class="btn btn-secondary">New rol</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Rol</th>
              <th colspan="2"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($roles as $role)
             <tr>
              <td>{{ $role->id }}</td>
              <td>{{ $role->name }}</td>
              <td width="10px">
                <a href="{{ route('admin.roles.edit', $role) }}" class="btn btn-sm btn-primary">
                  Update
                </a>
              </td>
              <td width="10px">
                <form action="{{ route('admin.roles.destroy', $role) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                </form>
              </td>
             </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="./css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop