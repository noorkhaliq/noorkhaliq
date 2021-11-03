<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Pages;
use App\Models\Projects;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects.index');
    }

    public function list()
    {
        return DataTables::of(Projects::with(['category']))
            ->addColumn('registration_date' , function ($q){
                return $q->created_at->diffForHumans();
            })->addColumn('image' , function ($q){
                return $q->image ? asset('uploads/' . $q->image) : '';
            })
            ->addColumn('actions',function($q) {
                return '<a class="btn btn-primary" href="'.route('projects.edit', $q->id).'" >Edit</a>
                      | <a class="btn btn-danger deleteUser"   href="'.route('projects.delete', $q->id).'">Delete</a>';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function edit($id)
    {
        return view('projects.edit' , ['project' => Projects::find($id),'categories' => $this->categoriesList()]);
    }

    private function categoriesList()
    {
        return Categories::pluck( 'category_title','id');

    }

    public function update($id)
    {

        $data = request()->only('category_id', 'title' ,'location' ,'area' );

        if (request()->hasFile('image')  and request()->file('image')){
            $data['image'] = $this->upload();
        }

        if (request()->has(['status']))
            $data['status'] = 1;
        else
            $data['status'] = 0 ;

        Projects::where('id',$id)->update($data);

        return redirect()->route('projects.index');
    }

    private function upload()
    {
        $extension = request()->file('image')->getClientOriginalExtension();
        $imageName = time().'.'.$extension;
         request()->file('image')->storeAs('uploads', $imageName);
//        Image::make(request()->file('image'))->resize(100,100)->save(public_path('/uploads/' . $imageName));
        return $imageName;
    }

    public function create()
    {
        return view('projects.create' , ['categories' => $this->categoriesList()]);
    }


    public function save(Request $request)
    {

        $data = $request->only(['category_id','title','location' ,'area' ]);

        if ($request->hasFile('image')) {
            $data['image'] = $this->upload();
        }

        Projects::create($data);

        return redirect()->route('projects.index');
    }


    public function delete($id)
    {
        Projects::destroy($id);
        return ['status' => true , 'message' => 'Record deleted successfully'];
    }
}
