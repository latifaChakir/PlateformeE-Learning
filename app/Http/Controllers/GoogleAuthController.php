<?php

namespace App\Http\Controllers;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

use \Firebase\JWT\JWT;

class GoogleAuthController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle(){
        $googleUser = Socialite::driver('google')->stateless()->user();

        $user = User::where('email', $googleUser->getEmail())->first();

        if ($user) {
            Auth::login($user);
            $payload = [
                'iss' => $_SERVER['HTTP_HOST'],
                'iat' => time(),
                'id' => $user->id,
            ];

            $jwt = JWT::encode($payload, $_ENV['JWT_SECRET'], $_ENV['JWT_ALGO']);

            $cookie = Cookie::make('jwt_token', $jwt, 1440);

            if($user->id_role == 1){
                return redirect()->intended('/categories')->withCookie($cookie);
            }else {
                return redirect()->intended('/')->withCookie($cookie);
            }

        } else {
            $newUser = new User();
            $newUser->name = $googleUser->getName();
            $newUser->email = $googleUser->getEmail();

            $newUser->id_role = 2;

            $newUser->save();

            Auth::login($newUser);
            return redirect()->intended('/');
        }
    }

}
