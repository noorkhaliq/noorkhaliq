<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function list()
    {
        return DataTables::of(Admin::query())
            ->addColumn('actions',function($q) {
                return '<a class="btn btn-primary" href="'.route('admin.edit' , $q->id).'">Edit</a>
                      | <a class="btn btn-danger deleteUser"   href="'.route('admin.delete', $q->id).'">Delete</a>';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function save()
    {
        $this->validate(request(), [
            'name' => 'required',
            'password' => 'required|min:6',
            'email' => 'required|unique:users'
        ]);
        $data = request()->only(['name','email']);

        $data['password'] = bcrypt(request()->password);

        Admin::create($data);

        return redirect()->route('admin.index');
    }

    public function edit($id)
    {
        return view('admin.edit', ['admin' => Admin::find($id)]);
    }

    public function update($id)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|unique:users,email,'.$id
        ]);

        Admin::whereId($id)->update(request()->only(['name','email']));

        return redirect()->route('admin.index');
    }

    public function delete($id)
    {
        Admin::destroy($id);
        return ['status' => true, 'message' => 'Record deleted successfully.'];

    }
}
