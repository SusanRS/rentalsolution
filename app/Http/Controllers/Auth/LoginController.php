<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   protected $redirectTo = '/admin/admindash';

    // public function redirectTo(){
    //     //user type
    //     $type = Auth::user()->isadmin;

    //     //chek type
    //     switch($type)
    //     {
    //         case '0':
    //         //    { if(auth::user()->isowner == 1)
    //         //         return '/owner';
    //         //     else
    //         //     return '/';
    //         // }
    //         return '/';

    //         case '1':
    //         return '/admin/admindash';


    //         break;
    //     }
    // }




    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
