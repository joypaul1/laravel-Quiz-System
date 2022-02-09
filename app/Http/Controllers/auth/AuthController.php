<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash ;
use Illuminate\Support\Facades\Session as FacadesSession;

class AuthController extends Controller
{


    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        $credentials = $request->only('email', 'password');
        if(User::where('email',  $request->email)->first()->status == true){
            if (Auth::attempt($credentials)) {
                if(auth()->user()->is_admin == 1){
                    return redirect()->route('admin.dashboard')->with('success','Admin Login Successfully!');
                }
                elseif(auth()->user()->set_two_rone_submit && auth()->user()->set_two_rtwo_submit && auth()->user()->set_rone_submit
                && auth()->user()->set_rtwo_submit){
                    return redirect()->to('user/deshboard');
                }
                else{
                    return redirect()->route('home')->with('success','User Login Successfully!');
                }
            }
            return redirect("login")->with('error','Opps..! You have entered invalid email & password. Please Try Again!');
        }
        return redirect("login")->with('error','Opps..! You are Blocked d! Contact to Admin.');

    }

    public function register()
    {
        return view('auth.register');
    }

    public function customRegistration(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'mobile' => 'required',
            'address' => 'nullable|string',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6'
        ]);
        dd($request->all());
        $data = $request->all();
        $check = $this->create($data);

        return redirect()->route('home')->with('success','You have signed-in');
    }

    public function create(array $data)
    {
        // dd($data['password']);
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'mobile' => $data['mobile'],
        'address' => $data['address'],
        'password' => bcrypt($data['password'])
        ]);
        // 'password' => $request->password,
      return true;
    }/*  */

    public function signOut() {
        FacadesSession::flush();
        Auth::logout();
        return redirect()->route('home');
    }
}
