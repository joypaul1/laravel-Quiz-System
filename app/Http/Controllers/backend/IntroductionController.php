<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Introduction;
use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    public function Introduction()
    {
        $Introduction = Introduction::firstOrNew();
        return view('backend.introduction',compact('Introduction'));
    }

    public function storeIntroduction(Request $request)
    {
        $validated = $request->validate([
            'content'        => 'required',
        ]);

        $Introduction = Introduction::firstOrNew();

        $Introduction->title      = $request->title;
        $Introduction->sub_title  = $request->sub_title;
        $Introduction->content    = $request->content;
        $Introduction->save();

        return back()->with('success','Updated Successfully!');
    }
}
