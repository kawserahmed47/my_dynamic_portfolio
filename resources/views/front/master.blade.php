<!DOCTYPE html>
<html lang="en" data-random-animation="false" data-animation="31">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

        <!--Meta Tags-->
        <meta charset="UTF-8">
        <meta name="description" content="This is Kawser Ahmed, Full Stact Web Developer. I have completed my under graduate from the department of Computer Science and Engineering of Daffodil International University. I have two years of expertise on PHP and it's framework CodeIgniter and Laravel.">
        <meta name="keywords" content="Kawser, Ahmed, Kawser Ahmed, Engr., Engr.Kawser, Engr. Kawser Ahmed, Software, Software Engineer, Computer, Computer Engineer, Bsc, Bsc in CSE, CSE, Computer Science, CSE Kawser, Kawsir, Kawsar">
        <meta name="author" content="Kawser Ahmed">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Page Title-->
        <title>Kawser Ahmed - Home</title>

        <!--Plugins Css-->
        <link rel="stylesheet" href="{{asset('public/front/css')}}/plugins.css">
        <!--Main Styles Css-->
        <link rel="stylesheet" href="{{asset('public/front/css')}}/style-light.css">

        <link rel="stylesheet" href="{{asset('public/front/css')}}/style-demo.css">

        <!--Color Css-->
        <link class="site-color" rel="stylesheet" href="{{asset('public/front/css')}}/blue-color.css">

        <!--Modernizr Js-->
        <script src="{{asset('public/front/js')}}/modernizr.js"></script>

        <!--Favicons-->
        <link rel="shortcut icon" href="{{asset('public/front/img')}}/profile_img.jpg" type="image/x-icon">

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122650090-3"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'UA-122650090-3');
		</script>

    </head>

    <body>

     
        <!--Preloader Start-->
        <div class="preloader">
            <div class="loader">
                <!--Your Name-->
                <h4>Kawser Ahmed</h4>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!--Preloader End-->

        <div id="page">

            <!--Header Start-->
            <header>
                <div class="header-content">

                    @include('front.layouts.header')

                        <!--Nav Footer-->
                        @include('front.layouts.footer')

                    </div>
                </div>
            </header>
            <!--Header End-->


            <!--Main Start-->
            <div id="main" class="site-main">

                <!--Banner Section Start-->
              @include('front.sections.home')
                <!--Banner Section End-->


                <!--About Section Start-->
              @include('front.sections.about')
                <!--About Section Start-->


                <!--Resume Section Start-->
                @include('front.sections.resume')
                <!--Resume Section End-->


                <!--Porfolio Section Start-->
                @include('front.sections.portfolio')
                <!--Porfolio Section End-->


                
                <!--Gallery Section Start-->
                @include('front.sections.gallery')
                <!--Porfolio Section End-->


                <!--Blog Section Start-->
                @include('front.sections.blog')
                <!--Blog Section End-->


                <!--Contact Section Start-->
                @include('front.sections.contact')
                <!--Contact Section End-->


            </div>
            <!--Main End-->

        </div>

        <!--Ajax Portfolio Container Start-->
        <div class="ajax-portfolio-popup">
            <span class="ajax-loader"></span>
            <div class="navigation-wrap">
                <span class="popup-close"><i class="fas fa-times-circle"></i></span>
            </div>
            <div class="content-wrap">
                <div class="popup-content"></div>
            </div>
        </div>
        <!--Ajax Portfolio Container End-->

        <!--Jquery JS-->
        <script src="{{asset('public/front/js')}}/jquery.min.js"></script>
        <!--Plugins JS-->
        <script src="{{asset('public/front/js')}}/plugins.min.js"></script>
        <!--Google Map Api-->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxjdAabKFsk7CHhYq3VNKkwRyonhLHWDo"></script>
        <!--Site Main JS-->
        <script src="{{asset('public/front/js')}}/main.js"></script>

        <script src="{{asset('public/front/js')}}/main-demo.js"></script>

        <script>
            //Super Slider
            $('#slides').superslides({
                animation: 'fade',
                play: 3000
            });
        </script>

    </body>

<!-- Mirrored from watson-vcard.netlify.app/index-light-slider.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Sep 2020 14:51:37 GMT -->
</html>


