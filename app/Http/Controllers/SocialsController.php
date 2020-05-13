<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;

class SocialsController extends Controller
{
    //
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {

        $getInfo = Socialite::driver($provider)->user();

        $user = $this->createUser($getInfo, $provider);

        auth()->login($user);

        return redirect()->to('/home');
    }

    protected function createUser($getInfo, $provider)
    {

        $user = User::where('provider_id', $getInfo->id)->first();

        if (!$user) {
            $user = User::updateOrCreate(
            [
                'email'    => $getInfo->email,
                'provider' => $provider,
            ],
            [
                'name'     => $getInfo->name,
                'email'    => $getInfo->email,
                'provider' => $provider,
                'provider_id' => $getInfo->id
            ]);
        }
        return $user;
    }

    public function showRegistrationForm()
    {

        return view('custom.auth.socials.register');
    }

    public function showLoginForm()
    {

        return view('custom.auth.socials.login');
    }
}
