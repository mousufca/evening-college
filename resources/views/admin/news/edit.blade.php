@extends('layouts.dashboard')

@section('content')

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Update News</h2>
                </div>
                <div class="body">
                    <form method="POST" action="{{route('news.update',$news->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="title" required value="{{old('title')?old('title'):$news->title}}">
                                <label class="form-label">Title</label>
                            </div>
                            @if($errors->has('title'))
                                <span class="col-pink">
                                    {{$errors->first('title')}}
                                </span>
                            @endif
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="file" class="form-control" name="image" value="{{old('image')}}">

                            </div>
                            @if($errors->has('image'))
                                <span class="col-pink">
                                    {{$errors->first('image')}}
                                </span>
                            @endif
                        </div>



                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea name="details" cols="30" rows="5" class="form-control no-resize" required>{{old('news')?old('news'):$news->details}}</textarea>
                                <label class="form-label">Details</label>
                            </div>
                            @if($errors->has('details'))
                                <span class="col-pink">
                                    {{$errors->first('details')}}
                                </span>
                            @endif
                        </div>

                        <button class="btn btn-success waves-effect" type="submit">Update News</button>
                        <button type="button" onclick="goBack()" class="btn btn-info">Go back</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
