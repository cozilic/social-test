<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $user = factory(App\User::class)->create([
            'name' => 'Patrik Forsberg',
            'username' => 'cozilic',
            'email' => 'aggen81@gmail.com',
        ]);
        $user->profile()->save(new App\Profile);

        factory(App\User::class, 50)->create()->each(function ($u) {
            $u->profile()->save(factory(App\Profile::class)->make());
        });
        //factory(App\Post::class, 10)->create();

    }
}
