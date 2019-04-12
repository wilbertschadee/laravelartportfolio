<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\project;

class adminController extends Controller
{
    public function index(){

        return view('admin.index');
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
}
