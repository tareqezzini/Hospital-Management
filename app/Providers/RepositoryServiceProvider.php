<?php

namespace App\Providers;

use App\Interfaces\Appointments\appointmentsInterface;
use App\Interfaces\doctor_dashboard\DiagnosticsInterface;
use App\Interfaces\doctor_dashboard\InvoicesInterface;
use App\Interfaces\doctor_dashboard\LaboratoriesInterface;
use App\Interfaces\doctor_dashboard\RaysInterface;
use App\interfaces\Doctors\doctorInterface;
use App\Interfaces\Finance\FinanceInterfaces;
use App\Interfaces\Finance\PaymentInterfaces;
use App\Interfaces\LaboEmployee_dashboard\LaboInvoicesInterface;
use App\Interfaces\LaboratoryEmployees\LaboratoryEmployeeInterface;
use App\interfaces\Patients\PatientsInterfaces;
use App\interfaces\RayEmployee\RayEmployeeInterface;
use App\Interfaces\RayEmployee_dashboard\RayInvoicesInterface;
use App\interfaces\Sections\SectionsInterface;
use App\interfaces\Services\AmbulanceInterface;
use App\interfaces\Services\SingleServiceInterface;
use App\Repository\Appointments\appointmentsRepository;
use App\Repository\doctor_dashboard\DiagnosticsRepository;
use App\Repository\doctor_dashboard\InvoicesRepository;
use App\Repository\doctor_dashboard\LaboratoriesRepository;
use App\Repository\doctor_dashboard\RaysRepository;
use App\Repository\Doctors\doctorRepository;
use App\Repository\Finance\FinanceRepository;
use App\Repository\Finance\PaymentRepository;
use App\Repository\LaboEmployee_dashboard\LaboInvoicesRepository;
use App\Repository\LaboratoryEmployees\LaboratoryEmployeeRepository;
use App\Repository\Patients\PatientsRepository;
use App\Repository\RayEmployee\RayEmployeeRepository;
use App\Repository\RayEmployee_dashboard\RayInvoicesRepository;
use App\Repository\Sections\SectionsRepository;
use App\Repository\Services\AmbulanceRepository;
use App\Repository\Services\SingleServiceRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //dashboard admin 
        $this->app->bind(SectionsInterface::class, SectionsRepository::class);
        $this->app->bind(doctorInterface::class, doctorRepository::class);
        $this->app->bind(SingleServiceInterface::class, SingleServiceRepository::class);
        $this->app->bind(AmbulanceInterface::class, AmbulanceRepository::class);
        $this->app->bind(PatientsInterfaces::class, PatientsRepository::class);
        $this->app->bind(FinanceInterfaces::class, FinanceRepository::class);
        $this->app->bind(PaymentInterfaces::class, PaymentRepository::class);
        $this->app->bind(RayEmployeeInterface::class, RayEmployeeRepository::class);
        $this->app->bind(LaboratoryEmployeeInterface::class, LaboratoryEmployeeRepository::class);
        $this->app->bind(appointmentsInterface::class, appointmentsRepository::class);

        //dashboard doctor
        $this->app->bind(InvoicesInterface::class, InvoicesRepository::class);
        $this->app->bind(DiagnosticsInterface::class, DiagnosticsRepository::class);
        $this->app->bind(RaysInterface::class, RaysRepository::class);
        $this->app->bind(LaboratoriesInterface::class, LaboratoriesRepository::class);
        //dashboard ray Employee
        $this->app->bind(RayInvoicesInterface::class, RayInvoicesRepository::class);
        $this->app->bind(LaboInvoicesInterface::class, LaboInvoicesRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
