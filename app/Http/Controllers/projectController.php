<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
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

        $project=\App\project::find($id);

        return view('admin.edit', compact('project'));
    }

    public function update($id){

        $project=\App\project::find($id);

        $project->title = request('title');
        $project->description = request('description');
        $project->img_path = request('img_path');
        $project->year = request('year');

        $project->save();

        return redirect('/admin');
    }

    public function delete($id){

        \App\project::find($id)->delete();

        return redirect('/admin');
    }
}
