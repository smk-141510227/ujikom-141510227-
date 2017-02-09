<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('Admin');
    }

    public function index()
    {

        return view('folder_admin.index');
    }
}
