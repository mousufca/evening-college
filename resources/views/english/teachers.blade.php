@extends('layouts.english')



@section('content')

    <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left section-heading probootstrap-animate">
                    <h1>Our Teachers</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="probootstrap-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="probootstrap-flex-block">
                        <div class="probootstrap-text probootstrap-animate">
                            <h3>We Hired Certified Teachers For Our Students</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis explicabo veniam labore ratione illo vero voluptate a deserunt incidunt odio aliquam commodi blanditiis voluptas error non rerum temporibus optio accusantium!</p>
                            <p><a href="#" class="btn btn-primary">Learn More</a></p>
                        </div>
                        <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/slider_3.jpg)">
                            <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="probootstrap-section">
        <div class="container">

            @foreach($departments as $department)
                <h2 class="text-center">{{$department->title}}</h2>
                <div class="row">
                    @foreach($department->staffs()->get() as $staff)
                        <div class="col-md-{{12/count($department->staffs()->get())}} col-sm-6">
                            <div class="probootstrap-teacher text-center probootstrap-animate">
                                <figure class="media">
                                    <img src="{{asset($staff->image)}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                                </figure>
                                <div class="text">
                                    <h3>{{$staff->name}}</h3>
                                    <p>{{$staff->role}}</p>
                                    <small>{{$staff->about}}</small>
                                    <ul class="probootstrap-footer-social">
                                        <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                                        <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                                        <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                                        <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="clearfix visible-sm-block visible-xs-block"></div>
                </div>
            @endforeach


        </div>
    </section>

    <section class="probootstrap-cta">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Get your admission now!</h2>
                    <a href="#" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">Enroll</a>
                </div>
            </div>
        </div>
    </section>

@stop
