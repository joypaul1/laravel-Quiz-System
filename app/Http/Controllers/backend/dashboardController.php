<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{

    public function dashboard()
    {
        if(Auth::check()){

            return view('backend.dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }


}
