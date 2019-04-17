<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){

        $homepage = \App\homePage::all();

        return view('index', compact('homepage'));
    }

    public function show($year){

        $projects = \App\project::where('year', $year)->get();

        return view('year', compact('projects'));
    }

    public function contact(){

        return view('contact');
    }

    public function personal(){

        return view('personal');
    }
}
