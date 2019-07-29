<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
            'image'=>'required|file|mimes:jpeg,png,jpg'
        ]);
        $originalImage= $request->file('image');
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path().'/images/news/';
        $thumbnailImage->resize(385,385);
        $name = time().$originalImage->getClientOriginalName();
        $path = $thumbnailPath.$name;
        $thumbnailImage->save($path);

        News::create([
            'title'=>$request->title,
            'details'=>$request->details,
            'image'=>'images/news/'.$name
        ]);

        session()->flash('success','News Created');
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
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
        return view('admin.news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
        'title'=>'required',
        'details'=>'required',
        'image'=>'file|mimes:jpeg,png,jpg'
    ]);
        if($request->hasFile('image')){
            unlink($news->image);
            $originalImage= $request->file('image');
            $thumbnailImage = Image::make($originalImage);
            $thumbnailPath = public_path().'/images/news/';
            $thumbnailImage->resize(385,385);
            $name = time().$originalImage->getClientOriginalName();
            $path = $thumbnailPath.$name;
            $thumbnailImage->save($path);
            $news->image = 'images/news/'.$name;
        }
        $news->title = $request->title;
        $news->details = $request->details;
        $news->update();
        session()->flash('success','News updated');
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        unlink($news->image);
        $news->delete();

        session()->flash('success','News deleted');
        return redirect()->route('news.index');
    }
}
