<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use \Firebase\JWT\JWT;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }
    public function login(){
        return view('auth.login');
    }
    public function create(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required',
        ],[
            'name.required' => 'Le champ nom est important',
            'email.required' => 'Le champ email est important',
            'email.email' => 'Veuillez entrer une adresse email valide',
            'email.unique' => 'Cet email est déjà pris',
            'password.required' => 'Le champ mot de passe est important',
        ]);

        $user=new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Le champ email est important',
            'email.email' => 'Veuillez entrer une adresse email valide',
            'password.required' => 'Le champ mot de passe est important',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Invalid email or password');
        }

        $payload = [
            'iss' => $_SERVER['HTTP_HOST'],
            'iat' => time(),
            'id' => $user->id,
        ];

        $jwt = JWT::encode($payload, $_ENV['JWT_SECRET'], $_ENV['JWT_ALGO']);
        $cookie = Cookie::make('jwt_token', $jwt, 1440);

        if ($user->id_role == 1) {
            return redirect('/categories')->withCookie($cookie);
        }else{
            return redirect('/')->withCookie($cookie);
        }

    }

    public function logout(Request $request){
        $response = redirect('/')->withCookie(Cookie::forget('jwt_token'));
        return $response;
    }

    public function forgetpassword(){
        return view('Auth.resetpassword');
    }

    public function sendemail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $token = Str::random(60);
        User::where('email', $request->email)->update(['remember_token' => $token]);

        $resetLink = route('resetwithemail', ['token' => $token]);

        $success = Mail::raw('To reset your password, click on the following link: ' . $resetLink, function ($message) use ($request) {
            $message->to($request->email)
                   ->subject('Password Reset Link');
        });

        if ($success) {
            return back()->with('status', 'Password reset link sent.');
        } else {
            return back()->withErrors(['email' => 'Failed to send reset link.']);
        }
    }
    public function reset($token){
        return view('Auth.resetpass',compact('token'));
    }
    public function addpassword(Request $request){
        $request->validate([
            'password' => 'required',
            'token' => 'required',
        ]);
        User::where('remember_token', $request->token)->update([
            'password' => Hash::make($request->password),
            'remember_token' => null,
        ]);

        return redirect('/login')->with('status', 'Your password has been reset successfully. Please log in with your new password.');
    }


}
