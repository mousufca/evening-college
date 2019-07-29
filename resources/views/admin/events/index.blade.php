@extends('layouts.dashboard')

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        All Events <a href="{{route('events.create')}}" class="btn btn-success btn-sm m-l-30">Add Event</a>
                    </h2>

                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Location</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Location</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($events as $event)
                                <tr>
                                    <td>{{$event->title}}</td>
                                    <td>{{$event->location}}</td>

                                    <td>
                                        <a href="{{route('events.edit',$event->id)}}" class="btn btn-info btn-xs"><li class="material-icons">mode_edit</li></a>
                                    </td>
                                    <td>
                                        <form action="{{route('events.destroy',$event->id)}}" method="POST">
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
