<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
 
use App\Models\AdminStaff;
use App\Models\Officer;
use App\Models\RegularStud;
use App\Models\Teachers;
use App\Models\DistanceStud;
use App\Models\ExtensionStud;
use App\Models\UserLogin;


class AuthCheck
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

        if(!session()->has('LoggedUser') && ($request->path() !='auth/new user')){
            return redirect('/')->with('fail','You must be logged in');
        }
        if(!session()->has('LoggedUser') && ($request->path() !='/Home')){
            return redirect('/')->with('fail','You must be logged in');
        }
        
        $dataAdmin = ['LoggedUserInfo'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
       
        // if(session()->has('LoggedUser') && ($request->path() == 'auth/new user' ) ){
        
        //     $user = Auth::user();
        //     $userAdmin = $user; // Admin::where('id','=', $user->id())->first();

        //     if ($dataAdmin){ return redirect('admin/dashboard'); }

        // }

        // if(session()->has('LoggedUser') && ($request->path() == 'auth/login/admin' || $request->path() == 'auth/new admin' ) ){
           
            // $userIn = Auth::user()->email;
            // $userI = $LoggedUserInfo['email'];
            
            // $userInfoAdmin = Admin::where('email','=', $userIn)->first();

            // if ($userInfoAdmin){
            //     return redirect('admin/dashboard');
            // } else return redirect('auth/login/admin');

            // return redirect('admin/dashboard');
            
        // }


        
        return $next($request)->header('Cache-Control','no-cache, no-store, max-age=0, must-revalidate')
                              ->header('Pragma','no-cache')
                              ->header('Expires','Sat 01 Jan 1990 00:00:00 GMT');

    }
}
 