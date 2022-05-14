<div class="card">

  <div class="card-header">
    <input wire:model="search" type="text" class="form-control" placeholder="Search...">
    <a href="{{route('admin.posts.create')}}" class="btn btn-secondary mt-2">Add Post</a>

  </div>
    @if ( $posts->count() )

      <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th colspan="2"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
              <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->name}}</td>
                <td width="10px">
                  <a href="{{route('admin.posts.edit', $post)}}" class="btn btn-primary btn-sm">Editar</a>
                </td>
                <td width="10px">
                  <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                  </form>
                </td>
              </tr>
            @endforeach   
          </tbody>
        </table>
      </div>
      <div class="card-footer">
        {{ $posts->links() }}
      </div>
    @else
      <div class="card-body">
        <strong>
          <table>
            <tbody>
              <tr>
                <td>
                  No data to display with {{ $search }} 
                </td>
              </tr>
            </tbody>
          </table>
        </strong>
      </div>
    @endif
</div>