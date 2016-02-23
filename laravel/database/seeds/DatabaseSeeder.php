<?php

use Illuminate\Database\Seeder;

//use UserTableSeeder;
//use SyntaxTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UserTableSeeder::class);
        //$this->call(SyntaxTableSeeder::class);
        $this->call('UserTableSeeder');
        $this->call('SyntaxTableSeeder');
    }
}
