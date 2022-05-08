<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $guarded = [
    'id',
    'create_at',
    'update_at'
  ];

  use HasFactory;

  /**Relacion uno a mucho inversa */
  public function user(){
    return $this->belongsTo( User::class );
  }
  public function category(){
    return $this->belongsTo( Category::class );
  }

  /**Relacion muchos a muchos */

  public function tags(){
    return $this->belongsToMany(Tag::class);
  }

  /**Relación uno a uno polimorfica */
  public function image(){
    return $this->morphOne( Image::class, 'imageable' );
  }
}

