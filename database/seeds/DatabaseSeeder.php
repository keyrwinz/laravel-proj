<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // DB::table('users')->insert([
        // 	'name' => 'kenkenn',
        // 	'email' => 'kenkennz@yahoo.com',
        // 	'password' => '123',

        // 	'name' => str_random(10),
        // 	'email' => str_random(10).'@yahoo.com',
        // 	'password' => bcrypt('secret'),
        // ]);
        factory(App\User::class, 40)->create();
    }
}
