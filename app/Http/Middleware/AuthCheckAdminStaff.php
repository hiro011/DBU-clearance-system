<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use App\Models\Admin;
use App\Models\AdminStaff;
use App\Models\Officer;
use App\Models\RegularStud;
use App\Models\Teachers;
use App\Models\DistanceStud;
use App\Models\ExtensionStud;


class AuthCheckAdminStaff
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
        if(!session()->has('LoggedUser') && ($request->path() != '/user/admin staff') ){
            return redirect('auth/login/adminStaff')->with('fail','You must be logged in');
        }

        
        return $next($request)->header('Cache-Control','no-cache, no-store, max-age=0, must-revalidate')
                              ->header('Pragma','no-cache')
                              ->header('Expires','Sat 01 Jan 1990 00:00:00 GMT');
            
    }
}
