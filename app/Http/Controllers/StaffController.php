<?php

namespace App\Http\Controllers;

use App\Department;
use App\Staff;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::all();
        return view('admin.staffs.index',compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        return view('admin.staffs.create',compact('departments'));
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
           'name'=>'required',
            'department'=>'required'
        ]);
        $staff = new Staff();
        if($request->hasFile('image')){
            $originalImage= $request->file('image');
            $thumbnailImage = Image::make($originalImage);
            $thumbnailPath = public_path().'/images/staffs/';
            $thumbnailImage->resize(300,300);
            $name = time().$originalImage->getClientOriginalName();
            $staff->image = 'images/staffs/'.$name;
            $path = $thumbnailPath.$name;
            $thumbnailImage->save($path);
        }

        $staff->name = $request->name;
        if($request->has('role')){
            $staff->role = $request->role;
        }
        if($request->has('about')){
            $staff->about = $request->about;
        }
        $staff->department_id = $request->department;
        $staff->save();
        session()->flash('success','Staff added');
        return redirect()->route('staffs.index');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
