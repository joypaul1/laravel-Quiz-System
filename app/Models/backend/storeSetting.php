<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class storeSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'company_slogan',
        'logo',
        'dark_logo',
        'fav_icon',
        'notfound_image',
        'payment_method_logo',
        'email1',
        'email2',
        'phone',
        'mobile',
        'address1',
        'address2',
        'about_company',
        'free_shipping_sms',
        'support_sms',
        'money_return_sms',
        'copyright',
        'map',
        'live_chat',
        'author',
        'title',
        'meta_description',
        'meta_keyword',
        'robots',
    ];
}
