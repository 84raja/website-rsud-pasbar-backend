<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::profileActive();
        $img = $profile->uploads()->first();
        $profileImg = $img->url;

        return view('frontend.profile.index', [
            'pageName' => 'Profile',
            'profile' => $profile,
            'profileImg' => $profileImg
        ]);
    }
}
