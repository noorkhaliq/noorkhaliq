<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class IndexController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }
}
