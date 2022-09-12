<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceStoreRequest;
use App\Http\Requests\ServiceUpdateRequest;
use App\Models\Service;
use App\Services\UploadFiles;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with('uploads')->get();
        return view('admin.services.index', [
            'pageName' => 'Pelayanan',
            'services' => $services
        ]);
    }

    public function add()
    {
        $service = new Service();

        return view('admin.services.add', [
            'pageName' => 'Pelayanan',
            'service' => $service

        ]);
    }

    public function store(ServiceStoreRequest $request)
    {
        $service = new Service();
        $service->fill($request->all());
        $service->save();
        if ($service) {
            if ($request->hasFile('foto_profil')) {
                UploadFiles::saveFile($request['foto_profil'], 'layanan', 'LayananImg', $service);
            }
        }

        return redirect(route('service.index'))->with('toast_success', 'This content is created successfully');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', [
            'pageName' => 'Pelayanan',
            'service' => $service,
        ]);
    }

    public function update(ServiceUpdateRequest $request, Service $service)
    {
        $serviceCreated = $service->fill($request->all());

        if ($serviceCreated->save()) {
            if ($request->hasFile('foto_profil')) {
                UploadFiles::updateFile($request['foto_profil'], 'LayananImg', $service, $service->uploads()->first());
            }
        }

        return redirect(route('service.index'))->with('toast_success', 'This content is updated successfully');
    }

    public function destroy(Service $service)
    {
        try {
            $file = $service->uploads()->first();

            if ($file) {
                UploadFiles::deleteFile($file);
            }
            if ($service->delete()) {
                return back()->with('toast_success', 'This content is deletef successfully');
            };
        } catch (\Throwable $th) {
            return back()->with('toast_warning', 'Something wrong !');
        }
    }
}
