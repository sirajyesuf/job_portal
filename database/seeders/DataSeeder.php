<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
            'name' => 'Employement Type',
            'type' => 'employment_type'
            ],
            [
                'name' => 'Carrer Level',
                'type' => 'carrer_level'
            ],
            [
                'name' => 'Work Experiance',
                'type' => 'work_experiance'
            ],
            [
                'name' => 'Field Of Study',
                'type' => 'field_of_study'
            ],
            [
                'name' => 'Education Level',
                'type' => 'education_level'
            ],
            [
                'name' => 'Profession',
                'type' => 'profession'
            ],
   
        ];

        // DB::table('data')->truncate();

        DB::table('data')->insert($data);

   


    }
}
