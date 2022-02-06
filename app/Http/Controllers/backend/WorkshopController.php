<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Workshop;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    public function WorkShop()
    {
        $Workshop = Workshop::firstOrNew();
        return view('backend.workshop',compact('Workshop'));
    }

    public function storeWorkShop(Request $request)
    {
        $validated = $request->validate([
            'content'        => 'required',
        ]);

        $workshop = Workshop::firstOrNew();

        $workshop->title      = $request->title;
        $workshop->sub_title  = $request->sub_title;
        $workshop->content    = $request->content;
        $workshop->save();

        return back()->with('success','Updated Successfully!');
    }
}
