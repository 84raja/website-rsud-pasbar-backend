<?php

namespace App\Http\Controllers\Admin\Schedule;

use App\Http\Controllers\Controller;
use App\Http\Requests\ScheduleStoreRequest;
use App\Models\Doctor;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $doctors = Doctor::with('polyclinic')->where('group', '!=', 'Dokter Umum')->with('schedule')->get();

        return view('admin.schedule.index', [
            'pageName' => "Jadwal Poliklinik",
            'doctors' => $doctors
        ]);
    }

    public function add(Doctor $doctor)
    {
        $schedule = new Schedule();

        return view('admin.schedule.add', [
            'pageName' => "Jadwal Poliklinik",
            'schedule' => $schedule,
            'doctor' => $doctor
        ]);
    }

    public function store(Request $request, Doctor $doctor)
    {

        $schedule = Schedule::updateOrCreate([
            'doctor_id' => $doctor->id
        ], [
            'senin' => $request['senin_mulai'] . ' s/d ' . $request['senin_selesai'],
            'selasa' => $request['selasa_mulai']  . ' s/d ' . $request['selasa_selesai'],
            'rabu' => $request['rabu_mulai']  . ' s/d ' . $request['rabu_selesai'],
            'kamis' => $request['kamis_mulai']  . ' s/d ' . $request['kamis_selesai'],
            'jumat' => $request['jumat_mulai']  . ' s/d ' . $request['jumat_selesai'],
            'sabtu' => $request['sabtu_mulai']  . ' s/d ' . $request['sabtu_selesai'],

        ]);

        return redirect()->route('schedule.index')->with('toast_success', 'This content is updated successfully');
    }
}
