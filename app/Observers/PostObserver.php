<?php

namespace App\Observers;
use App;
use App\Models\Post;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Storage;

class PostObserver
{
  /**
   * Handle the Post "created" event.
   *
   * @param  \App\Models\Post  $post
   * @return void
   */
  public function creating(Post $post)
  {
    if ( ! \App::runningInConsole() ) {
      $post->user_id = auth()->user()->id;
    }
  }
  /**
   * Handle the Post "deleted" event.
   *
   * @param  \App\Models\Post  $post
   * @return void
   */
  public function deleting(Post $post)
  {
    if ( $post->image ) {
      if( env('APP_ENV')=='local' ){
        Storage::delete( $post->image->url );
      
      }
      else{
        $valueUrl = parse_url($post->image->url);
        $host = explode('/',$valueUrl['path']);
        $public_Id = explode('.', $host[6]);
        Cloudinary::destroy( $public_Id[0] );
      }

    }     
  }
}
