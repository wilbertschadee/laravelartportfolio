<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\project;

class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }   

    public function index()
    {
        $homepage = \App\homePage::all();
        $projects = \App\project::all();
        return view('admin.index',compact('homepage','projects'));
    }

}
