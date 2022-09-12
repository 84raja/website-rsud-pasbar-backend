<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\Profile;
use App\Services\UploadFiles;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::profileActive();
        $img = $profile->uploads()->first();
        $profileImg = $img->url;
        return view('admin.profile.index', [
            'pageName' => 'Profile',
            'profile' => $profile,
            'profileImg' => $profileImg,
        ]);
    }

    public function update(UpdateProfileRequest $request, Profile $profile)
    {

        $update = $profile->fill($request->all());

        if ($update->save())
            if ($request->hasFile('foto_profil'))
                UploadFiles::updateFile($request['foto_profil'], 'ProfileImg', $profile, $profile->uploads()->first());

        return redirect()
            ->back()
            ->with('toast_success', 'This content is updated successfully');
    }
}
