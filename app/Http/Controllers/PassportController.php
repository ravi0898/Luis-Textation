<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use Session;
class PassportController extends Controller
{
    /**
     * Handles Registration Request
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return view('auth.login');
    }

    public function left_dashboard()
    {
        $count = DB::select('select count(*) as total from products');
        return view('auth.left_dashboard', ['count' => $count]);
    }

    public function dashboard()
    {
        if(Auth::check()) {
            $count = DB::select('select count(*) as total from products');
        return view('auth.dashboard', ['count' => $count]);
        }
        
        return redirect::to("login")->withSuccess('Oopps! You do not have access');
    }
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'user_type' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
 
        $user = User::create([
            'name' => $request->name,
            'user_type' => $request->user_type,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
 
        $token = $user->createToken('TutsForWeb')->accessToken;
 
        return response()->json(['token' => $token], 200);
    }
 
    /**
     * Handles Login Request
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
            //    $data = $request->all();
            //    $email = $data['email'];
            //    $password = $data['password'];
            //    if(!empty($email) && !empty($password)) {
                
            //     $userdata = User::where('email', $request->get('email'))->first();
                                        
            //      print_r($userdata); exit;
            //         if($request->get('email') == $userdata['email']) {
            //            Session::put('adminsession',$userdata);
            //            return Redirect::to('dashboard');
            //         }else{
            //            $request->session()->flash('alert-danger','wrong credentials');
            //            return Redirect::back();
            //         }                     
            //    }else{
            //         $request->session()->flash('alert-danger','please fill all fields');
            //         return Redirect::back();
            //    }



        $this->validate($request, [
            'email'=>'required|email',
            'password' => 'required'
        ],
        [
            'email.required' => 'Please enter email ',
            'password.required' => 'Please enter password '
           
        ]
        );


        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
 
        if (auth()->attempt($credentials)) {
            Session::put('adminsession',$credentials);
            // $token = auth()->user()->createToken('TutsForWeb')->accessToken;
            // return response()->json(['token' => $token], 200);
            return redirect()->route('dashboard');
           
        } else {
            // return response()->json(['error' => 'UnAuthorised'], 401);
            return back()->with(['msg' => 'Your credential are Wrong']);;
        }
    }
 
    /**
     * Returns Authenticated User Details
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function details()
    {
        return response()->json(['user' => auth()->user()], 200);
    }

    public function logout(Request $request)
    {
    //   if (auth()->user()) {
    //     $user = auth()->user()->token();
    //     $user->revoke();

    //     return response()->json([
    //       'success' => true,
    //       'message' => 'Logout successfully'
    //   ]);
    //   }else {
    //     return response()->json([
    //       'success' => false,
    //       'message' => 'Unable to Logout'
    //     ]);
    //   }
    $request->session()->flush();
    Auth::logout();
    return Redirect('login');
     }
}
