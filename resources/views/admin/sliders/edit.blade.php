@extends('layouts.dashboard')


@section('content')

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Update Slider Data</h2>
                </div>
                <div class="body">
                    <form method="POST" action="{{route('sliders.update',$slider->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="title" required value="{{old('title')?old('title'):$slider->title}}">
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
                                <input type="number" class="form-control" name="priority" required value="{{old('priority')?old('priority'):$slider->priority}}">
                                <label class="form-label">Priority</label>
                            </div>
                            @if($errors->has('priority'))
                                <span class="col-pink">
                                    {{$errors->first('priority')}}
                                </span>
                            @endif
                        </div>


                        <button class="btn btn-success waves-effect" type="submit">Upload Slider</button>
                        <button type="button" onclick="goBack()" class="btn btn-info">Go back</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
