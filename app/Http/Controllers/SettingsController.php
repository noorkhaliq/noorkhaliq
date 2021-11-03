<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Services\DataTable;

class SettingsController extends Controller
{
    public function index()
    {
        return view('settings.index');
    }

    public function list()
    {
        return DataTables::of(Settings::query())
            ->addColumn('short_value' , function ($q){
                return Str::words(strip_tags($q->value) , 15);
            })
            ->addColumn('actions',function($q) {
                return '<a class="btn btn-primary" href="'.route('settings.edit' , $q->id).'" >Edit</a>
                      | <a class="btn btn-danger deleteUser"   href="'.route('settings.delete', $q->id).'">Delete</a>';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }


    public function create()
    {
        return view('settings.create');
    }

    public function save(Request $request)
    {
        $data = $request->only(['key' , 'value' , 'locale']);

        Settings::create($data);

        return redirect()->route('settings.index');
    }

    public function edit($id)
    {
        return view('settings.edit' ,['settings' => Settings::find($id)]);
    }

    public function update($id)
    {
        $data =request()->only(['key' , 'value' , 'locale']);

        Settings::whereId($id)->update($data);

        return redirect()->route('settings.index');
    }

    public function delete($id)
    {
        Settings::destroy($id);
        return ['status' => true , 'message' => 'Records deleted successfully'];
    }
}
