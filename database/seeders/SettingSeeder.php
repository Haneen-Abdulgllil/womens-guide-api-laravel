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
            'project_logo' =>'app_logo.jpg',
            'about_application' => 'يتضمن هذا التطبيق تعريفا بالاجراءات المتبعة للحصول على رخصة مزاولة المهن المختلفة وكذلك الاجراءات المتبعة لاستخراج السجلات التجارية والصناعية من الجهات الحكومية , كما يعرف هذا التطبيق اصحاب المنشأت الصغيرة بالمهن والانشطة والتي يتوجب ان تحصل على تراخيص مزاولة المهنة, كمان ان هذا الدليل يعطي لمحة عن التمويلات وبعض الارشادات العامة التي يتوجب على رواد الاعمال اتباعها لضمان نجاح المشروع.',
            'application_service' => 'الحصول على كل المعلومات اللازمة لتسجيل المنشأت الصغيرة ',
            'funder_name' => 'Search for Common Ground',
            'funder_logo' => 'sfcg-logo.svg',
            'funder_description' => 'Trust, Collaboration, Breakthhroughs',
            'implementing_entity_name' =>'جمعية الطموح لرعاية وتأهيل الصم',
            'implementing_entity_logo' =>'altamuh.jpg',
            'implementing_entity_description' =>'الرؤية:جمعية رائدة في خدمة ذوي الاعاقة السمعية و دمجهم في المجتمع وان يكونوا قادرين على المساهمه والاندماج وتقديم الخدمات للمجتمع 
            الرساله:
            تقديم خدمات وبرامج متميزة وبكفاءة عالية تسهم في تحقيق التنمية الشاملة للمجتمع خصوصاً لذوي الاعاقة السمعية بطريقة تضمن المشاركة المجتمعية',
            'email' =>'womensguide@gmail.com',
            'whatsapp_number' =>'777777777',
            'phone_number' =>'777777777',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
