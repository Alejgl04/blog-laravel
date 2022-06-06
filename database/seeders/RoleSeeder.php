<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //1
      $roleAdm = Role::create(['name' => 'Admin']);
      //2
      $rolBlog = Role::create(['name' => 'Blogger']);

      Permission::create(['name' => 'admin.home', 'description' => 'Dashboard'])->syncRoles([$roleAdm, $rolBlog]);

      Permission::create(['name' => 'admin.users.index', 'description' => 'List Users'])->syncRoles([$roleAdm]);
      Permission::create(['name' => 'admin.users.edit', 'description' => 'Assign rol'])->syncRoles([$roleAdm]);

      Permission::create(['name' => 'admin.categories.index', 'description' => 'List Categories'])->syncRoles([$roleAdm,$rolBlog]);
      Permission::create(['name' => 'admin.categories.create', 'description' => 'Create Categories'])->syncRoles([$roleAdm]);
      Permission::create(['name' => 'admin.categories.edit', 'description' => 'Update Categories'])->syncRoles([$roleAdm]);
      Permission::create(['name' => 'admin.categories.destroy', 'description' => 'Remove Categories'])->syncRoles([$roleAdm]);

      Permission::create(['name' => 'admin.tags.index', 'description' => 'List Labels'])->syncRoles([$roleAdm,$rolBlog]);
      Permission::create(['name' => 'admin.tags.create', 'description' => 'Create Labels'])->syncRoles([$roleAdm]);
      Permission::create(['name' => 'admin.tags.edit', 'description' => 'Update Labels'])->syncRoles([$roleAdm]);
      Permission::create(['name' => 'admin.tags.destroy', 'description' => 'Remove Labels'])->syncRoles([$roleAdm]);

      Permission::create(['name' => 'admin.posts.index', 'description' => 'List Posts'])->syncRoles([$roleAdm, $rolBlog]);
      Permission::create(['name' => 'admin.posts.create', 'description' => 'Create Posts'])->syncRoles([$roleAdm, $rolBlog]);
      Permission::create(['name' => 'admin.posts.edit', 'description' => 'Update Posts'])->syncRoles([$roleAdm, $rolBlog]);
      Permission::create(['name' => 'admin.posts.destroy', 'description' => 'Remove Posts'])->syncRoles([$roleAdm, $rolBlog]);

      
    }
}
