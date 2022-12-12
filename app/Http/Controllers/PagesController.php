<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function profile()
    {
        return view('profile');
    }
    public function course()
    {
        return view('course');
    }
    public function search()
    {
        return view('search');
    }
    public function sidenav()
    {
        return view('sidenav');
    }
    public function registeredInstructor()
    {
        return view('registeredInstructor');
    }
    public function pagination()
    {
        return view('pagination');
    }
}
