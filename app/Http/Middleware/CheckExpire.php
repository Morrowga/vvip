<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckExpire
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $userid = $request->header('userId');
        if($userid){
            $user = User::where('id', $userid)->first();
            if(!empty($user)){
                $to = date('Y-m-d');
                $end = Carbon::parse($user->package_end_date);  
                if($user->expired_date > $to){
                    return $next($request);
                } else {
                    if($end > $to){
                        $different = $end->diffInDays($to);
                        $user->remaining_days = $different;
                        $user->save();
                        return $next($request);
                    } else {
                        $user->package_status = "inactive";
                        $user->save();
                        if($request->header('device' === 'mobile')){
                            return response()->json('Subscription is expired.');
                        }
                        Auth::logout();
                        return redirect()->to('/login')->with('warning', 'Your session has expired because your subscription is over.Top up your new subscription.');
                    }
                }                
            }
        } 
    }
}
