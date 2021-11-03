<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Categories;
use App\Models\Pages;
use App\Models\Projects;
use App\Models\Services;
use App\Models\Settings;
use Illuminate\Http\Request;
//Projects::latest()->limit(4)->get()

class FrontController extends Controller
{
    public function index()
    {
        $project = Projects::query();

//        if (request()->cat)
//            $project->where('category_id', request()->cat);

        return view('frontend.index', ['project' => $project->paginate(15), 'blogs' => Blogs::all(),'categories' => Categories::all(),'service' =>Services::query()->get()]);
    }

    public function about($id)
    {
        return view('frontend.about' , ['page' => Pages::find($id)]);
    }


    public function loadBlogs()
    {
        return view('frontend.blogs' , ['blogs' => Blogs::paginate(8)]);
    }

    public function blog($id)
    {
        return view('frontend.blogs_list' , ['blogs' => Blogs::find($id)]);

    }

    public function projects()
    {
        $project = Projects::query();

        if (request()->cat)
            $project->where('category_id', request()->cat);

        return view('frontend.project_list', ['project' => $project->paginate(15), 'categories' => Categories::query()->get()]);
    }

    public function projectList()
    {
        return Categories::select('category_title' , 'id')->get();

    }

    public function getPhoneLinks()
    {
        return Settings::where('key' , 'phone')->get();

    }

    public function getEmailLinks()
    {
        return Settings::where('key' , 'email')->get();

    }

    public function getPoLinks()
    {
        return Settings::where('key' , 'pobox')->get();

    }

    public function getAddressLinks()
    {
        return Settings::where('key' , 'address')->get();

    }

    public function getFacebookLinks()
    {
        return Settings::where('key' , 'facebook_url')->get();

    }

    public function getInstagramLinks()
    {
        return Settings::where('key' , 'instagram_url')->get();

    }

    public function getYoutubeLinks()
    {
        return Settings::where('key' , 'youtube_url')->get();

    }

    public function getWhatappLinks()
    {
        return Settings::where('key' , 'whatsapp_url')->get();

    }

    public function pagesList()
    {
        return Pages::where('title' , 'معلومات عنا')->get();

    }

    public function getTermsLinks()
    {
        return Pages::where('title' , 'سياسة الخصوصية')->get();

    }

    public function getPolicyLinks()
    {
        return Pages::where('title' , 'الأحكام والشروط')->get();

    }

}
