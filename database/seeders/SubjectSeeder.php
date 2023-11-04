<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('subjects')->insert([
            'code' => 'AT-103',
            'name' => 'Basic Electronics',
            'unit' => 4,
            'course_id' => 1,
            'instructor_id' => 1,
        ]);



    }
}
