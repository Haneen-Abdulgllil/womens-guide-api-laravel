<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $this->call([
            OfficeSeeder::class,
            SettingSeeder::class,
            DepartmentSeeder::class,
            LicenceSeeder::class,
            LicenceOfficesSeeder::class,
            WorkFieldsSeeder::class,
            SubWorkFieldsSeeder::class,
            WorkFieldOfficesSeeder::class,
            BeneficiarySeeder::class,
            CoursesSeeder::class,
            consultantsSeeder::class,
        ]);
    }
}
