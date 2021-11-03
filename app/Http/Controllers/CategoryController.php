<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Categories;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index');
    }

    public function list()
    {
        return DataTables::of(Categories::query())
            ->addColumn('registration_date' , function ($q){
                return $q->created_at->diffForHumans();
            })
            ->addColumn('actions',function($q) {
                return '<a class="btn btn-primary" href="'.route('category.edit' ,$q->id).'" >Edit</a>
                      | <a class="btn btn-danger deleteUser"   href="'.route('category.delete', $q->id).'">Delete</a>';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function create()
    {
        return view('category.create');
    }

    public function save()
    {
        $data = request()->only(['category_title','status']);

        Categories::create($data);

        return redirect()->route('category.index');
    }

    public function edit($id)
    {
        return view('category.edit' , ['category' => Categories::find($id)]);
    }

    public function update($id)
    {
        $data = request()->only(['category_title' ,'status']);

        Categories::whereId($id)->update($data);

        return redirect()->route('category.index');
    }

    public function delete($id)
    {
        Categories::destroy($id);
        return ['status' => true , 'message' => 'Data deleted successfully'];
    }
}
