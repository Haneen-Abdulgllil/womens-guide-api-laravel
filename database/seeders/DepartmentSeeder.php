<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('departments')->insert([
            'name' =>'الإدارة العامة للمنشآت الطبية',
            'description' =>'الحصول على تصريح مزاولة المهن الطبية والمنشات',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('departments')->insert([
            'name' =>'الإدارة العامة للمنشآت الطبية',
            'description' =>'الحصول على تصريح مزاولة المهن الطبية والمنشات',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('departments')->insert([
            'name' =>'الإدارة العامة للمنشآت الطبية',
            'description' =>'الحصول على تصريح مزاولة المهن الطبية والمنشات',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('departments')->insert([
            'name' =>'الإدارة العامة للمنشآت الطبية',
            'description' =>'الحصول على تصريح مزاولة المهن الطبية والمنشات',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('departments')->insert([
            'name' =>'الإدارة العامة للمنشآت الطبية',
            'description' =>'الحصول على تصريح مزاولة المهن الطبية والمنشات',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
