<div class="card">

  <div class="card-header">
    <input wire:model="search" type="text" class="form-control" placeholder="Search...">
    <a href="{{route('admin.posts.create')}}" class="btn btn-secondary mt-2">Add Post</a>

  </div>
    @if ( $posts->count() )

      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Category</th>
                <th>Status</th>
                <th colspan="2"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($posts as $post)
                <tr>
                  <td>{{$post->id}}</td>
                  <td>{{$post->name}}</td>
                  <td>{{$post->category->name}}</td>
  
                  @if ( $post->status == 1 )
                   <td>Preview </td>
                      
                  @else
                  <td>Published 
                    <span style="color: green">
                      <i class="fas fa-check-circle"></i>
                    </span>
                  </td>
                  @endif
                  <td width="10px">
                    <a href="{{route('admin.posts.edit', $post)}}" class="btn btn-primary btn-sm">Update</a>
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
