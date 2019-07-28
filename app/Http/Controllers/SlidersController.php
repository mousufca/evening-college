<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('priority')->get();
        return view('admin.sliders.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
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
           'priority'=>'required',
           'image'=>'required|file|mimes:jpeg,png,jpg'
        ]);
        $originalImage= $request->file('image');
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path().'/images/sliders/';
        $thumbnailImage->resize(1350,550);
        $name = time().$originalImage->getClientOriginalName();
        $path = $thumbnailPath.$name;
        $thumbnailImage->save($path);

        Slider::create([
           'title'=>$request->title,
           'priority'=>$request->priority,
           'image'=>$name
        ]);

        session()->flash('success','Slider Image Added');
        return redirect()->route('sliders.index');

//        $imagemodel= new ImageModel();
//        $imagemodel->filename=time().$originalImage->getClientOriginalName();
//        $imagemodel->save();
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
    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
           'title'=>'required',
           'priority'=>'required|numeric'
        ]);
        $slider->title = $request->title;
        $slider->priority = $request->priority;
        $slider->update();
        session()->flash('success','Slider data updated');
        return redirect()->route('sliders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        unlink('images/sliders/'.$slider->image);
        $slider->delete();
        session()->flash('success','Slider Image has been deleted');
        return redirect()->route('sliders.index');
    }
}
