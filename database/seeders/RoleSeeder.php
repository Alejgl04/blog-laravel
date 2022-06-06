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

      Permission::create(['name' => 'admin.home'])->syncRoles([$roleAdm, $rolBlog]);

      Permission::create(['name' => 'admin.users.index'])->syncRoles([$roleAdm]);
      Permission::create(['name' => 'admin.users.edit'])->syncRoles([$roleAdm]);
      Permission::create(['name' => 'admin.users.update'])->syncRoles([$roleAdm]);

      Permission::create(['name' => 'admin.categories.index'])->syncRoles([$roleAdm]);
      Permission::create(['name' => 'admin.categories.create'])->syncRoles([$roleAdm]);
      Permission::create(['name' => 'admin.categories.edit'])->syncRoles([$roleAdm]);
      Permission::create(['name' => 'admin.categories.destroy'])->syncRoles([$roleAdm]);

      Permission::create(['name' => 'admin.tags.index'])->syncRoles([$roleAdm]);
      Permission::create(['name' => 'admin.tags.create'])->syncRoles([$roleAdm]);
      Permission::create(['name' => 'admin.tags.edit'])->syncRoles([$roleAdm]);
      Permission::create(['name' => 'admin.tags.destroy'])->syncRoles([$roleAdm]);

      Permission::create(['name' => 'admin.posts.index'])->syncRoles([$roleAdm, $rolBlog]);
      Permission::create(['name' => 'admin.posts.create'])->syncRoles([$roleAdm, $rolBlog]);
      Permission::create(['name' => 'admin.posts.edit'])->syncRoles([$roleAdm, $rolBlog]);
      Permission::create(['name' => 'admin.posts.destroy'])->syncRoles([$roleAdm, $rolBlog]);

      
    }
}
