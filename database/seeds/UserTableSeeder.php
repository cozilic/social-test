<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use App\Profile;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_moderator = Role::where('name', 'moderator')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user = factory(User::class)->create([
            'name' => 'Patrik Forsberg',
            'username' => 'cozilic',
            'email' => 'aggen81@gmail.com',
        ]);
        $user->roles()->attach($role_admin);

        $user->profile()->save(new Profile([
            'facebook_username' => 'cozilic',
            'twitter_username' => 'cozilic',
            'avatar' => '/images/cozilic_avatar.png',
            'google_username' => '107975657537653133900',
            'bgimage' => '/images/webbg.jpg',
        ]));

    }
}
