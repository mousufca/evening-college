@extends('layouts.english')



@section('content')

    <section class="flexslider">
        <ul class="slides">
            @foreach($sliders as $slider)
                <li style="background-image: url({{asset('images/sliders/'.$slider->image)}})" class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="probootstrap-slider-text text-center">
                                    <h1 style="background-color: rgba(0,0,0,0.4)" class="probootstrap-heading probootstrap-animate">{{$slider->title}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </section>

    <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left section-heading probootstrap-animate">
                    <h2>St Aloysius Evening College – Golden Jubilee Year (1966-2016)</h2>
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
                            <p>1966 is an auspicious year in the annals of St Aloysius College, Mangalore. After taking giant strides in the field of education through its flagship Institution St Aloysius College, the Jesuit fathers made a telling impact on the educational arena of Mangalore by starting an evening college. An evening college had been a long-felt need of the working people of Mangalore. </p>
                            <p><a href="{{route('eng.about')}}" class="btn btn-primary">Read More</a></p>
                        </div>
                        <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/slider_3.jpg)">
                            <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="probootstrap-section" id="probootstrap-counter">
        <div class="container">

            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                    <div class="probootstrap-counter-wrap">
                        <div class="probootstrap-icon">
                            <i class="icon-users2"></i>
                        </div>
                        <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="20203" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                            <span class="probootstrap-counter-label">Students Enrolled</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                    <div class="probootstrap-counter-wrap">
                        <div class="probootstrap-icon">
                            <i class="icon-user-tie"></i>
                        </div>
                        <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="139" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                            <span class="probootstrap-counter-label">Certified Teachers</span>
                        </div>
                    </div>
                </div>
                <div class="clearfix visible-sm-block visible-xs-block"></div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                    <div class="probootstrap-counter-wrap">
                        <div class="probootstrap-icon">
                            <i class="icon-library"></i>
                        </div>
                        <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="99" data-speed="5000" data-refresh-interval="50">1</span>%
                  </span>
                            <span class="probootstrap-counter-label">Passing to Universities</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">

                    <div class="probootstrap-counter-wrap">
                        <div class="probootstrap-icon">
                            <i class="icon-smile2"></i>
                        </div>
                        <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="100" data-speed="5000" data-refresh-interval="50">1</span>%
                  </span>
                            <span class="probootstrap-counter-label">Parents Satisfaction</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section" style="background-image: url(img/slider_2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center section-heading probootstrap-animate">
                    <h2 class="mb0">Highlights</h2>
                </div>
            </div>
        </div>
        <div class="probootstrap-tab-style-1">
            <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
                <li class="active"><a data-toggle="tab" href="#featured-news">Featured News</a></li>
                <li><a data-toggle="tab" href="#upcoming-events">Upcoming Events</a></li>
            </ul>
        </div>
    </section>

    <section class="probootstrap-section probootstrap-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="tab-content">

                        <div id="featured-news" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="owl-carousel" id="owl1">
                                        @foreach($news as $n)
                                            <div class="item">
                                                <a href="#" class="probootstrap-featured-news-box">
                                                    <figure class="probootstrap-media"><img src="{{asset($n->image)}}" alt="{{$n->title}}" class="img-responsive"></figure>
                                                    <div class="probootstrap-text">
                                                        <h3>{{$n->title}}</h3>
                                                        <p>{{str_limit($n->details,50)}}</p>
                                                        <span class="probootstrap-date"><i class="icon-calendar"></i>{{$n->created_at->diffForHumans()}}</span>

                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                        <!-- END item -->
                                    </div>
                                </div>
                            </div>
                            <!-- END row -->
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <p><a href="#" class="btn btn-primary">View all news</a></p>
                                </div>
                            </div>
                        </div>
                        <div id="upcoming-events" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="owl-carousel" id="owl2">

                                        @foreach($events as $event)
                                            <div class="item">
                                                <a href="#" class="probootstrap-featured-news-box">
                                                    <figure class="probootstrap-media"><img src="{{asset($event->image)}}" alt="{{$event->title}}" class="img-responsive"></figure>
                                                    <div class="probootstrap-text">
                                                        <h3>{{$event->title}}</h3>
                                                        <span class="probootstrap-date"><i class="icon-calendar"></i>{{$event->created_at->diffForHumans()}}</span>
                                                        <span class="probootstrap-location"><i class="icon-location2"></i>{{$event->location}}</span>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach

                                        <!-- END item -->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <p><a href="#" class="btn btn-primary">View all events</a></p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="probootstrap-section probootstrap-bg-white probootstrap-border-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                    <h2>Our Featured Courses</h2>
                </div>
            </div>
            <!-- END row -->
            <div class="row">



                    @foreach($courses as $course)
                    <div class="col-md-6">
                        <div class="probootstrap-service-2 probootstrap-animate">
                            <div class="image">
                                <div class="image-bg">
                                    <img src="{{$course->image}}" alt="Free Bootstrap Template by uicookies.com">
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

    <section class="probootstrap-section probootstrap-bg probootstrap-section-colored probootstrap-testimonial" style="background-image: url(img/slider_4.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                    <h2>Alumni Testimonial</h2>
                    <p class="lead">Sed a repudiandae impedit voluptate nam Deleniti dignissimos perspiciatis nostrum porro nesciunt</p>
                </div>
            </div>
            <!-- END row -->
            <div class="row">
                <div class="col-md-12 probootstrap-animate">
                    <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth">
                        <div class="item">

                            <div class="probootstrap-testimony-wrap text-center">
                                <figure>
                                    <img src="img/person_1.jpg" alt="Free Bootstrap Template by uicookies.com">
                                </figure>
                                <blockquote class="quote">&ldquo;Design must be functional and functionality must be translated into visual aesthetics, without any reliance on gimmicks that have to be explained.&rdquo; <cite class="author"> &mdash; <span>Mike Fisher</span></cite></blockquote>
                            </div>

                        </div>
                        <div class="item">
                            <div class="probootstrap-testimony-wrap text-center">
                                <figure>
                                    <img src="img/person_2.jpg" alt="Free Bootstrap Template by uicookies.com">
                                </figure>
                                <blockquote class="quote">&ldquo;Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while.&rdquo; <cite class="author"> &mdash;<span>Jorge Smith</span></cite></blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="probootstrap-testimony-wrap text-center">
                                <figure>
                                    <img src="img/person_3.jpg" alt="Free Bootstrap Template by uicookies.com">
                                </figure>
                                <blockquote class="quote">&ldquo;I think design would be better if designers were much more skeptical about its applications. If you believe in the potency of your craft, where you choose to dole it out is not something to take lightly.&rdquo; <cite class="author">&mdash; <span>Brandon White</span></cite></blockquote>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END row -->
        </div>
    </section>

    <section class="probootstrap-section">
        <div class="container">
            <h1 class="text-center">
                Vision & Mission
            </h1>

            <div class="row text-center">
                <div class="col-sm-12">
                    <h3><b>Motto</b></h3>
                    <p>Lucet et Ardet (Shine to Enkindle)</p>
                </div>
                <div class="col-sm-12">
                    <h3><b>Vision</b></h3>
                    <p>Empowering the youth to shape a better future for humankind by forming them into effective and responsive individuals.</p>
                </div>
                <div class="col-sm-12">
                    <h3><b>Mission</b></h3>
                    <p>To foster professionalism through commitment, co-operation, creativity and innovation without distinction of caste or creed, but decidedly with a slant in favour of the marginalised by providing opportunities</p>
                </div>
            </div>
            <!-- END row -->
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
