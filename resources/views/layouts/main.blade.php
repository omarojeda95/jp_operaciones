<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from pro-theme.com/html/lesh/transaero/04_services.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2023 20:39:20 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Bootstrap Logistic Html Template">
    <meta name="keywords"
        content="Trans, Aero, Bootstrap, Html, Template, Logistic, Blog, Transport, Corporate, Cargo, Truck">
    <meta name="author" content="Vadzim Liashkevich">

    <!-- SITE TITLE -->
    <title>TransAero - Transport & Logistics HTML Template</title>

    <!-- =========================
      FAV AND TOUCH ICONS  
============================== -->
    <link rel="shortcut icon" href="https://pro-theme.com/html/lesh/transaero/img/favicon.ico">

    <!-- =========================
     STYLESHEETS   
============================== -->

    <!-- STYLES FILE -->
    <link href="https://pro-theme.com/html/lesh/transaero/css/master.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}"> --}}

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>


    @include('partials.preload')
    @include('partials.navbar')
    @include('partials.header')

    <!-- =========================
		SERVICES
	============================== -->
    @yield('content')

    @include('partials.footer')


    <!-- ===================================
		BOTTOM SECTION
	======================================== -->
    <div class="bottom">
        <div class="container">
            <div class="row">

                <!-- === BOTTOM LEFT === -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bottom-1">
                    COPYRIGHT 2015 | TRANS <span class="color-primary">AERO</span>
                </div>

                <!-- === BOTTOM CENTER === -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bottom-2">
                    <a href="#">
                        <div class="my-btn my-btn-grey">
                            <div class="my-btn-bg-top"></div>
                            <div class="my-btn-bg-bottom"></div>
                            <div class="my-btn-text">
                                <i class="fa fa-twitter"></i>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="my-btn my-btn-grey">
                            <div class="my-btn-bg-top"></div>
                            <div class="my-btn-bg-bottom"></div>
                            <div class="my-btn-text">
                                <i class="fa fa-facebook"></i>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="my-btn my-btn-grey">
                            <div class="my-btn-bg-top"></div>
                            <div class="my-btn-bg-bottom"></div>
                            <div class="my-btn-text">
                                <i class="fa fa-google-plus"></i>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="my-btn my-btn-grey">
                            <div class="my-btn-bg-top"></div>
                            <div class="my-btn-bg-bottom"></div>
                            <div class="my-btn-text">
                                <i class="fa fa-pinterest-p"></i>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="my-btn my-btn-grey">
                            <div class="my-btn-bg-top"></div>
                            <div class="my-btn-bg-bottom"></div>
                            <div class="my-btn-text">
                                <i class="fa fa-instagram"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- === BOTTOM RIGHT === -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bottom-3">
                    <a href="#">TERM OF USE</a> |
                    MADE BY <a href="#">TRANS <span class="color-primary">AERO</span></a>
                </div>

            </div>
        </div>
    </div>
    <!-- ===================================
		END BOTTOM SECTION
	======================================== -->


    <!-- =========================
	   SLIDE MENU
	============================== -->
    <aside id="slide-menu" class="slide-menu">

        <!-- === CLOSE MENU BUTON === -->
        <div class="close-menu" id="close-menu">
            <i class="fa fa-close"></i>
        </div>

        <!-- === SLIDE MENU === -->
        <ul id="left-menu" class="left-menu">

            <!-- === SLIDE MENU ITEM === -->
            <li>
                <a href="#">Home <i class="fa fa-plus arrow"></i></a>

                <!-- === slide menu child === -->
                <ul class="slide-menu-child">
                    <li><a href="https://pro-theme.com/html/lesh/transaero/01_home.html">Home 1</a></li>
                    <li><a href="https://pro-theme.com/html/lesh/transaero/02_home.html">Home 2</a></li>
                </ul>
            </li>

            <!-- === SLIDE MENU ITEM === -->
            <li>
                <a href="#">Service <i class="fa fa-plus arrow"></i></a>

                <!-- === slide menu child === -->
                <ul class="slide-menu-child">
                    <li><a href="https://pro-theme.com/html/lesh/transaero/03_services.html">Service 1</a></li>
                    <li><a href="04_services.html">Service 2</a></li>
                    <li><a href="https://pro-theme.com/html/lesh/transaero/05_service_detail.html">Service Details</a>
                    </li>
                </ul>
            </li>

            <!-- === SLIDE MENU ITEM === -->
            <li>
                <a href="https://pro-theme.com/html/lesh/transaero/06_about.html">About us</a>
            </li>

            <!-- === SLIDE MENU ITEM === -->
            <li>
                <a href="#">Elements <i class="fa fa-plus arrow"></i></a>

                <!-- === slide menu child === -->
                <ul class="slide-menu-child">
                    <li><a href="https://pro-theme.com/html/lesh/transaero/07_typography.html">Typography</a></li>
                    <li><a href="https://pro-theme.com/html/lesh/transaero/08_buttons.html">Buttons</a></li>
                    <li><a href="https://pro-theme.com/html/lesh/transaero/09_progress.html">Progress Bars</a></li>
                    <li><a href="https://pro-theme.com/html/lesh/transaero/10_alerts.html">Alerts</a></li>
                </ul>
            </li>

            <!-- === SLIDE MENU ITEM === -->
            <li>
                <a href="#">Blog <i class="fa fa-plus arrow"></i></a>

                <!-- === slide menu child === -->
                <ul class="slide-menu-child">
                    <li><a href="https://pro-theme.com/html/lesh/transaero/11_blog.html">Blog items</a></li>
                    <li><a href="https://pro-theme.com/html/lesh/transaero/12_blog_detail.html">Single Post</a></li>
                </ul>
            </li>

            <!-- === SLIDE MENU ITEM === -->
            <li>
                <a href="https://pro-theme.com/html/lesh/transaero/13_contacts.html">Contacts</a>
            </li>

        </ul>

    </aside>
    <!-- =========================
	   END SLIDE MENU
	============================== -->


    <!-- =========================
	   BLACK OVERLAY
	============================== -->
    <div class="black-overlay" id="black-overlay"></div>
    <!-- =========================
	   END BLACK OVERLAY
	============================== -->

    <!-- =========================
		 SCRIPTS   
	============================== -->

    {{-- <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script> --}}

    <!-- JQUERY -->
    <script src="https://pro-theme.com/html/lesh/transaero/js/jquery-1.11.3.min.js"></script>

    <!-- BOOTSTRAP -->
    <script src="https://pro-theme.com/html/lesh/transaero/js/bootstrap.min.js"></script>

    <!-- SMOOTH SCROLLING  -->
    <script src="https://pro-theme.com/html/lesh/transaero/js/smoothscroll.min.js"></script>

    <!-- STELLAR.JS FOR PARALLAX -->
    <script src="https://pro-theme.com/html/lesh/transaero/js/jquery.stellar.min.js"></script>

    <!-- SLIDER PRO  -->
    <script src="https://pro-theme.com/html/lesh/transaero/assets/slider-pro/js/jquery.sliderPro.min.js"></script>

    <!-- SCROLLSPY -->
    <script src="https://pro-theme.com/html/lesh/transaero/js/scrollspy.min.js"></script>

    <!-- WOW PLAGIN -->
    <script src="https://pro-theme.com/html/lesh/transaero/js/wow.min.js"></script>

    <!-- CAROUSEL -->
    <script src="https://pro-theme.com/html/lesh/transaero/assets/owl-carousel/owl.carousel.min.js"></script>

    <!-- VERTICAL ACCORDEON MENU -->
    <script src="https://pro-theme.com/html/lesh/transaero/js/metisMenu.min.js"></script>

    <!-- CUSTOM SCRIPT -->
    <script src="https://pro-theme.com/html/lesh/transaero/js/theme.min.js"></script>

    <script src="https://pro-theme.com/html/lesh/transaero/assets/colors/js/colors.js"></script>

    <!-- Yandex.Metrika counter -->
    {{-- <script type="text/javascript">
        (function (d, w, c) {
			(w[c] = w[c] || []).push(function() {
				try {
					w.yaCounter33369363 = new Ya.Metrika({
						id:33369363,
						clickmap:true,
						trackLinks:true,
						accurateTrackBounce:true
					});
				} catch(e) { }
			});

			var n = d.getElementsByTagName("script")[0],
				s = d.createElement("script"),
				f = function () { n.parentNode.insertBefore(s, n); };
			s.type = "text/javascript";
			s.async = true;
			s.src = "../../../../mc.yandex.ru/metrika/watch.js";

			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else { f(); }
		})(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/33369363" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript> --}}
    <!-- /Yandex.Metrika counter -->

</body>

<!-- Mirrored from pro-theme.com/html/lesh/transaero/04_services.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2023 20:39:21 GMT -->

</html>