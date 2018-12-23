<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        return view('welcome');
    }

    public function register(){

        return view('register');
    }

    public function about(){

        return view('about');
    }

    public function contact(){

        return view('contact');
    }

    public function add(){

        return view('add');
    }

    public function store(){

        $user = new \App\User();

        $user->name = request('name');

        $user->email = request('email');

        $user->password = request('password');

        $user->save();

        return redirect('users');

    }

    public function users(){

        $users = User::all();

       return view('users', compact('users'));
    }
}
