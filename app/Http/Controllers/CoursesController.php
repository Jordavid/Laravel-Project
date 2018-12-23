<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function course(){

        return view('course');
    }

    public function store(){

        $course = new \App\Course();

        $course->name = request('name');

        $course->hours = request('hours');

        $course->price = request('price');

        $course->description = request('description');

        $course->save();

        return redirect('courses');
    }

    public function courses(){

        $courses = \App\Course::all();

        return view('courses', compact('courses'));

    }
}
