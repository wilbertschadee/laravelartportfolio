<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }  
    
    public function store(Request $request){

        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'year' => 'required',
        ]);
        
        $img = $request->file('img_path');
        // $extension = $img->getClientOriginalExtension();
        // \Storage::disk('public')->put($img->getFilename().'.'.$extension,  \File::get($img));
        $img->move('img', $img->getClientOriginalName());


        $project = new \App\project();
        $project->title = $request->title;
        $project->description = $request->description;
        $project->year = $request->year;
        // $project->mime = $img->getClientMimeType();
        $project->img_path = $img->getClientOriginalName();
        // $project->img_path = $img->getFilename().'.'.$extension;
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
