<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

  public function __construct()
  {
    $this->middleware('can:admin.tags.index')->only('index');
    $this->middleware('can:admin.tags.create')->only('create', 'store');
    $this->middleware('can:admin.tags.edit')->only('edit', 'update');
    $this->middleware('can:admin.tags.destroy')->only('destroy');
  }

  public function index()
  {
    $tags = Tag::all();
    $count = count($tags);

    return view('admin.tags.index', compact('tags', 'count'));
  }

  public function create()
  {
    $colors = [
      'red' => 'Red Color',
      'yellow' => 'Yellow Color',
      'green' => 'Green Color',
      'indigo' => 'Indigo Color',
      'blue' => 'Blue Color',
      'purple' => 'Purple Color',
      'pink' => 'Pink Color'
    ];
    return view('admin.tags.create', compact('colors'));
  }

  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required',
      'slug' => 'required|unique:tags',
      'color' => 'required'
    ]);
    $tag = Tag::create($request->all());
    return redirect()->route('admin.tags.edit', compact('tag'))->with('info', 'The tag has been successfully created');
  }

  public function edit(Tag $tag)
  {
    $colors = [
      'red' => 'Red Color',
      'yellow' => 'Yellow Color',
      'green' => 'Green Color',
      'indigo' => 'Indigo Color',
      'blue' => 'Blue Color',
      'purple' => 'Purple Color',
      'pink' => 'Pink Color'
    ];
    return view('admin.tags.edit', compact('tag', 'colors'));
  }

  public function update(Request $request, Tag $tag)
  {
    $request->validate([
      'name' => 'required',
      'slug' => "required|unique:tags,slug,$tag->id",
      'color' => 'required'
    ]);
    $tag->update($request->all());
    return redirect()->route('admin.tags.edit', $tag)->with('info', 'The tag has been successfully updated');
  }
  
  public function destroy(Tag $tag)
  {
    $tag->delete();
    return redirect()->route('admin.tags.index')->with('info', 'The tag has been successfully deleted');
  }
}
