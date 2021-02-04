<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\User;
use App\Role;
use App\Permission;

class UsersTableSeeder extends Seeder
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


        $dev_permission = Permission::where('slug','create')->first();
        $manager_permission = Permission::where('slug', 'edit')->first();
        $admin_permission = Permission::where('slug', 'delete')->first();
        $normal_user_permission = Permission::where('slug', 'view')->first();


        $developer = new User();
        $developer->first_name = 'Feisal';
        $developer->middle_name = 'Suleiman';
        $developer->last_name = 'Mombo';
        $developer->email = 'feisal.mombo@getpesa.co.tz';
        $developer->phone_number = '255684456287';
        $developer->password = bcrypt('123456');
        $developer->created_at = Carbon::now();
        $developer->updated_at = Carbon::now();
        $developer->save();
        $developer->roles()->attach($dev_role);
        $developer->permissions()->attach($dev_permission);


    }
}

