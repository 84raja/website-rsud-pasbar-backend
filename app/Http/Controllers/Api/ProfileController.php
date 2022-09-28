<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProfileResource;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::profileActive();
        $profileResource = new ProfileResource($profile);
        return $this->sendResponse($profileResource, "Successfully get profile");
    }
}
