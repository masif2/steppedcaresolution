<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('periods')->insert([
            'name' => 'Period 1',
            'status' => 1,
            'start_date' => date('Y-m-d'),
            'end_date' => date('Y-m-d'),
            'created_by' => 1,
        ]);
    }
}
