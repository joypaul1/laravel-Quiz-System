<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\BannerModel;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BannerController extends Controller
{
    public function index()
    {
        $banners = BannerModel::get();
        return view('backend.banner.banner_list',compact('banners'));
    }

    public function addBanner()
    {
        return view('backend.banner.add_banner');
    }

    public function storeBanner(Request $request)
    {
        $validated = $request->validate([
            'title'     => 'required',
            'sub_title' => 'required',
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:512',
            'type'      => 'required',
            'status'    => 'required'
        ]);

        $Banner              = new BannerModel();
        $Banner->title       = $request->title;
        $Banner->sub_title   = $request->sub_title;
        $Banner->button_text = $request->button_text;
        $Banner->link        = $request->link;
        $Banner->type        = $request->type;
        $Banner->status      = $request->status;

        if($request->hasFile('image')){
            $document = $request->file('image');
            $image = 'storage/banner/'.time() . '.' . $document->getClientOriginalExtension();
            Image::make($document)->resize(1000,1000)->save(public_path($image));
            $Banner->image = $image;
        }

        $Banner->save();
        return back()->with('success',' Added Successfully!');
    }

    public function editBanner($id)
    {
        $Banner = BannerModel::findOrFail($id);
        return view('backend.banner.edit_banner',compact('Banner'));
    }

    public function updateBanner(Request $request, $id)
    {
        $validated = $request->validate([
            'title'     => 'required',
            'sub_title' => 'required',
            'image'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:512',
            'type'      => 'required',
            'status'    => 'required'
        ]);

        $Banner              = BannerModel::find($id);
        $Banner->title       = $request->title;
        $Banner->sub_title   = $request->sub_title;
        $Banner->button_text = $request->button_text;
        $Banner->link        = $request->link;
        $Banner->type        = $request->type;
        $Banner->status      = $request->status;

        if($request->hasFile('image')){
            $document = $request->file('image');
            $image = 'storage/banner/'.time() . '.' . $document->getClientOriginalExtension();
            Image::make($document)->resize(1000,1000)->save(public_path($image));
            $Banner->image = $image;
        }

        $Banner->save();
        return redirect()->route('admin.banner-list')->with('success',' Updated Successfully!');
    }

    public function deleteBanner($id)
    {
        $Banner = BannerModel::findOrFail($id);
        $Banner->delete();
        return back()->with('success', 'Deleted Successfully!');
    }

}
