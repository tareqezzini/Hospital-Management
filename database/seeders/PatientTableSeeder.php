<?php

namespace Database\Seeders;

use App\Models\dashboard\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PatientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Patients = new Patient();
        $Patients->email = 'patient@gmail.com';
        $Patients->Password = Hash::make('12345678');
        $Patients->Date_Birth = '1998-6-01';
        $Patients->Phone = '12345678';
        $Patients->Gender = 1;
        $Patients->Blood_Group = 'O+';
        $Patients->save();

        //insert trans
        $Patients->name = 'Mohamed';
        $Patients->Address = 'Zagora';
        $Patients->save();
    }
}
