<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    public function run()
    {
        $role_guest = new Role();
        $role_guest->name = 'Guest';
        $role_guest->description = 'A Guest';
        $role_guest->save();
        

        $role_user = new Role();
        $role_user->name = 'User';
        $role_user->description = 'A User';
        $role_user->save();
        

        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'An Admin';
        $role_admin->save();
    }
}