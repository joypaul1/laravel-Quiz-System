<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function index()
    {
        $surveys = Survey::paginate(10);
        return view('backend.survey.index',compact('surveys'));
    }

    public function create()
    {
        return view('backend.survey.create');
    }

    public function store(Request $request)
    {
        try {
            Survey::create($request->except('_token'));
        } catch (\Exception $ex) {
            return back()->with('warring',$ex->getMessage());
        }
      return back()->with('success',' Added Successfully!');
    }

    public function edit(Survey $survey)
    {
        return view('backend.survey.edit', compact('survey'));
    }

    public function update(Request $request, Survey $survey)
    {
        try {
           $survey->update($request->except('_token'));
        } catch (\Exception $ex) {
            return back()->with('warring',$ex->getMessage());
        }
      return back()->with('success','Updated Successfully!');
    }


    public function delete(Survey $survey)
    {
        try {
            $survey->delete();
        } catch (\Exception $ex) {
            return back()->with('warring',$ex->getMessage());
        }
        return back()->with('success','deleted Successfully!');

    }

}
