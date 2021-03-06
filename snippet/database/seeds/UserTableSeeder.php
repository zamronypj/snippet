<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
              [
                'name' => 'admin',
                'email' => 'admin@snip.pet',
                'password' => bcrypt('snipsnip'),
                'remember_token' => str_random(10)
              ]);
    }
}
