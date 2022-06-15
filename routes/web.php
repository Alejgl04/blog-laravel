<?php

use App\Http\Controllers\PostController;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Route;

// Route::get('/remove',function(){
//   $url = 'https://res.cloudinary.com/dpn3mhrlz/image/upload/v1655307540/20d524ea-7f59-402a-8dd3-17e747155cbf_ufbi6k.jpg';
//   $values = parse_url($url);
  
//   $host = explode('/',$values['path']);
//   print_r($host);
//   $public_Id = explode('.', $host[5]);
//   cloudinary::destroy($public_Id[0]);

// });

Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('category/{category}', [PostController::class, 'category'])->name('posts.category');

Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
