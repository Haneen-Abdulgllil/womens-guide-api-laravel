<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeneficiarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('beneficiaries')->insert([
            'name' =>'حنين عبد الجليل',
            'project_name' =>'شركة ستارت اب تقنية',
            'work_field'=>'2',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('beneficiaries')->insert([
            'name' =>'حنين عبد الجليل',
            'project_name' =>'شركة ستارت اب تقنية',
            'work_field'=>'3',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('beneficiaries')->insert([
            'name' =>'حنين عبد الجليل',
            'project_name' =>'شركة ستارت اب تقنية',
            'work_field'=>'1',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('beneficiaries')->insert([
            'name' =>'حنين عبد الجليل',
            'project_name' =>'شركة ستارت اب تقنية',
            'work_field'=>'4',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('beneficiaries')->insert([
            'name' =>'حنين عبد الجليل',
            'project_name' =>'شركة ستارت اب تقنية',
            'work_field'=>'5',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
