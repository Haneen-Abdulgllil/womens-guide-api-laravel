<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FunderResourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('funder_resources')->insert([
            'name' =>'مدخرات شخصية',
            'description' =>'يستطيع رائد الاعمال في بدء عمله الخاص في حالة كان يملك مدخرات شخصية كالمال او المجوهرات وغير ذلك دون الاعتماد على اي ممول خارجي',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('funder_resources')->insert([
            'name' =>' قروض',
            'description' =>'يمكن لرائد الاعمال الحصول على قرض تمويلي من جهات محددة ولكن يجب ان يمتلك ضمان يقدمه للجهة التي سوف تعطيه القرض',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('funder_resources')->insert([
            'name' =>' منح',
            'description' =>'يمكن لرائد الاعمال الحصول على منح من جهات محددة لتمويل مشروعه ولكن يجب ان يمتلك  دراسة جدوى لمشروعه',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
