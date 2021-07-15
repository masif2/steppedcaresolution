<?php

namespace Database\Seeders;

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
        //
        \DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'imadmin@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'Admin',
            'status' => 'Active',
            'project_id' => 1,
            'createdBy'=>0
            
        ]);
        \DB::table('users')->insert([
            'name' => 'manager',
            'email' => 'immanager@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'Manager',
            'status' => 'Active',
            'project_id' => 1,
            'createdBy'=>1
        ]);
        \DB::table('users')->insert([
            'name' => 'user',
            'email' => 'imuser@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'User',
            'status' => 'Active',
            'project_id' => 1,
            'createdBy'=>1

        ]);
    }
}
