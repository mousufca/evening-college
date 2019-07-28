@extends('layouts.english')



@section('content')
    <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left section-heading probootstrap-animate">
                    <h1>{{$course->title}}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="probootstrap-section probootstrap-section-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row probootstrap-gutter0">
                        <div class="col-md-4" id="probootstrap-sidebar">
                            <div class="probootstrap-sidebar-inner probootstrap-overlap probootstrap-animate">
                                <h3>More Courses</h3>
                                <ul class="probootstrap-side-menu">
                                    @foreach($courses as $c)
                                        <li class="{{($c->id==$course->id)?'active':''}}"><a href="{{route('courses.show',$c->id)}}">{{$c->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                            <h2>Description</h2>
                            <p>
                                {{$course->details}}
                            </p>
                            <p><a href="#" class="btn btn-primary">Enroll with this course now</a> <span class="enrolled-count">{{$course->students}} students enrolled</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
