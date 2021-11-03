<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BlogsResource;
use App\Http\Resources\NewsResource;
use App\Models\Blogs;
use App\Models\News;
use App\Models\Services;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function indexBlogs()
    {

//        $blogs = Blogs::paginate(5);
////        return ['status' => true , 'data' => $news];
////        return BlogsResource::collection($blogs );
////        return ['status' => true , 'data' => ''];
//////
        $blogs = Blogs::paginate(5);
        return ['status' => true , 'data' => BlogsResource::collection($blogs)];
    }

    public function services()
    {
        $services = Services::all();
        return ['status' => true , 'data' => $services];
    }

    public function blogList()
    {
        $blogs = Blogs::paginate(8);
        return ['status' => true , 'data' => BlogsResource::collection($blogs)];
    }

    public function blogsDetail($id)
    {
        $blogs = Blogs::find($id);
        return ['status' => true , 'data' => new BlogsResource($blogs)];
    }

}
