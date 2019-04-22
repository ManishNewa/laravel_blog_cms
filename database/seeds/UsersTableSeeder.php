<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //reset the users table
         
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

         // generate 3 users/author
         DB::table('users')->insert([
             [
                 'name' => 'Ram Singh',
                 'email' => 'ram@gmail.com',
                 'password' => bcrypt('secret')
             ],
             [
                 'name' => 'Hari Krishna',
                 'email' => 'hari@gmail.com',
                 'password' => bcrypt('secret')
             ],
             [
                 'name' => 'Sita Kumari',
                 'email' => 'sita@gmail.com',
                 'password' => bcrypt('secret')
             ]
         ]);
    }
}
