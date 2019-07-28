@extends('layouts.dashboard')

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        All Images <a href="{{route('sliders.create')}}" class="btn btn-success btn-sm m-l-30">Add Image</a>
                    </h2>

                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Thumb</th>
                                <th>Priority</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sliders as $slider)
                                <tr>
                                    <td>{{$slider->title}}</td>
                                    <td>
                                        <img src="{{asset('images/sliders/'.$slider->image)}}" alt="{{$slider->title}}" style="width: 130px;height: 55px">
                                    </td>
                                    <td>{{$slider->priority}}</td>
                                    <td>
                                        <a href="{{route('sliders.edit',$slider->id)}}" class="btn btn-info btn-xs"><i class="material-icons">edit</i></a>
                                    </td>
                                    <td>
                                        <form action="{{route('sliders.destroy',$slider->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-xs btn-danger"><i class="material-icons">delete_sweep</i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    @include('partials.jtable')
@stop
