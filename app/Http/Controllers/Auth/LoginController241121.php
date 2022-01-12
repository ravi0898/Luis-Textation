<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Userpanel;
use Session;

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
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->user = new Userpanel;
    }

    public function index(){
     return view('index');
    }

     public function login(Request $request)
    {
        // Check validation
        $this->validate($request, [
            'mobile_no' => 'required|regex:/[0-9]{10}/|digits:10',            
        ]);

        // Get user record
        $user = Userpanel::where('mobile_no', $request->get('mobile_no'))->first();
        //print_r($user);exit;
        // Check Condition Mobile No. Found or Not
        if($request->get('mobile_no') != $user['mobile_no']) {
            \Session::put('errorlog', 'Your mobile number not match in our system..!!');
          return redirect()->route('login_users');
        }        
        
        // Set Auth Details
        \Auth::login($user);
        
        // Redirect home page
        return redirect()->route('users_dashboard');
    }

     public function dashboard() {
        return view('users_dashboard');
     }
}
