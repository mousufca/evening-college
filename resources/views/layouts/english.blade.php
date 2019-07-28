<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>St Aloysius Evening College</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('client/css/styles-merged.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/custom.cs')}}">
    <style type="text/css">
        .probootstrap-page-wrapper{
            margin: 0;
            max-width: 100%;
        }
        .container-fluid{
            padding: 0 50px;
        }
        .flexslider, .flexslider .slides>li, .slider-height{
            height: 500px;
        }
        .flexslider .probootstrap-slider-text{
            margin-top: 200px;
        }
        p{
            font-size: 17px;
        }
    </style>

    <script src="{{asset('client/js/vendor/html5shiv.min.js')}}"></script>
    <script src="{{asset('client/js/vendor/respond.min.js')}}"></script>

</head>
<body>

<div class="probootstrap-search" id="probootstrap-search">
    <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
    <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
    </form>
</div>

<div class="probootstrap-page-wrapper">
    <!-- Fixed navbar -->

    <div class="probootstrap-header-top" style="background-color: #6a41ed;color: #fff;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
                    <span><i class="icon-location2"></i>Mangaluru, Karnataka</span>
                    <span><i class="icon-phone2"></i>+1-123-456-7890</span>
                    <span><i class="icon-mail"></i>principal@saec.co.in</span>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
                    <ul>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook2"></i></a></li>
                        <li><a href="#"><i class="icon-instagram2"></i></a></li>
                        <li><a href="#"><i class="icon-youtube"></i></a></li>
                        <li><a href="#" class="probootstrap-search-icon js-probootstrap-search"><i class="icon-search"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="btn-more js-btn-more visible-xs">
                    <a href="#"><i class="icon-dots-three-vertical "></i></a>
                </div>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('eng')}}" title="uiCookies:Enlight" style="background-size: cover">Enlight</a>
            </div>

            <div id="navbar-collapse" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="{{route('eng')}}">Home</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">About</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('eng.about')}}">About Us</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                        </ul>
                    </li>

                    <li><a href="{{route('eng.courses')}}">Courses</a></li>
                    <li><a href="{{route('eng.teachers')}}">Teachers</a></li>
                    <li><a href="{{route('eng.news')}}">News</a></li>
                    <li><a href="{{route('eng.events')}}">Events</a></li>

                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Events</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    <footer class="probootstrap-footer probootstrap-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="probootstrap-footer-widget">
                        <h3>About The School</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro provident suscipit natus a cupiditate ab minus illum quaerat maxime inventore Ea consequatur consectetur hic provident dolor ab aliquam eveniet alias</p>
                        <h3>Social</h3>
                        <ul class="probootstrap-footer-social">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-github"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-md-push-1">
                    <div class="probootstrap-footer-widget">
                        <h3>Links</h3>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Courses</a></li>
                            <li><a href="#">Teachers</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="probootstrap-footer-widget">
                        <h3>Contact Info</h3>
                        <ul class="probootstrap-contact-info">
                            <li><i class="icon-location2"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
                            <li><i class="icon-mail"></i><span>info@domain.com</span></li>
                            <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- END row -->

        </div>

        <div class="probootstrap-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 text-left">
                        <p> All Rights Reserved. Designed &amp; Developed with <i class="icon icon-heart"></i> by <a href="https://sionasolutions.com/">sionasolutions</a></p>
                    </div>
                    <div class="col-md-4 probootstrap-back-to-top">
                        <p><a href="#" class="js-backtotop">Back to top <i class="icon-arrow-long-up"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
<!-- END wrapper -->


<script src="{{asset('client/js/scripts.min.js')}}"></script>
<script src="{{asset('client/js/main.min.js')}}"></script>
<script src="{{asset('client/js/custom.js')}}"></script>

</body>
</html>
