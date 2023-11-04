<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubWorkFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sub_work_fields')->insert([
            'name' =>'اﻷﻋﻤﺎل اﻟﺤﺮﻓﻴﺔ',
            'description' =>'يختص هذا المجال بالحرف اليدوية',
            'work_field'=>'1',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sub_work_fields')->insert([
            'name' =>'ﺧﺪﻣﺎت اﻟﺪﻋﺎﻳﺔ واﻹﻋﻼن واﻟﺘﻮزﻳﻊ واﻟﻨﺸﺮ',
            'description' =>'يختص هذا المجال بالحرف اليدوية',
            'work_field'=>'2',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sub_work_fields')->insert([
            'name' =>'ﺧﺪﻣﺎت اﻻﺗﺼﺎﻻت ﺑﻤﺨﺘﻠﻒ أﻧﻮاﻋﻬﺎ',
            'description' =>'يختص هذا المجال بالحرف اليدوية',
            'work_field'=>'3',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sub_work_fields')->insert([
            'name' =>'ﺧﺪﻣﺎت ﺗﺠﺎرﻳﺔ',
            'description' =>'يختص هذا المجال بالحرف اليدوية',
            'work_field'=>'3',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sub_work_fields')->insert([
            'name' =>'اﻟﻤﺤﻼت ﻏﻴﺮ اﻟﺜﺎﺑﺘﺔ',
            'description' =>'يختص هذا المجال بالحرف اليدوية',
            'work_field'=>'2',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
