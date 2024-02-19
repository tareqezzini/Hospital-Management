<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
            // AppointmentSeeder::class,
            SectionSeeder::class,
            doctorSeeder::class,
            imagesSeeder::class,
            PatientTableSeeder::class,
            RayEmployeeTableSeeder::class,
            ServiceTableSeeder::class,

        ]);
    }
}
