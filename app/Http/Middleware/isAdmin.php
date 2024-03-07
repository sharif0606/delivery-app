<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User; // custome
use Illuminate\Http\Request;
use Session; // custome

class isAdmin
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
        if(!Session::has('userId') || Session::has('userId')==null || !Session::has('roleIdentity')){
            return redirect()->route('logOut');
        }else{
            $user=User::findOrFail(Session::get('userId'));
            if(!$user){
                return redirect()->route('logOut');
            }else if($user->role_id != 1){
                return redirect()->back()->with('Access Denied');
            }else{
                return $next($request);
            }
        }
        
    }
}
