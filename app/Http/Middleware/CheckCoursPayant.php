<?php

namespace App\Http\Middleware;

use App\Models\Course;
use App\Models\CoursPaye;
use Closure;
use App\Models\User;
use App\Models\Progression;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class CheckCoursPayant
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $token = $request->cookie('jwt_token');

        if (!$token) {
            return redirect('/error')->with('error','Missing login');
        }

        try {
            $decodedToken =JWT::decode($token, new Key($_ENV['JWT_SECRET'], 'HS256'));
        } catch (\Exception $e) {
            return redirect('/error')->with('error','Invalid ');
        }
        $user = User::find($decodedToken->id);
        $userId=$user->id;
        $cours_id = $request->route('cours_id');
        $course=Course::find($cours_id);
        $coursPaye = CoursPaye::where('user_id', $userId)
                                   ->where('cours_id', $cours_id)
                                   ->where('is_payed', 1)
                                   ->first();

        if ($course->price!=0 && !$coursPaye) {
            return redirect('/error')->with('error', 'Merci de payer le cours');
        }

        return $next($request);
    }
}
