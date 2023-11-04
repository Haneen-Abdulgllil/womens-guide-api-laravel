<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LicenceOfficesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('licence_office')->insert([
            'licence_id' =>'1',
            'office_id' =>'1',
        ]);

        DB::table('licence_office')->insert([
            'licence_id' =>'1',
            'office_id' =>'2',
        ]);

        DB::table('licence_office')->insert([
            'licence_id' =>'2',
            'office_id' =>'1',
        ]);

        DB::table('licence_office')->insert([
            'licence_id' =>'2',
            'office_id' =>'3',
        ]);

        DB::table('licence_office')->insert([
            'licence_id' =>'3',
            'office_id' =>'3',
        ]);

        DB::table('licence_office')->insert([
            'licence_id' =>'4',
            'office_id' =>'2',
        ]);

        DB::table('licence_office')->insert([
            'licence_id' =>'5',
            'office_id' =>'1',
        ]);

        DB::table('licence_office')->insert([
            'licence_id' =>'5',
            'office_id' =>'3',
        ]);

        DB::table('licence_office')->insert([
            'licence_id' =>'6',
            'office_id' =>'2',
        ]);

    }
}
