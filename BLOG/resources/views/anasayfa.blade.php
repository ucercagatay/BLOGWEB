<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ÇAĞATAY ÜÇER</title>
    <!-- Font Awesome icons (free version)-->
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js')}}" crossorigin="anonymous"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('homepage/css/heading.css')}}" rel="stylesheet">
    <!-- Fonts CSS-->
    <link rel="stylesheet" href="{{asset('homepage/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('homepage/css/body.css')}}">
</head>
<body id="page-top">
<nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
    <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">ÇAĞATAY ÜÇER</a>
        <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="">ANASAYFA</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="">HAKKINDA</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" target="_blank" href="{{route('feedback')}}">GERİ BİLDİRİM</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image--><img class="masthead-avatar mb-5" src="{{asset('homepage/assets/img/avataaars.svg')}}" alt="">
        <!-- Masthead Heading-->
        <h1 class="masthead-heading mb-0">HAKKINDA</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p  class="pre-wrap masthead-subheading font-weight-light mb-0">12.07.2001 dogumlu Fırat Üniversitesi Yazılım Mühendisligi 3.Sınıf ögrencisiyim.
            Istanbulda yasamaktayım.</p>
    </div>
</header>

<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <!-- Footer Social Icons-->
            <div class="col-lg-4 mb-5 mb-lg-0" style="margin-left: 33%;">
                <h4 class="mb-4">SOSYAL MEDYA HESAPLARIM</h4><a class="btn btn-outline-light btn-social mx-1"
                                                                href="https://www.facebook.com/godlessriv" target="blank_">
                    <i class="fab fa-fw fa-facebook-f"></i></a><a class="btn btn-outline-light btn-social mx-1"
                                                                  href="https://www.twitter.com/ucercagatay" target="blank_"><i class="fab fa-fw fa-twitter"></i></a><a class="btn btn-outline-light btn-social mx-1"
                                                                                                                                                                        href="https://www.linkedin.com/in/çağatay-ucer-1a7b45196/" target="blank_"><i class="fab fa-fw fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="https://www.github.com/ucercagatay" target="blank_"><i class="fab fa-fw fa-github"></i></a>
            </div>
            <!-- Footer About Text-->
        </div>
    </div>
</footer>
<!-- Copyright Section-->
<section class="copyright py-4 text-center text-white">
    <div class="container"><small class="pre-wrap">Copyright © Çağatay Üçer 2021</small></div>
</section>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
<div class="scroll-to-top d-lg-none position-fixed"><a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
<!-- Bootstrap core JS-->
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
<script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js')}}"></script>
<!-- Third party plugin JS-->
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js')}}"></script>
<!-- Core theme JS-->
<script src="../../public/homepage/js/scripts.js"></script>
</body>
</html>
