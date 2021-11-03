<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function list()
    {
        return DataTables::of(Pages::query())
            ->addColumn('short_content' , function ($q){
                return Str::words(strip_tags($q->content) , 15);
            })
            ->addColumn('actions',function($q) {
                return '<a class="btn btn-primary" href="'.route('pages.edit' , $q->id).'" >Edit</a>
                      | <a class="btn btn-danger deleteUser"   href="'.route('pages.delete', $q->id).'">Delete</a>';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function create()
    {
        return view('pages.create');
    }

    public function save()
    {

        $data = request()->only(['title','content','type']);

        Pages::create($data);

        return redirect()->route('pages.index');
    }

    public function delete($id)
    {
        Pages::destroy($id);
        return ['status' => true , 'message' => 'The data is deleted successfully'];
    }

    public function edit($id)
    {
        return view('pages.edit' , ['pages' => Pages::find($id)]);
    }

    public function update($id)
    {
        $data = request()->only(['title' , 'content' , 'position']);
        Pages::whereId($id)->update($data);
        return redirect()->route('pages.index');
    }
}
