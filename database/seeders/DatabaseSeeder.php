<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Faker\Core\File;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File as FacadesFile;
Use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      // Storage::deleteDirectory('posts');
      // Storage::makeDirectory('posts');
      // FacadesFile::makeDirectory('public/storage/posts');
      // FacadesFile::deleteDirectory('public/storage/posts');
      $this->call(RoleSeeder::class);

      $this->call( UserSeeder::class );
      Category::factory(4)->create();
      Tag::factory(8)->create();
      // $this->call(PostSeeder::class);
    }
}
