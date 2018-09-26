<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Shriya Jain',
            'email' => 'shriya.jain@gmail.com',
            'password' => bcrypt('shriya.jain'),
        ]);
        DB::table('users')->insert([
            'name' => 'Shriya Jain',
            'email' => 'shriya.jain1@gmail.com',
            'password' => bcrypt('shriya.jain'),
        ]);
          
        DB::table('users')->insert([
            'name' => 'Shriya Jain',
            'email' => 'shriya.jain2@gmail.com',
            'password' => bcrypt('shriya.jain'),
        ]);
          
        DB::table('users')->insert([
            'name' => 'Shriya Jain',
            'email' => 'shriya.jain3@gmail.com',
            'password' => bcrypt('shriya.jain'),
        ]);
        DB::table('users')->insert([
            'name' => 'Shriya Jain',
            'email' => 'shriya.jain4@gmail.com',
            'password' => bcrypt('shriya.jain'),
        ]);
    }
}
