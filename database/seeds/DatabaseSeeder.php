<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Profile;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);

        factory(User::class, 50)->create()->each(function ($u) {
            $u->profile()->save(factory(Profile::class)->make());
        });
        factory(\App\Post::class, 10)->create();

    }
}
