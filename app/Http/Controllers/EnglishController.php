<?php

namespace App\Http\Controllers;

use App\Course;
use App\Department;
use App\Slider;
use Illuminate\Http\Request;

class EnglishController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $sliders = Slider::orderBy('priority')->take(4)->get();
        return view('english.index', compact('sliders','courses'));
    }

    public function teachers()
    {
        $departments = Department::all();
        return view('english.teachers', compact('departments'));
    }

    public function about(){
        return view('english.about');
    }
}
