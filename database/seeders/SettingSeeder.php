<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        DB::table('settings')->insert([
            'project_name' =>'WomensGuide',
            'project_logo' =>'default_logo.webp',
            'about_application' => 'يتضمن هذا التطبيق تعريفا بالاجراءات المتبعة للحصول على رخصة مزاولة المهن المختلفة وكذلك الاجراءات المتبعة لاستخراج السجلات التجارية والصناعية من الجهات الحكومية , كما يعرف هذا التطبيق اصحاب المنشأت الصغيرة بالمهن والانشطة والتي يتوجب ان تحصل على تراخيص مزاولة المهنة, كمان ان هذا الدليل يعطي لمحة عن التمويلات وبعض الارشادات العامة التي يتوجب على رواد الاعمال اتباعها لضمان نجاح المشروع.',
            'application_service' => 'الحصول على كل المعلومات اللازمة لتسجيل المنشأت الصغيرة ',
            'funder_name' => 'Search for Common Ground',
            'funder_logo' => 'default_logo.webp',
            'funder_description' => 'Trust, Collaboration, Breakthhroughs',
            'implementing_entity_name' =>'جمعية الطموح لرعاية وتأهيل الصم',
            'implementing_entity_logo' =>'default_logo.webp',
            'implementing_entity_description' =>'جمعية الطموح لرعاية وتأهيل الصم',
            'email' =>'womensguide@gmail.com',
            'whatsapp_number' =>'777777777',
            'phone_number' =>'777777777',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
