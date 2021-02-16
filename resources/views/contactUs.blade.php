
<!doctype html>
<html lang="en">


<!-- Mirrored from droitthemes.com/html/wavee/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Feb 2021 07:36:10 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=" {!! asset('fontendAsset') !!}/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href=" {!! asset('fontendAsset') !!}/vendors/fullpage/fullpage.css">
    <link rel="stylesheet" href=" {!! asset('fontendAsset') !!}/vendors/elagent-icon/style.css">
    <link rel="stylesheet" href=" {!! asset('fontendAsset') !!}/vendors/animation/animate.css">
    <link rel="stylesheet" href=" {!! asset('fontendAsset') !!}/vendors/slick/slick.css">
    <link rel="stylesheet" href=" {!! asset('fontendAsset') !!}/vendors/slick/slick-theme.css">
    <link rel="stylesheet" href=" {!! asset('fontendAsset') !!}/css/style.css">
    <link rel="stylesheet" href=" {!! asset('fontendAsset') !!}/css/responsive.css">
    <title>Contact us | 786 Mobile Hospital</title>
</head>

<body>
    <div class="body_wrapper">
        <!--        header     -->
        <header class="header_area p_absoulte m_p sticky_nav">
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
        </header>
        <!--        header     -->
        <!--        breadcrumb_area_five     -->
        <section class="breadcrumb_area_two breadcrumb_area_five parallaxie" data-background="img/bg.jpg" style="background: url({!! asset('fontendAsset') !!}/img/case_one/cases_banner.jpg) no-repeat;">
            <div class="overlay"></div>
            <div class="container">
                <div class="breadcrumb_content">
                    <h1>Contact Us</h1>
                    <ol class="nav">
                        <li><a href="#">Home</a></li>
                        <li>contact us</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--        breadcrumb_area_five     -->
        <!--        contact_area     -->
        <section class="contact_area">
            <div class="container">
                <div class="row contact_inner">
                    <div class="col-lg-7">
                        <div class="w_content_two w_contact_text">
                            <h2>Let's talk?</h2>
                            <p>It's all about the humans behind a brand and those experiencing it, we're right there. In the middle.</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <form action="{!! route('ContactUs') !!}" class="contact_form_box" method="post">
                          @csrf
                            <div class="form-group text_box">
                                <input type="text" name="name" id="name" placeholder="Your Name">
                            </div>
                            <div class="form-group text_box">
                                <input type="text" name="email" id="email" placeholder="Your Email">
                            </div>
                            <div class="form-group text_box">
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter Your Message . . ."></textarea>
                            </div>
                            <button type="submit" class="g_hover">Submit Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--        contact_area     -->
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{!! asset('fontendAsset') !!}/js/jquery-3.2.1.min.js"></script>
    <script src="{!! asset('fontendAsset') !!}/vendors/bootstrap/js/popper.min.js"></script>
    <script src="{!! asset('fontendAsset') !!}/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="{!! asset('fontendAsset') !!}/js/parallaxie.js"></script>
    <script src="{!! asset('fontendAsset') !!}/vendors/slick/slick.min.js"></script>
    <script src="{!! asset('fontendAsset') !!}/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="{!! asset('fontendAsset') !!}/vendors/isotope/isotope-min.js"></script>
    <!--gmaps Js-->
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&amp;ver=2.1.6"></script>
    <script src="{!! asset('fontendAsset') !!}/js/gmaps.min.js"></script>
    <script src="{!! asset('fontendAsset') !!}/js/map-active.js"></script>
    <!-- contact js -->
    <script src="{!! asset('fontendAsset') !!}/js/jquery.form.js"></script>
    <script src="{!! asset('fontendAsset') !!}/js/jquery.validate.min.js"></script>
    <script src="{!! asset('fontendAsset') !!}/js/contact.js"></script>
    <script src="{!! asset('fontendAsset') !!}/js/custom.js"></script>
</body>


<!-- Mirrored from droitthemes.com/html/wavee/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Feb 2021 07:36:15 GMT -->
</html>
