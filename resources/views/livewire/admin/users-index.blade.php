<div>
    <div class="card">

      <div class="card-header">
        <input type="text" wire:model="search" class="form-control" placeholder="Enter name or email...">
      </div>

      @if ( $users->count() )
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th></th>  
                </tr>  
              </thead> 
              <tbody>
                @foreach ($users as $user)
                  <tr>
                    <td> {{ $user->id }} </td>
                    <td> {{ $user->name }} </td>
                    <td> {{ $user->email }} </td>
                    <td width="10px">
                      <a class="btn btn-primary" href="{{route('admin.users.edit', $user )}}"> Update </a>
                    </td>
                  </tr>
                @endforeach
              </tbody> 
            </table>
          </div>  
        </div>  

        <div class="card-footer">
          {{ $users->links() }}
        </div>
      @else
        <div class="card-body">
          <strong>No data to display with {{ $search }} </strong>
        </div>
      @endif
    </div>  
</div>
