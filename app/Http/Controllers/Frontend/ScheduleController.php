<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Polyclinic;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ScheduleController extends Controller
{
    public function index()
    {
        $polyclinics = Polyclinic::where('name', 'LIKE', '%poli%')->orWhere('name', 'LIKE', '%poliklinik%')->get();
        $schedules = Schedule::with('doctor')->get();
        return view('frontend.schedule.index', [
            'pageName' => "Jadwal Dokter & Poliklinik",
            'schedules' => $schedules,
            'polyclinics' => $polyclinics
        ]);
    }

    public function search(Request $request)
    {
        $polyclinics = Polyclinic::where('name', 'LIKE', '%poli%')->orWhere('name', 'LIKE', '%poliklinik%')->get();

        $polyclinicId = $request['polyclinic'];
        $day = $request['day'];
        $arrDays = ["senin", "selasa", "rabu", "kamis", "jumat", "sabtu"];

        if (!in_array($day, $arrDays)) {
            $schedules = Schedule::with('doctor')->whereHas('doctor', function ($query) use ($polyclinicId) {
                if ($polyclinicId != 'all') {
                    $query->where('polyclinic_id', $polyclinicId);
                } else {
                    $query->where('polyclinic_id', '!=', 'null');
                }
            })->get();
        } else {
            $schedules = Schedule::with('doctor')->whereHas('doctor', function ($query) use ($polyclinicId) {
                if ($polyclinicId != 'all') {
                    $query->where('polyclinic_id', $polyclinicId);
                } else {
                    $query->where('polyclinic_id', '!=', 'null');
                }
            })->where($day, '!=', ' s/d ')->get();
        }
        return View::make('frontend.schedule.index', [
            'pageName' => "Jadwal Dokter & Poliklinik",
            'schedules' => $schedules,
            'polyclinics' => $polyclinics
        ]);
    }
}
