<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offices')->insert([
            'name' =>'مكتب السياحة',
            'description' =>'مكتب إصدار تراخيص المنشآت الفندقية والسياحية: فنادق ، قرى ومدن ومنتجعات سياحية، الأجنحة و الاستراحات والشقق والدور المفروشة ، النزل ، الشاليهات.',
            'address' => 'جولة الاخوة',
            'google_map' => 'https://maps.app.goo.gl/Xa8d7tBRyya28Y8b7',
            'required_actions' => 'التقدم بطلب كتابي للحصول على ترخيص مزاولة النشاط مرفقاً به صور معتمدة من الوثائق المطلوبة.
            • التصنيف السياحي بالدرجة أو المستوى المناسب للمواصفات الفنية.
            • استيفاء الرسوم المقررة للترخيص (بحسب الدرجة).
            • استيفاء أي تراخيص أو موافقات قانونية مكملة من الجهات الحكومية ذات العلاقة.',
            'notes' => 'هذا المكتب مختص باستخراج التراخيص بالمنشآت الفندقية والسياحية',
            'website_url' => 'https://yemen-nic.info/ministations/detail.php?ID=10170',
            'logo' =>'yemen_logo.png',
            'facebook_account' =>'https://yemen-nic.info/ministations/detail.php?ID=10170',
            'linkedin_account' =>'https://yemen-nic.info/ministations/detail.php?ID=10170',
            'email' =>'womensguide@gmail.com',
            'phone_number' =>'777777777',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('offices')->insert([
            'name' =>'مكتب الصحة العامة والسكان',
            'description' =>'منح رخص مزاولة المهن الطبية',
            'address' => 'جولة الاخوة',
            'google_map' => 'https://maps.app.goo.gl/Xa8d7tBRyya28Y8b7',
            'required_actions' => 'تلقي الطلبات ورفعها للمدير العام
            تحول المعاملة إلى مدير الإدارة
            تحول إلى رئيس القسم
            يتم مراجعتها ورفعها عكسيا (من الإدارة إلى المدير العام )',
            'notes' => 'هذا المكتب يمكنك من الحصول على تصريح مزاولة المهن الطبية والمنشات',
            'website_url' => 'https://yemen-nic.info/ministations/detail.php?ID=10170',
            'logo' =>'yemen_logo.png',
            'facebook_account' =>'https://yemen-nic.info/ministations/detail.php?ID=10170',
            'linkedin_account' =>'https://yemen-nic.info/ministations/detail.php?ID=10170',
            'email' =>'womensguide@gmail.com',
            'phone_number' =>'777777777',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('offices')->insert([
            'name' =>'مكتب الأشغال العامة والطرق',
            'description' =>'  منح رخص البناء',
            'address' => 'جولة الاخوة',
            'google_map' => 'https://maps.app.goo.gl/Xa8d7tBRyya28Y8b7',
            'required_actions' => '· وثيقة الملكية معمدة من المحكمة والسجل العقاري
            · المخطط الخاص التابع للمبني (التصاميم المعمارية والإنشائية)       
            ·المخطط العام التابع للبلدية',
            'website_url' => 'https://yemen-nic.info/ministations/detail.php?ID=10170',
            'logo' =>'yemen_logo.png',
            'facebook_account' =>'https://yemen-nic.info/ministations/detail.php?ID=10170',
            'linkedin_account' =>'https://yemen-nic.info/ministations/detail.php?ID=10170',
            'email' =>'womensguide@gmail.com',
            'phone_number' =>'777777777',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
  
    }
    
}
