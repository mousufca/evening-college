@extends('layouts.dashboard')

@section('content')

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Add Staff</h2>
                </div>
                <div class="body">
                    <form method="POST" action="{{route('staffs.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="name" required value="{{old('name')}}">
                                <label class="form-label">Name</label>
                            </div>
                            @if($errors->has('name'))
                                <span class="col-pink">
                                    {{$errors->first('name')}}
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="file" class="form-control" name="image">
                            @if($errors->has('image'))
                                <span class="col-pink">
                                    {{$errors->first('image')}}
                                </span>
                            @endif
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <select name="department" class="form-control show-tick">
                                    <option value="">Choose Department</option>
                                    @foreach($departments as $department)
                                        <option value="{{$department->id}}">{{$department->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @if($errors->has('department'))
                                <span class="col-pink">
                                    {{$errors->first('department')}}
                                </span>
                            @endif
                        </div>


                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="role" required value="{{old('role')}}">
                                <label class="form-label">Role</label>
                            </div>
                            @if($errors->has('role'))
                                <span class="col-pink">
                                    {{$errors->first('role')}}
                                </span>
                            @endif
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea type="text" class="form-control" name="about">{{old('about')}}</textarea>
                                <label class="form-label">About</label>
                            </div>
                            @if($errors->has('about'))
                                <span class="col-pink">
                                    {{$errors->first('about')}}
                                </span>
                            @endif
                        </div>





                        <button class="btn btn-success waves-effect" type="submit">Add now</button>
                        <button type="button" onclick="goBack()" class="btn btn-info">Go back</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop


@section('scripts')
    <script src="{{asset('plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
    {{--<script src="{{asset('js/pages/forms/basic-form-elements.js')}}"></script>--}}
@stop
@section('css')
    <link href="{{asset('plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
@stop
