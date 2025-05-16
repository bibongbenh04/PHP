<?php
use App\Http\Controllers\DoctorDashboardController;
use App\Http\Controllers\NurseDashboardController;
use App\Http\Controllers\ReceptionistDashboardController;
use Illuminate\Support\Facades\Route;
// Auth::routes();
Route::get('/', function () {
 return view('users.admin.dashboard');
})->middleware('auth')->name('admin.dashboard');

Route::resource('/departments', 'DepartmentController');
Route::get('/treatmenthistory/{doctor}', 'DoctorController@treatmentHistory')->name('treatment-history');
Route::resource('/doctors', 'DoctorController');
Route::resource('/patients', 'PatientController');
Route::resource('/nurses', 'NurseController');
Route::resource('/accountants', 'AccountantController');
Route::resource('/pharmacists', 'PharmacistController');
Route::resource('/receptionists', 'ReceptionistController');
Route::resource('/laboratorists', 'LaboratoristController');
Route::get('/timeschedule/{doctor}', 'TimeScheduleController@timeSchedulesForDoctor')->name('doctor-time-schedules');
Route::get('/timeschedule/{doctor}/create/', 'TimeScheduleController@createtimeScheduleForDoctor')->name('create-time-schedule-for-doctor');
Route::resource('/timeschedules', 'TimeScheduleController');
Route::resource('/casehistories', 'CaseHistoryController');
Route::resource('/appointments', 'AppointmentController');
Route::resource('/documents', 'DocumentController');
Route::resource('/prescriptions', 'PrescriptionController');
Route::resource('/medicines/categories', 'MedicineCategoryController', ['as' => 'medicines']);
Route::resource('/medicines', 'MedicineController');
Route::resource('/services', 'ServiceController');
Route::resource('/beds', 'BedController');
Route::resource('/lapreports', 'LapReportController');
Route::resource('/laptemplates', 'LapTemplateController');
Route::resource('/bedallotments', 'BedAllotmentController');
Route::resource('/servicepackages', 'ServicePackageController');
Route::resource('/dayoffschedules', 'DayoffScheduleController');
Route::resource('/payments', 'PaymentController');
Route::resource('/paymentitems', 'PaymentItemController');
Route::resource('/expenses', 'ExpenseController');

Auth::routes();

Route::get('/getdoctorsbydepartment/', 'AppointmentController@getDoctorsByDepartment')->name('get-doctors-by-department');
Route::get('/gettimeschedulebydoctor/', 'DoctorController@getTimeScheduleByDoctor')->name('get-time-schedule-by-doctor');
Route::get('/getdayoffschedulebydoctor/', 'DoctorController@getDayoffScheduleByDoctor')->name('get-dayoff-schedule-by-doctor');
Route::get('/gettimebytimeschedule/', 'TimeScheduleController@getTimeByTimeSchedule')->name('get-time-by-time-schedule');
Route::get('/getappointmentsbydate/', 'AppointmentController@getAppointmentsByDate')->name('get-appointments-by-date');
Route::get('/getbedallotmentsbydate/', 'BedAllotmentController@getBedAllotmentsByDate')->name('get-bedallotments-by-date');
Route::get('/gettemplatebyid/', 'LapReportController@getTemplateById')->name('get-template-by-id');
Route::get('/getpaymentitembyitemid/', 'PaymentItemController@getPaymentItemByItemId')->name('get-payment-item-by-item-id');
Route::get('/getpaymentitembydoctorid/', 'PaymentItemController@getPaymentItemByDoctorId')->name('get-payment-item-by-doctor_id');
Route::get('/getuserbyusertype/', 'PublicController@getUserByUserType')->name('get-user-by-user-type');
Route::post('/logout', [App\Http\Controllers\Auth\LogoutController::class, 'logout'])->name('logout');

Route::get('/doctor/schedule', [DoctorDashboardController::class, 'viewSchedule'])->name('doctor.schedule');
Route::get('/doctor/appointments', [DoctorDashboardController::class, 'manageAppointments'])->name('doctor.appointments');
Route::get('/doctor/records', [DoctorDashboardController::class, 'patientRecords'])->name('doctor.records');

Route::get('/nurse/schedule', [NurseDashboardController::class, 'viewSchedule'])->name('nurse.schedule');
Route::get('/nurse/appointments', [NurseDashboardController::class, 'manageAppointments'])->name('nurse.appointments');
Route::get('/nurse/records', [NurseDashboardController::class, 'patientRecords'])->name('nurse.records');

Route::get('/receptionist/schedule', [ReceptionistDashboardController::class, 'scheduleAppointments'])->name('receptionist.schedule');
Route::get('/receptionist/registration', [ReceptionistDashboardController::class, 'patientRegistration'])->name('receptionist.registration');
Route::post('/doctor/appointments/create', [DoctorDashboardController::class, 'createAppointment'])->name('doctor.appointments.create');
Route::put('/doctor/appointments/edit/{id}', [DoctorDashboardController::class, 'editAppointment'])->name('doctor.appointments.edit');
Route::delete('/doctor/appointments/cancel/{id}', [DoctorDashboardController::class, 'cancelAppointment'])->name('doctor.appointments.cancel');

