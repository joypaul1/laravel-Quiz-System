<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Question;
use App\Models\backend\UserAnswerSheet;
use App\Models\User;
use App\Models\UserSurveyAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function dashboard()
    {
        if(Auth::check()){

            $totalUser = User::where('is_admin', '!=', 1)->count();
            $activeQuestion = Question::whereStatus(true)->count();
            $inactiveQuestion = Question::whereStatus(false)->count();
            return view('backend.dashboard', compact('totalUser', 'activeQuestion', 'inactiveQuestion'));
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function userIndex(Request $request)
    {
        $users =  User::where('is_admin', '!=', 1)->paginate(25);
        return view('backend.user.userlist', compact('users'));

    }

    public function changeStatus($id)
    {
        $user = User::whereId($id)->first();
        if( $user->status == true){
            $user->update(['status' => false]);
        }else{
            $user->update(['status' => true]);
        }
        return redirect()->to('admin/user-management')->with('success', 'Updated Successfully.');
    }
    public function delete($id)
    {
        UserAnswerSheet::whereUserId($id)->delete();
        UserSurveyAnswer::whereUserId($id)->delete();
        User::whereId($id)->delete();
        return redirect()->to('admin/user-management')->with('success', 'Deleted Successfully.');

    }


}
