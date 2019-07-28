@extends('layouts.dashboard')

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        All Departments <a href="{{route('departments.create')}}" class="btn btn-success btn-sm m-l-30">Add Department</a>
                    </h2>

                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Staffs</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($departments as $department)
                                <tr>
                                    <td>{{$department->title}}</td>
                                    <td>{{count($department->staffs)}}</td>
                                    <td>
                                        <a href="{{route('departments.edit',$department->id)}}" class="btn btn-info btn-xs"><li class="material-icons">mode_edit</li></a>
                                    </td>
                                    <td>
                                        <form action="{{route('departments.destroy',$department->id)}}" method="POST">
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
