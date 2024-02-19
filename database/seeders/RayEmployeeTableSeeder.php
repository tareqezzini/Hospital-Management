<?php

namespace Database\Seeders;

use App\Models\dashboard\RayEmployee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RayEmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ray_employee = new RayEmployee();
        $ray_employee->name = 'Ilyas';
        $ray_employee->email = 'ray@gmail.com';
        $ray_employee->password = Hash::make('12345678');
        $ray_employee->save();
    }
}
