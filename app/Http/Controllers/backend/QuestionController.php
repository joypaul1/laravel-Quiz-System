<?php

namespace App\Http\Controllers\Backend;

use App\Exports\QuestionExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Question\StoreRequest;
use App\Imports\QuestionImport;
use App\Models\backend\Question;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class QuestionController extends Controller
{

    public function index(Request $request)
    {
        return view('backend.question.index', ['questions' => Question::paginate(20)]);
    }
    public function create()
    {
        return view('backend.question.create');
    }

    public function store(StoreRequest $request)
    {
        $return = $request->storeData($request);
        if($return){
            return back()->with('success',' Added Successfully!');
        }
        return back()->with('warring',$return);

    }

    public function edit(Question $question)
    {
        $question = $question->whereId($question->id)->with(['options' => function($query){
            $query->select('id', 'option', 'key', 'question_id');
        }])->first();
        return view('backend.question.edit', compact('question'));
    }

    public function update(StoreRequest $request, Question $question)
    {
        $return = $request->updateData($request, $question);
        if($return){
            return back()->with('success','Updated Successfully!');
        }
        return back()->with('warring',$return);
    }


    public function importExportView()
    {
        return view('backend.question.importExport');
    }

    public function import()
    {
        // dd(request()->file('file'));
        Excel::import(new QuestionImport,request()->file('file'));

        return back();
    }
}
