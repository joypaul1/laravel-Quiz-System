<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\backend\storeSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;

class profileController extends Controller
{
    public function index()
    {
        $profileData = Auth::user();
        return view('backend.profile.index',compact('profileData'));
    }

    public function profileUpdate(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'mobile'  => 'required',
            'address' => 'required',
            'profile' => 'image|mimes:jpeg,png,jpg,gif,svg|max:512',
        ]);

         $User = Auth::User();
        // $User = User::firstOrNew();

        if($request->hasFile('profile')){
            $old_img = public_path($User->profile);
                if (file_exists($old_img)) {
                @unlink($old_img);
                }
            $document = $request->file('profile');
            $profile = 'storage/profile/'.time() . '.' . $document->getClientOriginalExtension();
            Image::make($document)->resize(110,110)->save(public_path($profile));
            $User->profile = $profile;
        }

        $User->name    = $request->name;
        $User->email   = $request->email;
        $User->mobile  = $request->mobile;
        $User->address = $request->address;
        $User->save();

        return back()->with('success','Profile Updated Successfully!');

    }

    public function passwordUpdate(Request $request)
    {
        $validated = $request->validate([
            'current_password'      => 'required',
            'password'              => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);

        $user = Auth::user();
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'Current password does not match!');
        }
        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success', 'Password Updated Successfully!');
    }

    public function storeSetting()
    {
        $storeData = storeSetting::firstOrNew();
        return view('backend.profile.store_setting',compact('storeData'));
    }

    public function updateStoreSetting(Request $request)
    {
        $validated = $request->validate([
            'company_name'        => 'required',
            'company_slogan'      => 'nullable',
            'logo'                => 'image|mimes:jpeg,png,jpg,gif,svg|max:512',
            'dark_logo'           => 'image|mimes:jpeg,png,jpg,gif,svg|max:512',
            'fav_icon'            => 'image|mimes:jpeg,png,jpg,gif,svg|max:512',
            'notfound_image'      => 'image|mimes:jpeg,png,jpg,gif,svg|max:512',
            'payment_method_logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:512',
            'email2'              => 'nullable|email',
            'email3'              => 'nullable|email',
            'phone'               => 'nullable',
            'mobile2'             => 'nullable',
            'address2'            => 'nullable',
            'address3'            => 'nullable',
            'about_company'       => 'nullable',
            // 'free_shipping_sms'   => 'nullable',
            // 'support_sms'         => 'nullable',
            // 'money_return_sms'    => 'nullable',
            'copyright'           => 'nullable',
            'map'                 => 'nullable',
            'live_chat'           => 'nullable',
            'author'              => 'nullable',
            'title'               => 'nullable',
            'meta_description'    => 'nullable',
            'meta_keyword'        => 'nullable',
            'robots'              => 'nullable',
        ]);

        $StoreData = storeSetting::firstOrNew();

        $StoreData->company_name          = $request->company_name;
        $StoreData->company_slogan        = $request->company_slogan;

        if($request->hasFile('logo')){
            $old_img = public_path($StoreData->logo);
                if (file_exists($old_img)) {
                @unlink($old_img);
                }
            $document = $request->file('logo');
            $logo = 'storage/store/logo/'.time() . '.' . $document->getClientOriginalExtension();
            Image::make($document)->resize(110,110)->save(public_path($logo));
            $StoreData->logo = $logo;
        }

        if($request->hasFile('dark_logo')){
            $old_img = public_path($StoreData->dark_logo);
                if (file_exists($old_img)) {
                @unlink($old_img);
                }
            $document = $request->file('dark_logo');
            $dark_logo = 'storage/store/darklogo'.time() . '.' . $document->getClientOriginalExtension();
            Image::make($document)->resize(110,110)->save(public_path($dark_logo));
            $StoreData->dark_logo = $dark_logo;
        }

        if($request->hasFile('fav_icon')){
            $old_img = public_path($StoreData->fav_icon);
                if (file_exists($old_img)) {
                @unlink($old_img);
                }
            $document = $request->file('fav_icon');
            $fav_icon = 'storage/store/favicon'.time() . '.' . $document->getClientOriginalExtension();
            Image::make($document)->resize(110,110)->save(public_path($fav_icon));
            $StoreData->fav_icon = $fav_icon;
        }

        if($request->hasFile('notfound_image')){
            $old_img = public_path($StoreData->notfound_image);
                if (file_exists($old_img)) {
                @unlink($old_img);
                }
            $document = $request->file('notfound_image');
            $notfound_image = 'storage/store/notfoundimage'.time() . '.' . $document->getClientOriginalExtension();
            Image::make($document)->resize(110,110)->save(public_path($notfound_image));
            $StoreData->notfound_image = $notfound_image;
        }

        if($request->hasFile('payment_method_logo')){
            $old_img = public_path($StoreData->payment_method_logo);
                if (file_exists($old_img)) {
                @unlink($old_img);
                }
            $document = $request->file('payment_method_logo');
            $payment_method_logo = 'storage/store/paymentmethod'.time() . '.' . $document->getClientOriginalExtension();
            Image::make($document)->resize(110,110)->save(public_path($payment_method_logo));
            $StoreData->payment_method_logo = $payment_method_logo;
        }

        $StoreData->email2                = $request->email2;
        $StoreData->email3                = $request->email3;
        $StoreData->phone                 = $request->phone;
        $StoreData->mobile2               = $request->mobile2;
        $StoreData->address2              = $request->address2;
        $StoreData->address3              = $request->address3;
        $StoreData->about_company         = $request->about_company;
        // $StoreData->free_shipping_sms     = $request->free_shipping_sms;
        // $StoreData->support_sms           = $request->support_sms;
        // $StoreData->money_return_sms      = $request->money_return_sms;
        $StoreData->copyright             = $request->copyright;
        $StoreData->map                   = $request->map;
        $StoreData->live_chat             = $request->live_chat;
        $StoreData->author                = $request->author;
        $StoreData->title                 = $request->title;
        $StoreData->meta_description      = $request->meta_description;
        $StoreData->meta_keyword          = $request->meta_keyword;
        $StoreData->robots                = $request->robots;
        $StoreData->save();

        return back()->with('success','Updated Successfully!');
    }

}
