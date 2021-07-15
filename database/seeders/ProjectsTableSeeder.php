<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('projects')->insert([
            'name' => 'project 1',  
            'image'=>'/uploads/login.PNG'
        ]);
        \DB::table('projects')->insert([
            'name' => 'project 2',  
            'image'=>'/uploads/login.PNG'
        ]);
        \DB::table('projects')->insert([
            'name' => 'project 3',  
            'image'=>'/uploads/login.PNG'
        ]);
    }
}
