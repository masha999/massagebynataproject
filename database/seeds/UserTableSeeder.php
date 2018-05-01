<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_guest = Role::where('name', 'Guest')->first();
        $role_user = Role::where('name', 'User')->first();
        $role_admin = Role::where('name', 'Admin')->first();
        

        $guest = new User();
        $guest->first_name = 'Guest';
        $guest->last_name = 'Guest';
        $guest->email = 'guest@guest.com';
        $guest->password = bcrypt('guest9');
        $guest->save();
        $guest->roles()->attach($role_guest);


        $user = new User();
        $user->first_name = 'User';
        $user->last_name = 'User';
        $user->email = 'user@user.com';
        $user->password = bcrypt('user99');
        $user->save();
        $user->roles()->attach($role_user);
        
        
        $admin = new User();
        $admin->first_name = 'Admin';
        $admin->last_name = 'Admin';
        $admin->email = 'admin@admin.com';
        $admin->password = bcrypt('admin9');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
