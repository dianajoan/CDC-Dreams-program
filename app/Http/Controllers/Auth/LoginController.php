<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function __construct()
     {
         $this->middleware('guest')->except('logout');
     }
 
     public function showLoginForm()
     {
         return view('auth.login');
     }
 
     public function login(Request $request)
     {
         $this->validateLogin($request);
 
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
 
     protected function credentials(Request $request)
     {
         return $request->only($this->username(), 'password');
     }
 
     protected function validateLogin(Request $request)
     {
         $request->validate([
             $this->username() => 'required|string',
             'password' => 'required|string',
         ]);
     }
 
     protected function attemptLogin(Request $request)
     {
         return $this->guard()->attempt(
             $this->credentials($request), $request->filled('remember')
         );
     }
 
     protected function sendLoginResponse(Request $request)
     {
         $request->session()->regenerate();
 
         $this->clearLoginAttempts($request);
 
         return $this->authenticated($request, $this->guard()->user())
                 ?: redirect()->intended($this->redirectPath());
     }
 
     protected function sendFailedLoginResponse(Request $request)
     {
         return redirect()->back()
             ->withInput($request->only($this->username(), 'remember'))
             ->withErrors([
                 $this->username() => [trans('auth.failed')],
             ]);
     }
 
     public function logout(Request $request)
     {
         $this->guard()->logout();
 
         $request->session()->invalidate();
 
         $request->session()->regenerateToken();
 
         return redirect('/');
     }
 
     public function username()
     {
         return 'email';
     }
 
     protected function guard()
     {
         return Auth::guard();
     }
}
