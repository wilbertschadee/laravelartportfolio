<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class yearController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }  
    
    public function store(){
        
        $year = new homePage();

        $year->year = request('year');
        $year->img_1 = request('img_1');
        $year->img_2 = request('img_2');
        $year->img_3 = request('img_3');

        $year->save();

        return redirect('/admin');
    }

    public function create(){

        $projects=\App\project::all();

        return view('admin.year.create', compact('projects'));
    }

    public function edit($year){

        $years=\App\homePage::where('year', $year)->get();      
        $projects = \App\project::where('year', $year)->get();

        return view('admin.year.edit', compact('years'),compact('projects'));
    }

    public function update($year){

        $year=\App\homePage::where('year', $year)->get();

        $year->year = request('year');
        $year->img_1 = request('img_1');
        $year->img_2 = request('img_2');
        $year->img_3 = request('img_3');

        $year->save();

        return redirect('/admin');
    }
}
