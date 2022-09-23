<?php

namespace App\Http\Controllers\Admin\Doctor;

use App\Http\Controllers\Controller;
use App\Http\Requests\DoctorStoreRequest;
use App\Http\Requests\DoctorUpdateRequest;
use App\Models\Doctor;
use App\Models\Polyclinic;
use App\Services\UploadFiles;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::with('uploads')->with('polyclinic')->orderByDesc('group')->get();
        return view('admin.doctors.index', [
            'pageName' => 'Dokter',
            'doctors' => $doctors
        ]);
    }

    public function add()
    {
        $groupDoctors = ['Dokter Umum', 'Dokter Gigi', 'Dokter Spesialis'];
        $doctor = new Doctor();
        $polyclinics = Polyclinic::get();

        return view('admin.doctors.add', [
            'pageName' => 'Dokter',
            'doctor' => $doctor,
            'groupDoctors' => $groupDoctors,
            'polyclinics' => $polyclinics,

        ]);
    }

    public function store(DoctorStoreRequest $request)
    {
        $doctor = new Doctor();
        $doctor->fill($request->all());
        $doctor->save();
        if ($doctor) {
            if ($request->hasFile('foto_profil')) {
                UploadFiles::saveFile($request['foto_profil'], 'doctor', 'DoctorImg', $doctor);
            }
        }
        return redirect(route('doctor.index'))->with('toast_success', 'This content is created successfully');
    }

    public function edit(Doctor $doctor)
    {
        $polyclinics = Polyclinic::get();
        $groupDoctors = ['Dokter Umum', 'Dokter Gigi', 'Dokter Spesialis'];


        return view('admin.doctors.edit', [
            'pageName' => 'Dokter',
            'doctor' => $doctor,
            'groupDoctors' => $groupDoctors,
            'polyclinics' => $polyclinics,

        ]);
    }

    public function update(DoctorUpdateRequest $request, Doctor $doctor)
    {
        $doctorUpdated = $doctor->fill($request->all());

        if ($doctorUpdated->save()) {
            if ($request->hasFile('foto_profil')) {
                UploadFiles::updateFile($request['foto_profil'], 'DoctorImg', $doctor, $doctor->uploads()->first());
            }
        }
        return redirect(route('doctor.index'))->with('toast_success', 'This content is updated successfully');
    }

    public function destroy(Doctor $doctor)
    {
        try {
            $file = $doctor->uploads()->first();

            if ($file) {
                UploadFiles::deleteFile($file);
            }
            if ($doctor->delete()) {
                return redirect(route('doctor.index'))->with('toast_success', 'This content is deletef successfully');
            };
        } catch (\Throwable $th) {
            return redirect(route('doctor.index'))->with('toast_warning', 'Something wrong !');
        }
    }
}
