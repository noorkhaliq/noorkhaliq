<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Models\Categories;
use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function indexProjects()
    {
        $project = Projects::query();

        return ['status' => true , 'data' => ProjectResource::collection($project->paginate(15)) ,];
    }

    public function projectList()
    {
        $project = Projects::query();

        return ['status' => true , 'data' => ProjectResource::collection($project->paginate(6)) ,];
    }

    public function category()
    {
        $category = Categories::all();
        return ['status' => true , 'data' => $category ];

//        $project = Projects::query();
//        $category = Categories::all();
//        if (request()->cat)
//            $project->where('category_id', request()->cat);
//        return ['status' => true , 'data' => $project ->paginate(15) ,$category];
    }
}
