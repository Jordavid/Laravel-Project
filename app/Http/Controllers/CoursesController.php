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
        $this->validate($req, [
            'name' => 'required | min:3',
            'hours' => 'required',
            'price' => 'required ',
            'description' => 'required|'
        ]);
        Course::create($req->all());

        return redirect('courses');
    }

    public function updateCourse( Request $req, $course_id){

        return $course_id;

       /* $this->validate($req, [
            'name' => 'required | min:3',
            'hours' => 'required',
            'price' => 'required ',
            'description' => 'required|'
        ]);
        Course::create($req->all());

        return redirect('courses');*/
    }

    public function courses(){

        $courses = Course::all();

        return view('courses', compact('courses'));

    }

    public function update(Course $course, $course_id){
        $course = $course->findOrFail($course_id);

        $course_id = $course->id;
        return view('update', compact('course', 'course_id'));
    }


    public function destroy(Course $course, $course_id){

        $course->destroy($course_id);

        return redirect('/courses');
    }
}
