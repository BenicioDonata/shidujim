<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Services\LoginService;
use Illuminate\Foundation\Auth\RegistersUsers;




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

    private $loginService;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(LoginService $loginService)
    {
        $this->middleware('guest')->except('logout');
        $this->loginService = $loginService;

    }


    public function login(Request $request)
    {

        $this->validateLogin($request);

        $user = $this->loginService->getUserByUsername($request);

        if(!$user) {
            $notification = array(
                'message' => "El usuario no existe.",
                'alert-type' => "error"
            );
            return redirect()->route('login')->with($notification);
        }

        if($user->userstatus->id == env('DESHABILITADO')) {
            $notification = array(
                'message' => "El usuario no esta habilitado. Comuniquese con el Administrador.",
                'alert-type' => "error"
            );
            return redirect()->route('login')->with($notification);
        }

        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }


    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return  view('auth/login');
        }

        return  view('auth/login');
    }


    public function redirectPath()
    {

        if(auth()->user()->usertype_id == env('ADMINISTRADOR')) {

            return '/dash_admin';
        }
        return '/dash_user';
    }






}
