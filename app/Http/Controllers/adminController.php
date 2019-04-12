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

    public function store(){
        
        $project = new project();

        $project->title = request('title');
        $project->description = request('description');
        $project->img_path = request('img_path');
        $project->year = request('year');

        $project->save();

        return redirect('/admin');
    }

    public function create(){

        return view('admin.create');
    }

    public function edit($id){

        return view('admin.edit');
    }
}
