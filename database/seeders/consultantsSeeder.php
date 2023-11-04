<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class consultantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('consultants')->insert([
            'name' =>'حنين عبد الجليل',
            'description' =>'مختصة في تطوير مواقع الويب وتطبيقات الموبايل',
            'facebook_account' =>'https://yemen-nic.info/ministations/detail.php?ID=10170',
            'linkedin_account' =>'https://yemen-nic.info/ministations/detail.php?ID=10170',
            'email' =>'womensguide@gmail.com',
            'phone_number' =>'777777777',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('consultants')->insert([
            'name' =>'حنين عبد الجليل',
            'description' =>'مختصة في تطوير مواقع الويب وتطبيقات الموبايل',
            'facebook_account' =>'https://yemen-nic.info/ministations/detail.php?ID=10170',
            'linkedin_account' =>'https://yemen-nic.info/ministations/detail.php?ID=10170',
            'email' =>'womensguide@gmail.com',
            'phone_number' =>'777777777',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('consultants')->insert([
            'name' =>'حنين عبد الجليل',
            'description' =>'مختصة في تطوير مواقع الويب وتطبيقات الموبايل',
            'facebook_account' =>'https://yemen-nic.info/ministations/detail.php?ID=10170',
            'linkedin_account' =>'https://yemen-nic.info/ministations/detail.php?ID=10170',
            'email' =>'womensguide@gmail.com',
            'phone_number' =>'777777777',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('consultants')->insert([
            'name' =>'حنين عبد الجليل',
            'description' =>'مختصة في تطوير مواقع الويب وتطبيقات الموبايل',
            'facebook_account' =>'https://yemen-nic.info/ministations/detail.php?ID=10170',
            'linkedin_account' =>'https://yemen-nic.info/ministations/detail.php?ID=10170',
            'email' =>'womensguide@gmail.com',
            'phone_number' =>'777777777',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('consultants')->insert([
            'name' =>'حنين عبد الجليل',
            'description' =>'مختصة في تطوير مواقع الويب وتطبيقات الموبايل',
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
