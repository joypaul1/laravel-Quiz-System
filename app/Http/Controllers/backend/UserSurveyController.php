<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Question;
use App\Models\backend\UserAnswerSheet;
use App\Models\User;
use Illuminate\Http\Request;

class UserSurveyController extends Controller
{
    public function index()
    {
        $users = User::where('is_admin','=', false)->paginate(25);
        return view('backend.usersurvey.index', compact('users'));
    }

    public function summary($id)
    {
        $user =  User::whereId($id)->first();
        $totalUser = User::where('is_admin','=', false)->count();
        return view('backend.usersurvey.summary', compact('user', 'totalUser'));
    }

    public function answer($id)
    {

        $data_one =  Question::where('status', true)->where('set_no', 1)->orderBy('serial_no')->take(20)->get()->toArray();
        $data_two =  Question::where('status', true)->where('set_no', 2)->orderBy('serial_no')->take(20)->get()->toArray();
         $questions = array_merge($data_one, $data_two);

        // $answer =  UserAnswerSheet::whereUserId($id)->get();
        // $answers =   UserAnswerSheet::whereUserId(11)->orderBy('id')->orderBy('set_no')->get();
        return view('backend.usersurvey.view', compact('questions','id' ));
    }
}
