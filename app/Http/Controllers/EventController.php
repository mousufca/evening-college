<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.create');
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
            'details'=>'required',
            'location'=>'required',
            'image'=>'required|file|mimes:jpeg,png,jpg'
        ]);
        $originalImage= $request->file('image');
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path().'/images/events/';
        $thumbnailImage->resize(385,385);
        $name = time().$originalImage->getClientOriginalName();
        $path = $thumbnailPath.$name;
        $thumbnailImage->save($path);

        Event::create([
            'title'=>$request->title,
            'details'=>$request->details,
            'image'=>'images/events/'.$name,
            'location'=>$request->location
        ]);

        session()->flash('success','Event Created');
        return redirect()->route('events.index');
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
    public function edit(Event $event)
    {
        return view('admin.events.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title'=>'required',
            'location'=>'required',
            'details'=>'required',
            'image'=>'file|mimes:jpeg,png,jpg'
        ]);
        if($request->hasFile('image')){
            unlink($event->image);
            $originalImage= $request->file('image');
            $thumbnailImage = Image::make($originalImage);
            $thumbnailPath = public_path().'/images/events/';
            $thumbnailImage->resize(385,385);
            $name = time().$originalImage->getClientOriginalName();
            $path = $thumbnailPath.$name;
            $thumbnailImage->save($path);
            $event->image = 'images/events/'.$name;
        }
        $event->title = $request->title;
        $event->location = $request->location;
        $event->details = $request->details;
        $event->update();
        session()->flash('success','Event updated');
        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        unlink($event->image);
        $event->delete();

        session()->flash('success','Event deleted');
        return redirect()->route('events.index');
    }
}
