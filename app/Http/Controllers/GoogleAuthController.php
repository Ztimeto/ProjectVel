<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect() //google redirect function
    {
        return Socialite::driver('google')->redirect();
    }
    public function callbackGoogle() //google callback function to dashboard
    {
        try{
            $google_user = Socialite::driver('google')->user();
            $user = User::where('google_id', $google_user->getId())->first();

            if(!$user){
                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                ]);
                Auth::login($new_user);
                return redirect()->intended('home');
            }
            else{
                Auth::login($user);
                return redirect()->intended('home');
            }
        } catch(\Throwable $th){
            dd('Something went wrong! '. $th->getMessage());
        }
    }
}