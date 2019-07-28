<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('admin.courses.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'students'=>'required',
            'about'=>'required',
            'image'=>'required|file|mimes:jpeg,png,jpg'
        ]);
        $originalImage= $request->file('image');
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path().'/images/courses/';
        $thumbnailImage->resize(400,400);
        $name = time().$originalImage->getClientOriginalName();
        $path = $thumbnailPath.$name;
        $thumbnailImage->save($path);

        Course::create([
            'title'=>$request->title,
            'details'=>$request->about,
            'image'=>'images/courses/'.$name,
            'students'=>$request->students
        ]);

        session()->flash('success','Course Created');
        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('admin.courses.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title'=>'required',
            'students'=>'required',
            'about'=>'required',
            'image'=>'file|mimes:jpeg,png,jpg'
        ]);
        if($request->hasFile('image')){
            unlink($course->image);
            $originalImage= $request->file('image');
            $thumbnailImage = Image::make($originalImage);
            $thumbnailPath = public_path().'/images/courses/';
            $thumbnailImage->resize(400,400);
            $name = time().$originalImage->getClientOriginalName();
            $path = $thumbnailPath.$name;
            $thumbnailImage->save($path);
            $course->image = 'images/courses/'.$name;
        }
        $course->title = $request->title;
        $course->students = $request->students;
        $course->details = $request->about;
        $course->update();
        session()->flash('success','Course updated');
        return redirect()->route('courses.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        unlink($course->image);
        $course->delete();

        session()->flash('success','Course deleted');
        return redirect()->route('courses.index');

    }
}
