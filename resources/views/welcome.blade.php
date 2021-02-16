<!doctype html>
<html lang="en">


<!-- Mirrored from droitthemes.com/html/wavee/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Feb 2021 07:33:07 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{!! asset('fontendAsset') !!}/img/logo.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{!! asset('fontendAsset') !!}/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{!! asset('fontendAsset') !!}/vendors/fullpage/fullpage.css">
    <link rel="stylesheet" href="{!! asset('fontendAsset') !!}/vendors/elagent-icon/style.css">
    <link rel="stylesheet" href="{!! asset('fontendAsset') !!}/vendors/animation/animate.css">
    <link rel="stylesheet" href="{!! asset('fontendAsset') !!}/css/style.css">
    <link rel="stylesheet" href="{!! asset('fontendAsset') !!}/css/responsive.css">
    <title>786 - MOBILE HOSPITAL</title>
</head>

<body class="home_one">
    <!--    header   -->
    <header class="header_area_one p_absoulte m_p">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-9 col-7">
                    <div class="menu_left">
                        <a href="#" class="logo"><img src="{!! asset('fontendAsset') !!}/img/logo.png" srcset="{!! asset('fontendAsset') !!}/img/logo.png" width="100px" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-3 col-5">
                    <div class="menu_right">
                        <div class="burger_menu">
                            <span class="text" data-text="menu"></span>
                            <div class="dot_icon">
                                <span class="dot one"></span>
                                <span class="dot two"></span>
                                <span class="dot three"></span>
                                <span class="dot four"></span>
                                <span class="dot five"></span>
                                <span class="dot six"></span>
                                <span class="dot seven"></span>
                                <span class="dot eight"></span>
                                <span class="dot nine"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--    header   -->
@php
  $apps = DB::table('addapps')->where('status', 1)->get();
@endphp
    <!--    hamburger_menu   -->
    <div class="hamburger_menu_wrepper" id="menu">
        <div class="animation-box">
            <div class="top_menu">
                <a href=index-2.html><img src="img/logo.png" srcset="img/wlogo@2x.png 2x" alt="logo"></a>
                <div class="burger_menu close_icon">
                    <span class="text" data-text="Close"></span>
                    <i class="icon_close"></i>
                </div>
            </div>
            <div class="menu-box navbar">
                <ul class="navbar-nav justify-content-end menu offcanfas_menu">
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="{!! route('home') !!}" role="button">
                            Home
                        </a>
                    </li>
                    <li class="nav-item dropdown submenu">
                        <a class="nav-link dropdown-toggle" href="{!! route('ContactUs') !!}" role="button">
                            Contact US
                        </a>
                    </li>
                    <li class="nav-item dropdown submenu">
                        <a class="nav-link dropdown-toggle" href="{!! route('PrivacyPolicy') !!}" role="button">
                            Privacy Policy
                        </a>
                    </li>
                    <li class="nav-item dropdown submenu">
                        <a class="nav-link dropdown-toggle" href="{!! route('Terms') !!}" role="button">
                            Terms & Conditions
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--    hamburger_menu   -->

    <div id="wavescroll">

        <!--        section_three      -->
        @foreach ($apps as $value)
          <section class="section wave_one_section_three">
            <div class="t_first p_absoulte"><img class="layer layer2" data-depth="-0.20" src="img/home_one/t_angle.png" alt=""></div>
            <div class="t_two p_absoulte"><img class="layer layer2" data-depth="0.50" src="img/home_one/triangle_shap_two.png" alt=""></div>
            <div class="t_four p_absoulte"><img class="layer layer2" data-depth="0.30" src="img/home_one/triangle_shap_three.png" alt=""></div>

            <div class="intro">
                <div class="container custom_container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="w_content_two">
                                <h2>{{ $value->appsName }}</h2>
                                <p> {{ $value->appsDesc }} </p>
                                <a href="{!! $value->appsLink !!}" class="p_btn">Download Now</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="w_phone_img">
                                <img class="p_absoulte dot" src=" {!! asset('fontendAsset') !!}/img/home_one/dot2.png" alt="">
                                <img class="p_one" src=" {!! asset('./uploads/'.$value->ss1) !!}" alt="">
                                <img class="p_two p_absoulte" src="{!! asset('./uploads/'.$value->ss2) !!}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endforeach
        <!--        section_three      -->
    </div>

    <!--        full_footer      -->
    <footer class="full_footer p_absoulte f_footer_one">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-6">
                    <div class="pr_details_nav h_slider_nav align-items-end">
                        <span class="prev" id="moveUp">Prev</span>
                        <span class="next moveUp" id="moveDown">Next</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--        full_footer      -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{!! asset('fontendAsset') !!}/js/jquery-3.2.1.min.js"></script>
    <script src="{!! asset('fontendAsset') !!}/vendors/bootstrap/js/popper.min.js"></script>
    <script src="{!! asset('fontendAsset') !!}/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="{!! asset('fontendAsset') !!}/vendors/fullpage/scroll-overflow.js"></script>
    <script src="{!! asset('fontendAsset') !!}/vendors/fullpage/fullpage.js"></script>
    <script src="{!! asset('fontendAsset') !!}/js/parallax.js"></script>
    <script src="{!! asset('fontendAsset') !!}/js/custom.js"></script>
</body>


<!-- Mirrored from droitthemes.com/html/wavee/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Feb 2021 07:33:32 GMT -->
</html>
