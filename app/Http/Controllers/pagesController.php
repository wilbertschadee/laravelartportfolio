<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){

        $projects = \App\project::all();

        return view('index', compact('projects'));
    }

    public function show($year){

        $projects = \App\project::where('year', $year)->get();

        return view('year', compact('projects'));
    }
}
