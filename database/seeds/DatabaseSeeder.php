<?php

use Illuminate\Database\Seeder;
use App\Models\Appointment;
use App\Models\BedAllotment;
use App\Models\Bed;
use App\Models\CaseHistory;
use App\Models\DayoffSchedule;
use App\Models\Document;
use App\Models\Expense;
use App\Models\LapReport;
use App\Models\LapTemplate;
use App\Models\MedicineCategory;
use App\Models\Medicine;
use App\Models\Finance;
use App\Models\TimeSchedule;
use App\Models\Department;
use App\Models\PaymentItem;
use App\Models\Payment;
use App\Models\Prescription;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Appointment::factory()->count(10)->create();
        BedAllotment::factory()->count(10)->create();
        Bed::factory()->count(10)->create();
        CaseHistory::factory()->count(10)->create();
        DayoffSchedule::factory()->count(10)->create();
        Document::factory()->count(10)->create();
        Expense::factory()->count(10)->create();
        LapReport::factory()->count(10)->create();
        LapTemplate::factory()->count(10)->create();
        MedicineCategory::factory()->count(10)->create();
        Medicine::factory()->count(10)->create();
        Finance::factory()->count(1)->create();
        TimeSchedule::factory()->count(10)->create();
        Department::factory()->count(10)->create();
        PaymentItem::factory()->count(10)->create();

        Payment::factory()->count(10)->create()->each(function ($payment) {
            $payment->paymentitems()->attach(
                PaymentItem::all()->random(3),
                ['payment_item_quantity' => 50]
            );
        });

        Prescription::factory()->count(10)->create()->each(function ($prescription) {
            $prescription->medicines()->attach(
                Medicine::all()->random(3),
                ['instructions' => 'test']
            );
        });

        User::factory()->count(50)->create()->each(function ($user) {
            $user->departments()->attach(
                Department::all()->random(1)
            );
        });
    }
}
