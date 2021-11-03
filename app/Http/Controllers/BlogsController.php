<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;

class BlogsController extends Controller
{
    public function index()
    {
        return view('blogs.index');
    }

    public function list()
    {
        return DataTables::of(Blogs::query())
            ->addColumn('short_description' , function ($q){
                return Str::words(strip_tags($q->description) , 5);
            })->addColumn('image' , function ($q){
                return $q->image ? asset('uploads/' . $q->image) : '';
            })
            ->addColumn('actions',function($q) {
                return '<a class="btn btn-primary" href="'.route('blogs.edit', $q->id).'" >Edit</a>
                      | <a class="btn btn-danger deleteUser"   href="'.route('blogs.delete', $q->id).'">Delete</a>';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function delete($id)
    {
        Blogs::destroy($id);
        return ['status' => true , 'message' => 'Records deleted successfully'];
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function save(Request $request)
    {
        $data = $request->only(['title','description' ]);

        if ($request->hasFile('image')) {
            $data['image'] = $this->upload();
        }

        Blogs::create($data);

        return redirect()->route('blogs.index');
    }

    public function edit($id)
    {
        return view('blogs.edit' ,['blogs' => Blogs::find($id)]);
    }

    public function update($id)
    {
        $data = request()->only(['tile' , 'description']);

        if (request()->hasFile('image') and request()->file('image')){
            $data['image'] = $this->upload();
            }
            Blogs::where('id',$id)->update($data);

            return redirect()->route('blogs.index');

    }

    private function upload()
    {
        $extension = request()->file('image')->getClientOriginalExtension();
        $imageName = time().'.'.$extension;
         request()->file('image')->storeAs('uploads', $imageName);
//        Image::make(request()->file('image'))->resize(100,100)->save(public_path('/uploads/' . $imageName));
        return $imageName;
    }

}
