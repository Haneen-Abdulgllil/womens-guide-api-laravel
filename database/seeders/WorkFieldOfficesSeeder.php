<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkFieldOfficesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('work_field_office')->insert([
            'work_field_id' =>'1',
            'office_id' =>'1',
        ]);

        DB::table('work_field_office')->insert([
            'work_field_id' =>'1',
            'office_id' =>'3',
        ]);

        DB::table('work_field_office')->insert([
            'work_field_id' =>'2',
            'office_id' =>'1',
        ]);

        DB::table('work_field_office')->insert([
            'work_field_id' =>'3',
            'office_id' =>'1',
        ]);

        DB::table('work_field_office')->insert([
            'work_field_id' =>'3',
            'office_id' =>'2',
        ]);

        DB::table('work_field_office')->insert([
            'work_field_id' =>'4',
            'office_id' =>'1',
        ]);

        DB::table('work_field_office')->insert([
            'work_field_id' =>'5',
            'office_id' =>'1',
        ]);

        DB::table('work_field_office')->insert([
            'work_field_id' =>'5',
            'office_id' =>'2',
        ]);


        DB::table('work_field_office')->insert([
            'work_field_id' =>'5',
            'office_id' =>'2',
        ]);

        DB::table('work_field_office')->insert([
            'work_field_id' =>'5',
            'office_id' =>'3',
        ]);
    }
}
