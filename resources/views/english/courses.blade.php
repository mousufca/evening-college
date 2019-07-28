@extends('layouts.english')



@section('content')
    <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left section-heading probootstrap-animate">
                    <h1>Our Courses</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="probootstrap-section" style="padding-bottom: 20px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="probootstrap-flex-block">
                        <div class="probootstrap-text probootstrap-animate">
                            <div class="text-uppercase probootstrap-uppercase">Featured Course</div>
                            <h3><a href="{{route('courses.show',$featured->id)}}">{{$featured->title}}</a></h3>
                            <p>
                                {{str_limit($featured->details,100)}}
                            </p>
                            <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count">{{$featured->students}} students enrolled</span></p>
                        </div>
                        <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/slider_3.jpg)">
                            <img src="{{asset($featured->image)}}" alt="">
                            {{--<a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="probootstrap-section">
        <div class="container">
            <div class="row">



                @foreach($courses as $course)
                    <div class="col-md-6">
                        <div class="probootstrap-service-2 probootstrap-animate">
                            <div class="image">
                                <div class="image-bg">
                                    <img src="{{asset($course->image)}}" alt="Free Bootstrap Template by uicookies.com">
                                </div>
                            </div>
                            <div class="text">
                                <span class="probootstrap-meta"><i class="icon-calendar2"></i> {{$course->created_at->diffForHumans()}}</span>
                                <h3><a href="{{route('courses.show',$course->id)}}">{{$course->title}}</a></h3>
                                <p>{{str_limit($course->details,50)}}</p>
                                <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count">{{$course->students}} students enrolled</span></p>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
@stop
