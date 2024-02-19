<?php

namespace Database\Seeders;

use App\Models\dashboard\Appointment;
use App\Models\dashboard\doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class doctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('doctors')->delete();
        $doctors =  doctor::factory()->count(30)->create();
        $Appointments = Appointment::all();

        doctor::all()->each(function ($doctor) use ($Appointments) {
            $doctor->doctorappointments()->attach(
                $Appointments->random(rand(1, 7))->pluck('id')->toArray()
            );
        });
    }
}
