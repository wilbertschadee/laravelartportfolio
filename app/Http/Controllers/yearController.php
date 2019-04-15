<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class yearController extends Controller
{
    public function store(){
        
        $year = new homePage();

        $year->year = request('year');
        $year->img_1 = request('description');
        $year->img_2 = request('img_path');
        $year->img_3 = request('year');

        $year->save();

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
}
