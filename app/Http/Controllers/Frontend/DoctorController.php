<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::orderBy('group', 'DESC')->get();
        return view('frontend.doctor.index', [
            'pageName' => 'Dokter',
            'doctors' => $doctors
        ]);
    }
}
