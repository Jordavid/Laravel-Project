<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function course(){

        return view('course');
    }

    public function store( Request $req){

        Course::create($req->all());

        return redirect('courses');
    }

    public function courses(){

        $courses = \App\Course::all();

        return view('courses', compact('courses'));

    }
}
