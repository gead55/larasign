<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SocialAccountService;
use Socialite;

class SocialAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();   
    }   

    public function callback(SocialAccountService $service)
    {
        $provider = 'facebook';
        $user = $service->createOrGetUser(Socialite::driver($provider)->user(), $provider);

        auth()->login($user);

        return redirect()->to('/home');
    }

    public function redirect_google()
    {
        $provider = 'google';
        $redirect = Socialite::driver( $provider )->redirect();
        // dd($redirect);
        return $redirect;
    } 

    public function callback_google(SocialAccountService $service)
    {
        $provider = 'google';
        $user = $service->createOrGetUser(Socialite::driver($provider)->user(), $provider);

        auth()->login($user);

        return redirect()->to('/home');
    }

    public function redirect_github()
    {
        $provider = 'github';
        $redirect = Socialite::driver( $provider )->redirect();
        // dd($redirect);
        return $redirect;
    } 

    public function callback_github(SocialAccountService $service)
    {
        $provider = 'github';
        $user = $service->createOrGetUser(Socialite::driver($provider)->user(), $provider);

        auth()->login($user);

        return redirect()->to('/home');
    }    
}
