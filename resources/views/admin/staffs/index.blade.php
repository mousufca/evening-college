@extends('layouts.dashboard')

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        All Staffs <a href="{{route('staffs.create')}}" class="btn btn-success btn-sm m-l-30">Add Staff</a>
                    </h2>

                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Role</th>
                                <th>About</th>
                                <th>Department</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($staffs as $staff)
                                <tr>
                                    <td>{{$staff->name}}</td>
                                    <td>{{$staff->role}}</td>
                                    <td>{{$staff->about}} days</td>
                                    <td>{{$staff->department->title}}</td>
                                    <td>
                                        <a href="{{route('staffs.edit',$staff->id)}}" class="btn btn-info btn-xs"><li class="material-icons">mode_edit</li></a>
                                    </td>
                                    <td>
                                        <form action="{{route('staffs.destroy',$staff->id)}}" method="POST">
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
