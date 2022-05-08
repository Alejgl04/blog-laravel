<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostIndex extends Component
{
  Use WithPagination;
  
  protected $paginationTheme = "bootstrap";
  
  public $search;

  public function updatingSearch() {

    $this->resetPage();

  }

  public function render()
  {
    $posts = Post::where('user_id', auth()->user()->id)
                  ->where('name', 'LIKE', '%' . $this->search . '%')
                  ->latest('id')
                  ->paginate();
    $count = count($posts);

    return view('livewire.admin.post-index', compact('posts', 'count'));
  }
}
