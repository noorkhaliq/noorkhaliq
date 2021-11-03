<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AboutResource;
use App\Models\Pages;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return [
            'email' => Settings::where('key' , 'email')->get(),
            'phone' => Settings::where('key' , 'email')->get(),
            'web' => Settings::where('key' , 'google_plus_url')->get(),
            'pobox' => Settings::where('key' , 'pobox')->get(),
            'address' => Settings::where('key' , 'address')->get(),
            'facebook_url' => Settings::where('key' , 'facebook_url')->get(),
            'instagram_url' => Settings::where('key' , 'instagram_url')->get(),
            'youtube_url' =>  Settings::where('key' , 'youtube_url')->get(),
            'whatsapp_url' => Settings::where('key' , 'whatsapp_url')->get(),
            'title_one' => Pages::where('title' , 'معلومات عنا')->get(),
            'title_two' => Pages::where('title' , 'سياسة الخصوصية')->get(),
            'title_three' => Pages::where('title' , 'الأحكام والشروط')->get(),


        ];
    }

    public function aboutDetail($id)
    {
        $about = Pages::find($id);
        return ['status' => true , 'data' => $about];

    }
}
