<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit ($id)
    {
        $profile = Profile::find($id);

        return view('profile.edit', [
            'profile' => $profile
        ]);
    }

    public function update (Request $request, Profile $profile)
    {
        $request->validate([
            'name_first' => ['string', 'min:1'],
            'name_last' => ['string', 'min:1'],
            'country' => ['string', 'min:1'],
            'gender' => ['integer', 'min:1'],
            'phone' => ['integer', 'min:1'],
        ]);

        $data = $request->all();

        $profile = $profile->update($data);

        return $profile;
    }
}
