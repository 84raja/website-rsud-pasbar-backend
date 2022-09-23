<?php

namespace App\Http\Controllers\Admin\Polyclinics;

use App\Http\Controllers\Controller;
use App\Http\Requests\PolyclinicStoreRequest;
use App\Http\Requests\PolyclinicUpdateRequest;
use App\Models\Polyclinic;
use App\Services\UploadFiles;
use Illuminate\Http\Request;

class PolyclinicController extends Controller
{
    public function index()
    {
        $polyclinics = Polyclinic::with('uploads')->where('status', 'active')->get();

        return view('admin.polyclinic.index', [
            'pageName' => 'Poliklinik & Instalasi Medis',
            'polyclinics' => $polyclinics
        ]);
    }

    public function  add()
    {
        $polyclinic = new Polyclinic();
        return view('admin.polyclinic.add', [
            'pageName' => 'Poliklinik & Instalasi Medis',
            'polyclinic' => $polyclinic
        ]);
    }

    public function store(PolyclinicStoreRequest $request)
    {
        $polyclinic = new Polyclinic();
        $polyclinic->fill($request->all());
        $polyclinic->save();
        if ($polyclinic) {
            if ($request->hasFile('foto_profil')) {
                UploadFiles::saveFile($request['foto_profil'], 'layanan', 'PolyclinicImg', $polyclinic);
            }
        }
        return redirect(route('polyclinic.index'))->with('toast_success', 'This content is created successfully');
    }

    public function edit(Polyclinic $polyclinic)
    {
        return view('admin.polyclinic.edit', [
            'pageName' => 'Poliklinik & Instalasi Medis',
            'polyclinic' => $polyclinic,
        ]);
    }

    public function update(PolyclinicUpdateRequest $request, Polyclinic $polyclinic)
    {
        $polyclinicCreated = $polyclinic->fill($request->all());

        if ($polyclinicCreated->save()) {
            if ($request->hasFile('foto_profil')) {
                UploadFiles::updateFile($request['foto_profil'], 'PolyclinicImg', $polyclinic, $polyclinic->uploads()->first());
            }
        }

        return redirect(route('polyclinic.index'))->with('toast_success', 'This content is updated successfully');
    }

    public function destroy(Polyclinic $polyclinic)
    {
        try {
            $file = $polyclinic->uploads()->first();

            if ($file) {
                UploadFiles::deleteFile($file);
            }
            if ($polyclinic->delete()) {
                return back()->with('toast_success', 'This content is deletef successfully');
            };
        } catch (\Throwable $th) {
            return back()->with('toast_warning', 'Something wrong !');
        }
    }
}
