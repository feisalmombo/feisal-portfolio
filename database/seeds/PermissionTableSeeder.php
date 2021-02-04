<?php

use Illuminate\Database\Seeder;
use App\Permissions\HasPermissionsTrait;
use App\Role;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $dev_role = Role::where('slug', 'developer')->first();
        $manager_role = Role::where('slug', 'manager')->first();
        $admin_role = Role::where('slug',  'administrator')->first();
        $normal_user_role = Role::where('slug',  'normal user')->first();

        $createUsers = new Permission();
        $createUsers->slug = 'create';
        $createUsers->name = 'Create';
        $createUsers->save();
        $createUsers->roles()->attach($dev_role);

        $editUsers = new Permission();
        $editUsers->slug = 'edit';
        $editUsers->name = 'Edit';
        $editUsers->save();
        $editUsers->roles()->attach($manager_role);

        $deleteUsers = new Permission();
        $deleteUsers->slug = 'delete';
        $deleteUsers->name = 'Delete';
        $deleteUsers->save();
        $deleteUsers->roles()->attach($admin_role);

        $view = new Permission();
        $view->slug = 'create_inquiries';
        $view->name = 'Create Inquiries';
        $view->save();
        $view->roles()->attach($normal_user_role);

    }
}
