<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class ServiceController extends Controller
{
    public function index()
    {
        return view('services.index');
    }

    public function list()
    {
        return DataTables::of(Services::query())
            ->addColumn('short_text' , function ($q){
                return Str::words(strip_tags($q->text), 10);
            })
        ->addColumn('actions',function($q) {
            return '<a class="btn btn-primary" href="'.route('services.edit' , $q->id).'" >Edit</a>
              | <a class="btn btn-danger deleteUser"   href="'.route('services.delete', $q->id).'">Delete</a>';
    })
        ->rawColumns(['actions'])
        ->make(true);
    }


    public function create()
    {
        return view('services.create');
    }

    public function save(Request $request)
    {
        $data = $request->only(['title' , 'text']);

        Services::create($data);

        return redirect()->route('services.index');
    }

    public function edit($id)
    {
        return view('services.edit' , ['service' => Services::find($id)]);
    }

    public function update($id)
    {
        $data =request()->only(['title' , 'text']);

        Services::whereId($id)->update($data);

        return redirect()->route('services.index');
    }

    public function delete($id)
    {
        Services::destroy($id);
        return ['status' => true , 'message' => 'Records deleted successfully'];
    }

}
