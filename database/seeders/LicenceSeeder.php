<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LicenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('licences')->insert([
            'name' =>'تصريح مزاولة المهن الطبية والمنشات',
            'description' =>'تصريح مزاولة المهن الطبية والمنشات',
            'importance'=>' ﻳﻬﺪف ﻫﺬا اﻟﱰﺧﻴﺺ إﱃ إﻋﻄﺎء ﻛــﺎﻓﺔ اﻟﺼـﻼﺣﻴﺎت ﻟﺼﺎﺣﺐ اﻟﻤﻨﺸﺄة ﺑﻤﻤﺎرﺳﺔ ﻧﺸــﺎﻃﻪ ﺑﺪون أي ﻋﻮاﺋﻖ أو ﻣﺴﺎﺋﻼت ﻗﺎﻧﻮﻧﻴﺔ ﻛﻤـﺎ ﻳﻬﺪف إﱃ أن اﻟﻤﻨﺸﺄة اﻟﻤﻘﺎﻣﺔ ﺧﺼﻮﺻﺎ ﻋﲆ اﻟﺸﻮارع اﻟﺮﺋﻴﺴﻴﺔ ﻻ ﺗﺆﺛﺮ ﻋﲆ اﻟﺒﻴﺌﺔ وﻻ ﺗﺴﺒﺐ أي ﺿﻮﺿـﺎء وﻻ ﳾء إﱃ ﺟﻤﺎل اﻟﻤﺪﻳﻨﺔ ، وﺑﺎﻟﺘﺎﱄ ﻓﻬﺬا اﻟﱰﺧﻴﺺ إﻟﺰاﻣﻲ وﺗﻜﻤﻦ أﻫﻤﻴﺔ ﺗﺮﺧﻴﺺ ﻣﺰاوﻟﺔ اﻟﻤﻬﻦ ﰲ أن اﻟﻤﻨﺸﺎة أو ﺻﺎﺣﺒﻬﺎ ﻗﺪ اﻧﻀﻢ إﱃ اﻟﻘﻄﺎع اﻟﺮﺳﻤﻲ اﻟﺤﻜﻮﻣﻲ ﺗﺠﻨﺒﺎ ﻣﻦ اﻟﻌﻘﻮﺑﺎت واﻟﻤﺨﺎﻟﻔﺎت اﻟﱵ ﻳﺼﺪرﻫﺎ اﻟﻤﻜﺘﺐ ﺑﺴﺒﺐ اﻟﻔﺘﺢ ﺑﺪون ﺗﺮﺧﻴﺺ ﻛﻤﺎ أن ﺻﺎﺣﺐ اﻟﻤﻨﺸﺎة أو ﺻﺎﺣﺐ اﻟﱰﺧﻴﺺ ﻳﺘﻤﺘﻊ ﺑﺎﻣﺘﻴﺎزات أﺧﺮى ﻣﺜﻞ ﺗﺴﻬﻴﻼت اﻟﺤﺼﻮل ﻋﲆ اﻟﻘﺮوض وﻏﲑﻫﺎ ﺑﺎﻹﺿﺎﻓﺔ إﱃ أن اﻟﻔﻴﺪ ﻳﻮﻓﺮ إﺣﺼﺎﺋﻴﺎت دﻗﻴﻘﺔ ﻋﻦ اﻟﻤﻨﺸﺂت ﺑﻜﺎﻓﺔ أﻧﻮاﻋﻬﺎ',

            'required_documents' => 'رسم هندسي للمبني مقاس 1:100 معمد من الإدارة الهندسية

            صورة وثيقة الملكية أو عقد إيجار المبني معمد من السجل العقاري
            
            صورة عقد تأسيس الشركة أو الهيئة و الجمعية المالكة للمشروع
            
            صورة معمدة من العقد المبرم بين مالك المشروع أو المدير الفني للمنشأة
            
            صورة من عقود العمل للكادر الفني بالمنشاة
            
            صورة معمدة من المؤهلات العلمية للكادر الفني بالمنشأة
            
            استكمال نماذج طلب التشغيل
            
            دفع الرسوم المقررة',

            'procedures' => 'تلقي الطلبات ورفعها للمدير العام

            تحول المعاملة إلى مدير الإدارة
            
            تحول إلى رئيس القسم
            
            يتم مراجعتها ورفعها عكسيا (من الإدارة إلى المدير العام )',
            

            'fees' => ' ﺗﺨﺘﻠﻒ رﺳﻮم اﺳﺘﺨﺮاج اﻟﱰﺧﻴﺺ ﻣﻦ ﺣﻴﺚ ﺗﺼﻨﻴﻒ اﻟﻤﻨﺸﺄة وﺣﺴﺐ درﺟﺘﻬﺎ اﻟﺘﺠﺪﻳﺪ ﻳﺘﻢ ﰲ ﻛﻞ ﺳﻨﺔ ﻣﻴﻼدﻳﺔ            ',

            'penalties' =>' ﺗﺨﺘﻠﻒ رﺳﻮم اﺳﺘﺨﺮاج اﻟﱰﺧﻴﺺ ﻣﻦ ﺣﻴﺚ ﺗﺼﻨﻴﻒ اﻟﻤﻨﺸﺄة وﺣﺴﺐ درﺟﺘﻬﺎ اﻟﺘﺠﺪﻳﺪ ﻳﺘﻢ ﰲ ﻛﻞ ﺳﻨﺔ ﻣﻴﻼدﻳﺔ
            اﻟﻌﻘﻮﺑﺎت اﻟﺠﺰاءات ﰲ ﺣﺎﻟﺔ ﻣﺰاوﻟﺔ ﻋﻤﻞ ﺑﺪون ﺗﺮﺧﻴﺺ ﺑـ ﺻﺎﺣﺐ اﻟﻤﻨﺸﺎة ﻏﺮاﻣﺔ %ﻣﻦ رﺳﻮم اﺳﺘﺨﺮاج اﻟﱰﺧﻴﺺ 100ﻣﺎﻟﻴﺔ ﻗﺪرﻫﺎ  ﰲ ﺣﺎﻟﺔ اﻟﺘﺄﺧﲑ ﻋﻦ اﻟﺘﺠﺪﻳﺪ ﻳﺘﻢ دﻓﻊ ﻏﺮاﻣﺔ ﻣﺎﻟﻴﺔ )ﻏﺮاﻣﺔ ﺗﺄﺧﲑ( %ﻣﻦ إﺟﻤﺎﱄ ﻗﻴﻤﺔ رﺳﻮم اﺳﺘﺨﺮاج اﻟﱰﺧﻴﺺ 50ﻗﺪرﻫﺎ ',
            'notes' =>'ﻫﻨﺎك إرﺷﺎدات ﻣﻦ ﺻﺤﺔ اﻟﺒﻴﺌﺔ ﻓﻴﻤﺎ ﻳﺘﻌﻠﻖ ﺑﴬورة اﺳﺘﺨﺪام ﺑﻌﺾ اﻟﻤﻮاد ﰲ اﻟﻤﺤﻼت ﻣﺜﻞ ﻃﻔﺎﻳﺎت اﻟﺤﺮﻳﻖ ﰲ اﻟﻤﺤﻄﺎت اﻟﻜﻤﺎﻣﺎت اﻟﻮﻗﺎﺋﻴﺔ واﻟﻨﻈﺎرات ﰲ ورش اﻟﻠﺤﺎم            ',
            'department' =>'1',
            // 'offices' =>'[1,2,3]',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('licences')->insert([
            'name' =>'اﻟﺴﺠــــﻞ اﻟﺘﺠﺎري',
            'description' =>' وﻫﻲ اﻟﻮﺛﻴﻘﺔ اﻟﺮﺳﻤﻴﺔ اﻟﱵ ﺗﻤﻨﺤﻬﺎ ﻣﻜــــﺎﺗﺐ وزارة اﻟﺼﻨــــــﺎﻋﺔ واﻟﺘﺠـــــــﺎرة ﻟﻜﺎﻓﺔ اﻟﻤﻨﺸﺂت واﻟﻤﺤﻼت اﻟﺘﺠﺎرﻳﺔ ﻣﺜﻞ: ﻣﺤﻼت ﺑﻴﻊ اﻷﺟﻬﺰة اﻟﻤﲋﻟﻴـــﺔ. واﻟﺤﺪﻳﺪ
            إﺟـﺮاءات ﺗﺴﺠﻴـﻞ اﻟﻤﻨﺸﺂت اﻟﺼﻐﻴﺮة رﺧﺼﺔ ﻣﺰاوﻟﺔ اﻟﻤﻬﻨﺔ
            رﺧﺼـﺔ اﻷﻋﻤــــﺎل اﻟﺴﻴﺎﺣﻴﺔ  رﺧﺼـــــﺔ اﻷﻋﻤﺎل اﻟﻄـــﺒﻴﺔ
            اﻟﺴﺠــــﻞ اﻟﺘﺠﺎري',

            'importance'=>' ﻳﻬﺪف ﻫﺬا اﻟﱰﺧﻴﺺ إﱃ إﻋﻄﺎء ﻛــﺎﻓﺔ اﻟﺼـﻼﺣﻴﺎت ﻟﺼﺎﺣﺐ اﻟﻤﻨﺸﺄة ﺑﻤﻤﺎرﺳﺔ ﻧﺸــﺎﻃﻪ ﺑﺪون أي ﻋﻮاﺋﻖ أو ﻣﺴﺎﺋﻼت ﻗﺎﻧﻮﻧﻴﺔ ﻛﻤـﺎ ﻳﻬﺪف إﱃ أن اﻟﻤﻨﺸﺄة اﻟﻤﻘﺎﻣﺔ ﺧﺼﻮﺻﺎ ﻋﲆ اﻟﺸﻮارع اﻟﺮﺋﻴﺴﻴﺔ ﻻ ﺗﺆﺛﺮ ﻋﲆ اﻟﺒﻴﺌﺔ وﻻ ﺗﺴﺒﺐ أي ﺿﻮﺿـﺎء وﻻ ﳾء إﱃ ﺟﻤﺎل اﻟﻤﺪﻳﻨﺔ ، وﺑﺎﻟﺘﺎﱄ ﻓﻬﺬا اﻟﱰﺧﻴﺺ إﻟﺰاﻣﻲ وﺗﻜﻤﻦ أﻫﻤﻴﺔ ﺗﺮﺧﻴﺺ ﻣﺰاوﻟﺔ اﻟﻤﻬﻦ ﰲ أن اﻟﻤﻨﺸﺎة أو ﺻﺎﺣﺒﻬﺎ ﻗﺪ اﻧﻀﻢ إﱃ اﻟﻘﻄﺎع اﻟﺮﺳﻤﻲ اﻟﺤﻜﻮﻣﻲ ﺗﺠﻨﺒﺎ ﻣﻦ اﻟﻌﻘﻮﺑﺎت واﻟﻤﺨﺎﻟﻔﺎت اﻟﱵ ﻳﺼﺪرﻫﺎ اﻟﻤﻜﺘﺐ ﺑﺴﺒﺐ اﻟﻔﺘﺢ ﺑﺪون ﺗﺮﺧﻴﺺ ﻛﻤﺎ أن ﺻﺎﺣﺐ اﻟﻤﻨﺸﺎة أو ﺻﺎﺣﺐ اﻟﱰﺧﻴﺺ ﻳﺘﻤﺘﻊ ﺑﺎﻣﺘﻴﺎزات أﺧﺮى ﻣﺜﻞ ﺗﺴﻬﻴﻼت اﻟﺤﺼﻮل ﻋﲆ اﻟﻘﺮوض وﻏﲑﻫﺎ ﺑﺎﻹﺿﺎﻓﺔ إﱃ أن اﻟﻔﻴﺪ ﻳﻮﻓﺮ إﺣﺼﺎﺋﻴﺎت دﻗﻴﻘﺔ ﻋﻦ اﻟﻤﻨﺸﺂت ﺑﻜﺎﻓﺔ أﻧﻮاﻋﻬﺎ',

            'required_documents' => 'رسم هندسي للمبني مقاس 1:100 معمد من الإدارة الهندسية

            صورة وثيقة الملكية أو عقد إيجار المبني معمد من السجل العقاري
            
            صورة عقد تأسيس الشركة أو الهيئة و الجمعية المالكة للمشروع
            
            صورة معمدة من العقد المبرم بين مالك المشروع أو المدير الفني للمنشأة
            
            صورة من عقود العمل للكادر الفني بالمنشاة
            
            صورة معمدة من المؤهلات العلمية للكادر الفني بالمنشأة
            
            استكمال نماذج طلب التشغيل
            
            دفع الرسوم المقررة',

            'procedures' => 'تلقي الطلبات ورفعها للمدير العام

            تحول المعاملة إلى مدير الإدارة
            
            تحول إلى رئيس القسم
            
            يتم مراجعتها ورفعها عكسيا (من الإدارة إلى المدير العام )',

            'fees' => ' ﻳﺨﺘﻠﻒ رﺳﻮم اﺳﺘﺨﺮاج اﻟﱰﺧﻴﺺ ﰲ اﻟﺴﺠﻞ اﻟﺘﺠﺎري واﻟﺼﻨﺎﻋﻲ ﻣﻦ ﺣﻴﺚ ﻧﻮع وﺗﺼﻨﻴﻒ اﻟﻤﻨﺸﺄة وﺗﺠﺪد ﺑﻄﺎﻗﺔ اﻟﺴﺠﻞ اﻟﺘﺠﺎري واﻟﺼﻨﺎﻋﻲ ﻛﻞ ﺧﻤﺲ ﺳﻨﻮات ﺣﻴﺚ ﻳﻤﻨﺢ ﺻﺎﺣﺐ اﻟﻤﻨﺸﺄة ﻣﺪة ﺷﻬﺮ ﻣﻦ ﺗﺎرﻳﺦ اﻧﺘﻬﺎء اﻟﻘﻴﺪ أو اﻧﺘﻬﺎء آﺧﺮ ﺗﺠﺪﻳﺪ',

            'penalties' =>' ﺗﺨﺘﻠﻒ رﺳﻮم اﺳﺘﺨﺮاج اﻟﱰﺧﻴﺺ ﻣﻦ ﺣﻴﺚ ﺗﺼﻨﻴﻒ اﻟﻤﻨﺸﺄة وﺣﺴﺐ درﺟﺘﻬﺎ اﻟﺘﺠﺪﻳﺪ ﻳﺘﻢ ﰲ ﻛﻞ ﺳﻨﺔ ﻣﻴﻼدﻳﺔ
            اﻟﻌﻘﻮﺑﺎت اﻟﺠﺰاءات ﰲ ﺣﺎﻟﺔ ﻣﺰاوﻟﺔ ﻋﻤﻞ ﺑﺪون ﺗﺮﺧﻴﺺ ﺑـ ﺻﺎﺣﺐ اﻟﻤﻨﺸﺎة ﻏﺮاﻣﺔ %ﻣﻦ رﺳﻮم اﺳﺘﺨﺮاج اﻟﱰﺧﻴﺺ 100ﻣﺎﻟﻴﺔ ﻗﺪرﻫﺎ  ﰲ ﺣﺎﻟﺔ اﻟﺘﺄﺧﲑ ﻋﻦ اﻟﺘﺠﺪﻳﺪ ﻳﺘﻢ دﻓﻊ ﻏﺮاﻣﺔ ﻣﺎﻟﻴﺔ )ﻏﺮاﻣﺔ ﺗﺄﺧﲑ( %ﻣﻦ إﺟﻤﺎﱄ ﻗﻴﻤﺔ رﺳﻮم اﺳﺘﺨﺮاج اﻟﱰﺧﻴﺺ 50ﻗﺪرﻫﺎ ',
            'notes' =>'ﻫﻨﺎك إرﺷﺎدات ﻣﻦ ﺻﺤﺔ اﻟﺒﻴﺌﺔ ﻓﻴﻤﺎ ﻳﺘﻌﻠﻖ ﺑﴬورة اﺳﺘﺨﺪام ﺑﻌﺾ اﻟﻤﻮاد ﰲ اﻟﻤﺤﻼت ﻣﺜﻞ ﻃﻔﺎﻳﺎت اﻟﺤﺮﻳﻖ ﰲ اﻟﻤﺤﻄﺎت اﻟﻜﻤﺎﻣﺎت اﻟﻮﻗﺎﺋﻴﺔ واﻟﻨﻈﺎرات ﰲ ورش اﻟﻠﺤﺎم',
            'department' =>'1',
            // 'offices' => [1,2,3],
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('licences')->insert([
            'name' =>'اﻟﺤﺼﻮل ﻋﻠﻰ رﺧﺼﺔ ﺻﺤﺔ اﻟﺒﻴﺌﺔ )اﻟﺒﻄﺎﻗﺔ اﻟﺼﺤﻴﺔ(',
            'description' =>'اﻟﻤﻨﺸﺂت اﻟﺘﻲ ﻳﺠﺐ أن ﺗﺤﺼﻞ ﻋﻠﻰ اﻟﺘﺮﺧﻴﺺ )وﻫﻮ ﻳﺨﺺ اﻟﻌﺎﻣﻠﻴﻦ واﻟﻤﻨﺸﺄة( اﻟﺤﺼﻮل ﻋﻠﻰ رﺧﺼﺔ ﺻﺤﺔ اﻟﺒﻴﺌﺔ )اﻟﺒﻄﺎﻗﺔ اﻟﺼﺤﻴﺔ( اﻟﻤﻄﺎﻋﻢ-اﻟﺒﻘﺎﻻت-ﺑﺎﺋﻌﻮ اﻟﺨﻀﺎر واﻟﻔﻮاﻛﻪ-اﻟﺒﻮﻓﻴﺎت-ﺑﺎﺋﻌﻮ اﻟﻤﻴﺎه-اﻟﻠﺤﻮم-اﻷﺳﻤﺎك-اﻷﻓﺮان-اﻟﻤﺨﺎﺑﺰﻣﺤﻼت اﻟﺤﻠﻮﻳﺎت-ﻣﻌﺎﴏ اﻟﺴﻤﺴﻢ- اﻟﻌﺎﻣﻠﻮن ﰲ ﺻﺎﻟﻮﻧﺎت اﻟﺤﻼﻗﺔ-اﻟﻤﻐﺎﺳﻞ- اﻟﻜﻮاﻓﲑ- اﻟﻠﻮﻛﻨﺪات',

            'importance'=>' ﻳﻬﺪف ﻫﺬا اﻟﱰﺧﻴﺺ إﱃ إﻋﻄﺎء ﻛــﺎﻓﺔ اﻟﺼـﻼﺣﻴﺎت ﻟﺼﺎﺣﺐ اﻟﻤﻨﺸﺄة ﺑﻤﻤﺎرﺳﺔ ﻧﺸــﺎﻃﻪ ﺑﺪون أي ﻋﻮاﺋﻖ أو ﻣﺴﺎﺋﻼت ﻗﺎﻧﻮﻧﻴﺔ ﻛﻤـﺎ ﻳﻬﺪف إﱃ أن اﻟﻤﻨﺸﺄة اﻟﻤﻘﺎﻣﺔ ﺧﺼﻮﺻﺎ ﻋﲆ اﻟﺸﻮارع اﻟﺮﺋﻴﺴﻴﺔ ﻻ ﺗﺆﺛﺮ ﻋﲆ اﻟﺒﻴﺌﺔ وﻻ ﺗﺴﺒﺐ أي ﺿﻮﺿـﺎء وﻻ ﳾء إﱃ ﺟﻤﺎل اﻟﻤﺪﻳﻨﺔ ، وﺑﺎﻟﺘﺎﱄ ﻓﻬﺬا اﻟﱰﺧﻴﺺ إﻟﺰاﻣﻲ وﺗﻜﻤﻦ أﻫﻤﻴﺔ ﺗﺮﺧﻴﺺ ﻣﺰاوﻟﺔ اﻟﻤﻬﻦ ﰲ أن اﻟﻤﻨﺸﺎة أو ﺻﺎﺣﺒﻬﺎ ﻗﺪ اﻧﻀﻢ إﱃ اﻟﻘﻄﺎع اﻟﺮﺳﻤﻲ اﻟﺤﻜﻮﻣﻲ ﺗﺠﻨﺒﺎ ﻣﻦ اﻟﻌﻘﻮﺑﺎت واﻟﻤﺨﺎﻟﻔﺎت اﻟﱵ ﻳﺼﺪرﻫﺎ اﻟﻤﻜﺘﺐ ﺑﺴﺒﺐ اﻟﻔﺘﺢ ﺑﺪون ﺗﺮﺧﻴﺺ ﻛﻤﺎ أن ﺻﺎﺣﺐ اﻟﻤﻨﺸﺎة أو ﺻﺎﺣﺐ اﻟﱰﺧﻴﺺ ﻳﺘﻤﺘﻊ ﺑﺎﻣﺘﻴﺎزات أﺧﺮى ﻣﺜﻞ ﺗﺴﻬﻴﻼت اﻟﺤﺼﻮل ﻋﲆ اﻟﻘﺮوض وﻏﲑﻫﺎ ﺑﺎﻹﺿﺎﻓﺔ إﱃ أن اﻟﻔﻴﺪ ﻳﻮﻓﺮ إﺣﺼﺎﺋﻴﺎت دﻗﻴﻘﺔ ﻋﻦ اﻟﻤﻨﺸﺂت ﺑﻜﺎﻓﺔ أﻧﻮاﻋﻬﺎ',

            'required_documents' => 'رسم هندسي للمبني مقاس 1:100 معمد من الإدارة الهندسية

            صورة وثيقة الملكية أو عقد إيجار المبني معمد من السجل العقاري
            
            صورة عقد تأسيس الشركة أو الهيئة و الجمعية المالكة للمشروع
            
            صورة معمدة من العقد المبرم بين مالك المشروع أو المدير الفني للمنشأة
            
            صورة من عقود العمل للكادر الفني بالمنشاة
            
            صورة معمدة من المؤهلات العلمية للكادر الفني بالمنشأة
            
            استكمال نماذج طلب التشغيل
            
            دفع الرسوم المقررة',

            'procedures' => 'تلقي الطلبات ورفعها للمدير العام

            تحول المعاملة إلى مدير الإدارة
            
            تحول إلى رئيس القسم
            
            يتم مراجعتها ورفعها عكسيا (من الإدارة إلى المدير العام )',

            'fees' =>'ﺗﺨﺘﻠﻒ رﺳﻮم اﺳﺘﺨﺮاج اﻟﱰﺧﻴﺺ ﻣﻦ ﺣﻴﺚ ﺗﺼﻨﻴﻒ اﻟﻤﻨﺸﺄة وﺣﺴﺐ درﺟﺘﻬﺎ اﻟﺘﺠﺪﻳﺪ ﻳﺘﻢ ﰲ ﻛﻞ ﺳﻨﺔ ﻣﻴﻼدﻳﺔ',

            'penalties' =>' ﺗﺨﺘﻠﻒ رﺳﻮم اﺳﺘﺨﺮاج اﻟﱰﺧﻴﺺ ﻣﻦ ﺣﻴﺚ ﺗﺼﻨﻴﻒ اﻟﻤﻨﺸﺄة وﺣﺴﺐ درﺟﺘﻬﺎ اﻟﺘﺠﺪﻳﺪ ﻳﺘﻢ ﰲ ﻛﻞ ﺳﻨﺔ ﻣﻴﻼدﻳﺔ
            اﻟﻌﻘﻮﺑﺎت اﻟﺠﺰاءات ﰲ ﺣﺎﻟﺔ ﻣﺰاوﻟﺔ ﻋﻤﻞ ﺑﺪون ﺗﺮﺧﻴﺺ ﺑـ ﺻﺎﺣﺐ اﻟﻤﻨﺸﺎة ﻏﺮاﻣﺔ %ﻣﻦ رﺳﻮم اﺳﺘﺨﺮاج اﻟﱰﺧﻴﺺ 100ﻣﺎﻟﻴﺔ ﻗﺪرﻫﺎ  ﰲ ﺣﺎﻟﺔ اﻟﺘﺄﺧﲑ ﻋﻦ اﻟﺘﺠﺪﻳﺪ ﻳﺘﻢ دﻓﻊ ﻏﺮاﻣﺔ ﻣﺎﻟﻴﺔ )ﻏﺮاﻣﺔ ﺗﺄﺧﲑ( %ﻣﻦ إﺟﻤﺎﱄ ﻗﻴﻤﺔ رﺳﻮم اﺳﺘﺨﺮاج اﻟﱰﺧﻴﺺ 50ﻗﺪرﻫﺎ ',
            'notes' =>'ﻫﻨﺎك إرﺷﺎدات ﻣﻦ ﺻﺤﺔ اﻟﺒﻴﺌﺔ ﻓﻴﻤﺎ ﻳﺘﻌﻠﻖ ﺑﴬورة اﺳﺘﺨﺪام ﺑﻌﺾ اﻟﻤﻮاد ﰲ اﻟﻤﺤﻼت ﻣﺜﻞ ﻃﻔﺎﻳﺎت اﻟﺤﺮﻳﻖ ﰲ اﻟﻤﺤﻄﺎت اﻟﻜﻤﺎﻣﺎت اﻟﻮﻗﺎﺋﻴﺔ واﻟﻨﻈﺎرات ﰲ ورش اﻟﻠﺤﺎم',
            'department' =>'1',
            // 'offices' => [1,2,3],
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('licences')->insert([
            'name' =>' رﺧﺼﺔ ﻣﺰاوﻟﺔ اﻟﻤﻬﻨﺔ ﻟﻠﻤﻨﺸﺂت اﻟﺜﻘﺎﻓﻴﺔ',
            'description' =>' ﻣﻌﺎﻣﻞ اﻟﺘﺼﻮﻳﺮ- اﻟﻤﻜﺘﺒﺎت واﻷﻛﺸﺎك- اﻟﻤﻄﺎﺑﻊ -اﻻﺳﺘﻮدﻳﻮﻫﺎت -ﻣﺤﻼت اﻹﻧﱰﻧﺖ – ﻣﺤﻼت ﺗﺄﺟﲑ اﻷﻓﻼم واﻟﻔﻴﺪﻳﻮ-ﻣﺤﻼت دور اﻟﻨﴩ واﻹﻧﺘﺎج واﻟﺘﻮزﻳﻊ-ﻣﺤﻼت اﻟﺪﻋﺎﻳﺔ واﻹﻋﻼن-اﻟﺨﺪﻣﺎت اﻟﻤﻌﺮﻓﻴﺔ-دور اﻟﺴﻴﻨﻤﺎ واﻟﻤﴪح-ﻣﺤﻼت اﺳﺘﲑاد اﻷﻓﻼم-ﺧﺪﻣﺎت اﻟﻜﻤﺒﻴﻮﺗﺮ-اﻷﺳﺘﻮدﻳﻮﻫﺎت وﺑﻴﻊ اﻷﴍﻃﺔ',

            'importance'=>' ﻳﻬﺪف ﻫﺬا اﻟﱰﺧﻴﺺ إﱃ إﻋﻄﺎء ﻛــﺎﻓﺔ اﻟﺼـﻼﺣﻴﺎت ﻟﺼﺎﺣﺐ اﻟﻤﻨﺸﺄة ﺑﻤﻤﺎرﺳﺔ ﻧﺸــﺎﻃﻪ ﺑﺪون أي ﻋﻮاﺋﻖ أو ﻣﺴﺎﺋﻼت ﻗﺎﻧﻮﻧﻴﺔ ﻛﻤـﺎ ﻳﻬﺪف إﱃ أن اﻟﻤﻨﺸﺄة اﻟﻤﻘﺎﻣﺔ ﺧﺼﻮﺻﺎ ﻋﲆ اﻟﺸﻮارع اﻟﺮﺋﻴﺴﻴﺔ ﻻ ﺗﺆﺛﺮ ﻋﲆ اﻟﺒﻴﺌﺔ وﻻ ﺗﺴﺒﺐ أي ﺿﻮﺿـﺎء وﻻ ﳾء إﱃ ﺟﻤﺎل اﻟﻤﺪﻳﻨﺔ ، وﺑﺎﻟﺘﺎﱄ ﻓﻬﺬا اﻟﱰﺧﻴﺺ إﻟﺰاﻣﻲ وﺗﻜﻤﻦ أﻫﻤﻴﺔ ﺗﺮﺧﻴﺺ ﻣﺰاوﻟﺔ اﻟﻤﻬﻦ ﰲ أن اﻟﻤﻨﺸﺎة أو ﺻﺎﺣﺒﻬﺎ ﻗﺪ اﻧﻀﻢ إﱃ اﻟﻘﻄﺎع اﻟﺮﺳﻤﻲ اﻟﺤﻜﻮﻣﻲ ﺗﺠﻨﺒﺎ ﻣﻦ اﻟﻌﻘﻮﺑﺎت واﻟﻤﺨﺎﻟﻔﺎت اﻟﱵ ﻳﺼﺪرﻫﺎ اﻟﻤﻜﺘﺐ ﺑﺴﺒﺐ اﻟﻔﺘﺢ ﺑﺪون ﺗﺮﺧﻴﺺ ﻛﻤﺎ أن ﺻﺎﺣﺐ اﻟﻤﻨﺸﺎة أو ﺻﺎﺣﺐ اﻟﱰﺧﻴﺺ ﻳﺘﻤﺘﻊ ﺑﺎﻣﺘﻴﺎزات أﺧﺮى ﻣﺜﻞ ﺗﺴﻬﻴﻼت اﻟﺤﺼﻮل ﻋﲆ اﻟﻘﺮوض وﻏﲑﻫﺎ ﺑﺎﻹﺿﺎﻓﺔ إﱃ أن اﻟﻔﻴﺪ ﻳﻮﻓﺮ إﺣﺼﺎﺋﻴﺎت دﻗﻴﻘﺔ ﻋﻦ اﻟﻤﻨﺸﺂت ﺑﻜﺎﻓﺔ أﻧﻮاﻋﻬﺎ',


            'required_documents' => 'رسم هندسي للمبني مقاس 1:100 معمد من الإدارة الهندسية

            صورة وثيقة الملكية أو عقد إيجار المبني معمد من السجل العقاري
            
            صورة عقد تأسيس الشركة أو الهيئة و الجمعية المالكة للمشروع
            
            صورة معمدة من العقد المبرم بين مالك المشروع أو المدير الفني للمنشأة
            
            صورة من عقود العمل للكادر الفني بالمنشاة
            
            صورة معمدة من المؤهلات العلمية للكادر الفني بالمنشأة
            
            استكمال نماذج طلب التشغيل
            
            دفع الرسوم المقررة',

            'procedures' => 'تلقي الطلبات ورفعها للمدير العام

            تحول المعاملة إلى مدير الإدارة
            
            تحول إلى رئيس القسم
            
            يتم مراجعتها ورفعها عكسيا (من الإدارة إلى المدير العام )',

            'fees' => 'ﺗﺨﺘﻠﻒ رﺳﻮم اﺳﺘﺨﺮاج اﻟﱰﺧﻴﺺ ﺣﺴﺐ ﻧﻮع وﺗﺼﻨﻴﻒ اﻟﻤﻨﺸﺄة ﻛﺬﻟﻚ ﻣﻦ ﺣﻴﺚ ﻧﻮع اﻟﻌﻤﻞ ﻳﺘﻢ اﻟﺘﺠﺪﻳﺪ ﻛﻞ ﻋﺎم أﻣﺎ رﺳﻮم اﺳﺘﺨﺮاج اﻟﺘﺠﺪﻳﺪ ٪ ﻣﻦ ﻗﻴﻤﺔ رﺳﻮم اﺳﺘﺨﺮاج٥٠ ﻓﻬﻲ ﻋﺒﺎرة ﻋﻦ اﻟﱰﺧﻴﺺ',

            'penalties' =>' ﰲ ﺣﺎﻟﺔ ﻣﺰاوﻟﺔ اﻟﻌﻤﻞ ﺑﺪون ﺗﺮﺧﻴﺺ ﻓﺈن ﻏﺮاﻣﺔ ذﻟﻚ ﺗﺴﺎوي %ﻣﻦ رﺳﻮم اﺳﺘﺨﺮاج اﻟﱰﺧﻴﺺ 100  %ﻣﻦ 100 أﺷﻬﺮ ﻓﺄﻛﱶ ﻏﺮاﻣﺔ ﺗﻔﺮض 3 ﰲ ﺣﺎﻟﺔ اﻟﺘﺄﺧﺮ ﻋﻦ اﻟﺘﺠﺪﻳﺪ ل رﺳﻮم اﺳﺘﺨﺮاج اﻟﱰﺧﻴﺺ',
            'notes' =>'ﻫﻨﺎك إرﺷﺎدات ﻣﻦ ﺻﺤﺔ اﻟﺒﻴﺌﺔ ﻓﻴﻤﺎ ﻳﺘﻌﻠﻖ ﺑﴬورة اﺳﺘﺨﺪام ﺑﻌﺾ اﻟﻤﻮاد ﰲ اﻟﻤﺤﻼت ﻣﺜﻞ ﻃﻔﺎﻳﺎت اﻟﺤﺮﻳﻖ ﰲ اﻟﻤﺤﻄﺎت اﻟﻜﻤﺎﻣﺎت اﻟﻮﻗﺎﺋﻴﺔ واﻟﻨﻈﺎرات ﰲ ورش اﻟﻠﺤﺎم',
            'department' =>'1',
            // 'offices' => [1,2,3],
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('licences')->insert([
            'name' =>'رﺧﺼﺔ ﻣﺰاوﻟﺔ اﻟﻤﻬﻨﺔ ﻟﻠﺨﺪﻣﺎت اﻟﻄﺒﻴﺔ واﻟﺼﺤﻴﺔ            ',
            'description' =>'ﺗﺄﰐ أﻫﻤﻴﺔ اﻟﺘﺴﺠﻴﻞ ﰲ وزارة اﻟﺼﺤﺔ اﻟﻌﺎﻣﺔ ﻟﲄ ﻳﻀﻤﻦ ﺻﺎﺣﺐ اﻟﻤﻨﺸﺎة اﻟﺪﺧﻮل ﰲ اﻟﻘﻄﺎع اﻟﺮﺳﻤﻲ ﺣﱴ ﻻ ﻳﺘﻌﺮض اﻟﻤﺨﺎﻟﻔﺎت واﻟﻌﻘﻮﺑﺎت ﺣﻴﺚ أن ﻫﺬا اﻟﱰﺧﻴﺺ ﻫﺎم وﺑﻤﻮﺟﺒﺔ ﻳﺘﻢ ﻓﺘﺢ اﻟﻤﻨﺸﺎة وﻳﻌﺘﱪ ﻫﺬا اﻟﱰﺧﻴﺺ وﺛﻴﻘﺔ ﻟﻠﺘﻌﺮﻳﻒ ﺑﺎﻟﻤﻨﺸﺎة وﺑﻤﻮﺟﺒﺔ ﻳﻤﺎرس ﻧﺸﺎﻃﻪ ﺑﻜﻞ ﺣﺮﻳﺔ            ',

            'importance'=>' ﻳﻬﺪف ﻫﺬا اﻟﱰﺧﻴﺺ إﱃ إﻋﻄﺎء ﻛــﺎﻓﺔ اﻟﺼـﻼﺣﻴﺎت ﻟﺼﺎﺣﺐ اﻟﻤﻨﺸﺄة ﺑﻤﻤﺎرﺳﺔ ﻧﺸــﺎﻃﻪ ﺑﺪون أي ﻋﻮاﺋﻖ أو ﻣﺴﺎﺋﻼت ﻗﺎﻧﻮﻧﻴﺔ ﻛﻤـﺎ ﻳﻬﺪف إﱃ أن اﻟﻤﻨﺸﺄة اﻟﻤﻘﺎﻣﺔ ﺧﺼﻮﺻﺎ ﻋﲆ اﻟﺸﻮارع اﻟﺮﺋﻴﺴﻴﺔ ﻻ ﺗﺆﺛﺮ ﻋﲆ اﻟﺒﻴﺌﺔ وﻻ ﺗﺴﺒﺐ أي ﺿﻮﺿـﺎء وﻻ ﳾء إﱃ ﺟﻤﺎل اﻟﻤﺪﻳﻨﺔ ، وﺑﺎﻟﺘﺎﱄ ﻓﻬﺬا اﻟﱰﺧﻴﺺ إﻟﺰاﻣﻲ وﺗﻜﻤﻦ أﻫﻤﻴﺔ ﺗﺮﺧﻴﺺ ﻣﺰاوﻟﺔ اﻟﻤﻬﻦ ﰲ أن اﻟﻤﻨﺸﺎة أو ﺻﺎﺣﺒﻬﺎ ﻗﺪ اﻧﻀﻢ إﱃ اﻟﻘﻄﺎع اﻟﺮﺳﻤﻲ اﻟﺤﻜﻮﻣﻲ ﺗﺠﻨﺒﺎ ﻣﻦ اﻟﻌﻘﻮﺑﺎت واﻟﻤﺨﺎﻟﻔﺎت اﻟﱵ ﻳﺼﺪرﻫﺎ اﻟﻤﻜﺘﺐ ﺑﺴﺒﺐ اﻟﻔﺘﺢ ﺑﺪون ﺗﺮﺧﻴﺺ ﻛﻤﺎ أن ﺻﺎﺣﺐ اﻟﻤﻨﺸﺎة أو ﺻﺎﺣﺐ اﻟﱰﺧﻴﺺ ﻳﺘﻤﺘﻊ ﺑﺎﻣﺘﻴﺎزات أﺧﺮى ﻣﺜﻞ ﺗﺴﻬﻴﻼت اﻟﺤﺼﻮل ﻋﲆ اﻟﻘﺮوض وﻏﲑﻫﺎ ﺑﺎﻹﺿﺎﻓﺔ إﱃ أن اﻟﻔﻴﺪ ﻳﻮﻓﺮ إﺣﺼﺎﺋﻴﺎت دﻗﻴﻘﺔ ﻋﻦ اﻟﻤﻨﺸﺂت ﺑﻜﺎﻓﺔ أﻧﻮاﻋﻬﺎ',

            'required_documents' => 'رسم هندسي للمبني مقاس 1:100 معمد من الإدارة الهندسية

            صورة وثيقة الملكية أو عقد إيجار المبني معمد من السجل العقاري
            
            صورة عقد تأسيس الشركة أو الهيئة و الجمعية المالكة للمشروع
            
            صورة معمدة من العقد المبرم بين مالك المشروع أو المدير الفني للمنشأة
            
            صورة من عقود العمل للكادر الفني بالمنشاة
            
            صورة معمدة من المؤهلات العلمية للكادر الفني بالمنشأة
            
            استكمال نماذج طلب التشغيل
            
            دفع الرسوم المقررة',

            'procedures' => 'تلقي الطلبات ورفعها للمدير العام

            تحول المعاملة إلى مدير الإدارة
            
            تحول إلى رئيس القسم
            
            يتم مراجعتها ورفعها عكسيا (من الإدارة إلى المدير العام )',

            'fees' => 'رﺳﻮم اﺳﺘﺨﺮاج اﻟﱰﺧﻴﺺ أو اﻟﺘﺠﺪﻳﺪ ﺑﺎﻟﻨﺴﺒﺔ أﻟﻒ17000 ﻻﺗﺼﺎﻻت وﻫﻲ ﻋﺒﺎرة ﻋﻦ ﻣﺒﻠﻎ وﻗﺪره رﻳﺎل
            أﻟﻒ رﻳﺎل10000رﺳﻮم اﻟﺘﺄﻣﲔ أﻟﻒ رﻳﺎل5000رﺳﻮم اﺳﺘﺨﺮاج اﺷﱰاك اﻻﻧﱰﻧﺖ اﻟﺘﺠﺪﻳﺪ ﻳﺘﻢ ﰲ ﻛﻞ ﻋﺎم',

            'penalties' =>'ﰲ ﺣﺎﻟﺔ ﻋﺪم ﺗﺴﺪﻳﺪ اﻟﻔﺎﺗﻮرة اﻟﺸﻬﺮﻳﺔ أو اﻟﺘﺄﺧﺮ ﰲ اﻟﺘﺴﺪﻳﺪ ﻳﺘﻢ اﻻﻛﺘﻔﺎء ﺑﻔﺼﻞ اﻟﺨﺪﻣﺔ اﱃ ﺣﲔ اﻟﺴﺪاد أو اﻟﻌﻮدة اﱃ اﻟﻀﻤﲔ اﻟﺘﺠﺎري ﰲ ﺣﺎﻟﺔ ﻋﺪم اﻟﺮﺟﻮع اﱃ ﻣﻜﺘﺐ اﻻﺗﺼﺎﻻت',
            'notes' =>'ﻫﻨﺎك إرﺷﺎدات ﻣﻦ ﺻﺤﺔ اﻟﺒﻴﺌﺔ ﻓﻴﻤﺎ ﻳﺘﻌﻠﻖ ﺑﴬورة اﺳﺘﺨﺪام ﺑﻌﺾ اﻟﻤﻮاد ﰲ اﻟﻤﺤﻼت ﻣﺜﻞ ﻃﻔﺎﻳﺎت اﻟﺤﺮﻳﻖ ﰲ اﻟﻤﺤﻄﺎت اﻟﻜﻤﺎﻣﺎت اﻟﻮﻗﺎﺋﻴﺔ واﻟﻨﻈﺎرات ﰲ ورش اﻟﻠﺤﺎم',
            'department' =>'1',
            // 'offices' => [1,2,3],
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('licences')->insert([
            'name' =>'اﻟﺤﺼﻮل ﻋﻠﻰ ﻋﻀﻮﻳﺔ اﻟﻐﺮﻓﺔ اﻟﺘﺠﺎرﻳﺔ',
            'description' =>'ﻳﻌﺘﱪ اﻟﺘﺴﺠﻴﻞ ﺑﻬﺎ ﺗﻄﻮﻋﻴﺎ وﻟﻴﺲ إﻟﺰاﻣﻴﺎ وﻫﻮ ﻋﻀﻮﻳﺔ اﻟﻐﺮﻓﺔ وﻣﻊ ذﻟﻚ ﻳﻨﺼﺢ اﻟﻤﺴﺘﻔﻴﺪون ﺑﺎﻟﺤﺼﻮل ﻋﲆ ﺑﻄﺎﻗﺔ اﻟﻌﻀﻮﻳﺔ ﻧﻈﺮا ﻟﻠﺪور اﻟﺬي ﺗﻠﻌﺒﻪ اﻟﻐﺮﻓﺔ اﻟﺘﺠﺎرﻳﺔ واﻟﺼﻨﺎﻋﻴﺔ ﰲ ﻫﺬا اﻟﻤﺠﺎل ﺑﺎﻹﺿﺎﻓﺔ اﱃ اﺳﻬﺎﻣﻬﺎ اﻟﻤﺘﺠﺪد ﰲ ﺗﻨﻤﻴﺔ اﻟﻤﻨﺸﺂت اﻟﺼﻐﲑة وﻛﺬﻟﻚ ﺗﻘﺪﻳﻢ ﺧﺪﻣﺎت اﺳﺘﺸﺎرﻳﺔ ﻷﺻﺤﺎب اﻻﻋﻤﺎل اﻟﺼﻐﲑة ﰲ ﻣﺠﺎل اﻟﺘﺴﻮﻳﻖ واﻻﻗﺮاض وﻛﺬا إﻗﺎﻣﺔ ورش ﻋﻤﻞ ﺧﺎﺻﺔ ﻟﺤﻞ ﻣﺸﺎﻛﻞ اﻟﻤﻨﺸﺂت اﻟﺼﻐﲑة واﺣﺘﻴﺎﺟﺎﺗﻬﺎ اﻟﺘﺪرﻳﺒﻴﺔ واﻟﺘﻮﻋﻴﺔ ﺑﺎﻟﻘﻮاﻧﲔ',


            'importance'=>' ﻳﻬﺪف ﻫﺬا اﻟﱰﺧﻴﺺ إﱃ إﻋﻄﺎء ﻛــﺎﻓﺔ اﻟﺼـﻼﺣﻴﺎت ﻟﺼﺎﺣﺐ اﻟﻤﻨﺸﺄة ﺑﻤﻤﺎرﺳﺔ ﻧﺸــﺎﻃﻪ ﺑﺪون أي ﻋﻮاﺋﻖ أو ﻣﺴﺎﺋﻼت ﻗﺎﻧﻮﻧﻴﺔ ﻛﻤـﺎ ﻳﻬﺪف إﱃ أن اﻟﻤﻨﺸﺄة اﻟﻤﻘﺎﻣﺔ ﺧﺼﻮﺻﺎ ﻋﲆ اﻟﺸﻮارع اﻟﺮﺋﻴﺴﻴﺔ ﻻ ﺗﺆﺛﺮ ﻋﲆ اﻟﺒﻴﺌﺔ وﻻ ﺗﺴﺒﺐ أي ﺿﻮﺿـﺎء وﻻ ﳾء إﱃ ﺟﻤﺎل اﻟﻤﺪﻳﻨﺔ ، وﺑﺎﻟﺘﺎﱄ ﻓﻬﺬا اﻟﱰﺧﻴﺺ إﻟﺰاﻣﻲ وﺗﻜﻤﻦ أﻫﻤﻴﺔ ﺗﺮﺧﻴﺺ ﻣﺰاوﻟﺔ اﻟﻤﻬﻦ ﰲ أن اﻟﻤﻨﺸﺎة أو ﺻﺎﺣﺒﻬﺎ ﻗﺪ اﻧﻀﻢ إﱃ اﻟﻘﻄﺎع اﻟﺮﺳﻤﻲ اﻟﺤﻜﻮﻣﻲ ﺗﺠﻨﺒﺎ ﻣﻦ اﻟﻌﻘﻮﺑﺎت واﻟﻤﺨﺎﻟﻔﺎت اﻟﱵ ﻳﺼﺪرﻫﺎ اﻟﻤﻜﺘﺐ ﺑﺴﺒﺐ اﻟﻔﺘﺢ ﺑﺪون ﺗﺮﺧﻴﺺ ﻛﻤﺎ أن ﺻﺎﺣﺐ اﻟﻤﻨﺸﺎة أو ﺻﺎﺣﺐ اﻟﱰﺧﻴﺺ ﻳﺘﻤﺘﻊ ﺑﺎﻣﺘﻴﺎزات أﺧﺮى ﻣﺜﻞ ﺗﺴﻬﻴﻼت اﻟﺤﺼﻮل ﻋﲆ اﻟﻘﺮوض وﻏﲑﻫﺎ ﺑﺎﻹﺿﺎﻓﺔ إﱃ أن اﻟﻔﻴﺪ ﻳﻮﻓﺮ إﺣﺼﺎﺋﻴﺎت دﻗﻴﻘﺔ ﻋﻦ اﻟﻤﻨﺸﺂت ﺑﻜﺎﻓﺔ أﻧﻮاﻋﻬﺎ',
            
            'required_documents' => 'رسم هندسي للمبني مقاس 1:100 معمد من الإدارة الهندسية

            صورة وثيقة الملكية أو عقد إيجار المبني معمد من السجل العقاري
            
            صورة عقد تأسيس الشركة أو الهيئة و الجمعية المالكة للمشروع
            
            صورة معمدة من العقد المبرم بين مالك المشروع أو المدير الفني للمنشأة
            
            صورة من عقود العمل للكادر الفني بالمنشاة
            
            صورة معمدة من المؤهلات العلمية للكادر الفني بالمنشأة
            
            استكمال نماذج طلب التشغيل
            
            دفع الرسوم المقررة',

            'procedures' => 'تلقي الطلبات ورفعها للمدير العام

            تحول المعاملة إلى مدير الإدارة
            
            تحول إلى رئيس القسم
            
            يتم مراجعتها ورفعها عكسيا (من الإدارة إلى المدير العام )',

            'fees' => 'ﺗﺒﺪأ ﻋﻤﻠﻴﺔ دﻓﻊ اﻟﴬﻳﺒﺔ ﺑﻌﺪ ﻣﺮور ﺳﻨﺔ ﻣﻦ ﺗﺎرﻳﺦ ﻓﺘﺢ اﻟﻤﻠﻒ واﻻﻗﺮار اﻟﴬﻳﱯ ﻓﻤﺜﻼ اذا ﻛﺎن ﻓﺘﺢ اﻟﻤﻠﻒ ﰲ ﻓﺈن دﻓﻊ اﻟﴬاﺋﺐ اﻟﻤﺴﺘﺤﻘﺔ ﺗﻜﻮن ﰲ 2023-1-1  ﻛﻤﺎ أن ﺣﺠﻢ اﻟﻨﺸﺎط ﻫﻮ اﻟﺬي ﻳﺤﺪد ﺣﺠﻢ2024-1-1 اﻟﴬﻳﺒﺔ',

            'penalties' =>' ﰲ ﺣﺎﻟﺔ ﺗﺄﺧﲑ اﻟﻤﻜﻠﻒ ﻋﻦ اﻟﺪﻓﻊ ﻓﺎﻧﻪ ﻣﻠﺰم ﺑﺪﻓﻊ ﻏﺮاﻣﺔ ﻣﺎﻟﻴﺔ % ﻣﻦ ﻗﻴﻤﺔ رﺳﻮم اﺳﺘﺨﺮاج اﻟﱰاﺧﻴﺺ وذﻟﻚ ﻋﻦ ﻛﻞ 2 ﻗﺪرﻫﺎ ﺷﻬﺮ ﺗﺄﺧﲑ',
            'notes' =>'ﻫﻨﺎك إرﺷﺎدات ﻣﻦ ﺻﺤﺔ اﻟﺒﻴﺌﺔ ﻓﻴﻤﺎ ﻳﺘﻌﻠﻖ ﺑﴬورة اﺳﺘﺨﺪام ﺑﻌﺾ اﻟﻤﻮاد ﰲ اﻟﻤﺤﻼت ﻣﺜﻞ ﻃﻔﺎﻳﺎت اﻟﺤﺮﻳﻖ ﰲ اﻟﻤﺤﻄﺎت اﻟﻜﻤﺎﻣﺎت اﻟﻮﻗﺎﺋﻴﺔ واﻟﻨﻈﺎرات ﰲ ورش اﻟﻠﺤﺎم            ',
            'department' =>'1',
            // 'offices' => [1,2,3],
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
