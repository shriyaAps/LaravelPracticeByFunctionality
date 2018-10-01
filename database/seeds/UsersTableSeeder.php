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
            'email' => 'shriya.jain12@gmail.com',
            'password' => bcrypt('shriya.jain'),
        ]);
    }
}
