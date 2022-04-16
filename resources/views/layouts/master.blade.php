<!DOCTYPE html>
<html class="no-js" lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rutin</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/logo/rutin-logo.png">
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/flaticon.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/slick.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.8.1/dropzone.min.js">
</head>
<body>
<header class="header">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col">
                <div class="header-logo">
                    @foreach($set as $key)
                    <a href="{{route('company')}}"><img src="{{$key->siteLogo}}" width="100" alt="Site Logo"></a>
                    @endforeach
                </div>
            </div>
            <nav id="main-menu" class="main-menu col-lg-auto order-lg-2">
                @if(!Auth::check())
                    <div class="header-links col-auto order-lg-3">
                        <a href="#" data-toggle="modal" data-target="#loginSignupModal" data-target-sub="#login">Giriş</a>
                        <span>veya</span>
                        <a href="#" data-toggle="modal" data-target="#loginSignupModal" data-target-sub="#signup">Kayıt Ol</a>
                        <span></span>
                    </div>
                @endif
                @if(Auth::check())
                @if(Auth::user()->companyName == Null)
                            <ul><li><a href="{{route('exit')}}">Çıkış</a></li></ul>
                @else
                            <ul>
                                <li class="has-children"><a href="{{route('company')}}">Anasayfa</a></li>
                                <li class="has-children"><a href="{{route('advert')}}">İlan Ekle</a></li>
                                <li><a href="{{route('companylist')}}">Şirketler</a></li>
                                <li><a href="{{route('contact')}}">İletişim</a></li>
                                <li class="has-children"><a>Ayarlar</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('edit')}}">Şirketi Düzenle</a></li>
                                        <li><a href="{{route('dropzone')}}">Logo Düzenle</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('exit')}}">Çıkış</a></li>
                            </ul>
                @endif
                    @endif
            </nav>
        </div>
    </div>
</header>
<div id="offcanvas" class="offcanvas-section">
    <button class="offcanvas-close" data-target="#offcanvas">&times;</button>
    <div class="offcanvas-wrap">
        <div class="inner">
            <div class="offcanvas-user">
                <a href="#" data-toggle="modal" data-target="#loginSignupModal" data-target-sub="#login">Login</a>
                <span>or</span>
                <a href="#" data-toggle="modal" data-target="#loginSignupModal" data-target-sub="#signup">Sign up</a>
            </div>
        </div>
    </div>
</div>
<!--Offcanvas Section End-->
<!--OffCanvas Overlay-->
<div class="offcanvas-overlay"></div>
<div class="loginSignupModal modal fade" id="loginSignupModal" tabindex="-1" role="dialog" aria-labelledby="loginSignupModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <ul class="loginSignupNav nav">
                    <li><a class="nav-link active" data-toggle="tab" href="#login">Login</a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#signup">Sign up</a></li>
                </ul>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="login">
                        <form action="{{route('logpost')}}" method="POST">
                            @csrf
                            <div class="row mb-n3">
                                <div class="col-12 mb-3"><input name="email" type="email" placeholder="Email"></div>
                                <div class="col-12 mb-3"><input name="password" type="password" placeholder="Şifre"></div>
                                <div class="col-12 mb-3">
                                    <div class="row justify-content-between mb-n2">
                                        <div class="col-auto mb-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="remember-me" id="remember-me" value="checkedValue" class="custom-control-input">
                                                <label class="custom-control-label" name="rememberMe" for="remember-me">Beni hatırla</label>
                                            </div>
                                        </div>
                                        <div class="col-auto mb-2"><a href="{{route('forget.password.get')}}">Şifreni mi unuttun?</a></div>
                                    </div>
                                </div>
                                <div class="col-12 mb-3"><input class="btn btn-primary w-100" type="submit" value="Giriş"></div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="signup">
                        <form action="{{route('reg')}}" method="POST">
                            @csrf
                            <div class="row mb-n3">
                                <div class="col-12 mb-3"><input name="name" type="text" value="{{old('name')}}" placeholder="İsim"></div>
                                <div class="col-12 mb-3"><input name="surname" type="text" value="{{old('surname')}}" placeholder="Soyisim"></div>
                                <div class="col-12 mb-3"><input name="email" type="email" value="{{old('email')}}" placeholder="E-Mail"></div>
                                <div class="col-12 mb-3"><input name="password" type="password" value="{{old('password')}}" placeholder="Şifre"></div>
                                <div class="col-12 mb-3"><input class="btn btn-primary w-100" type="submit" value="Kayıt Ol"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@yield('content')

<!-- Footer Top Section Start -->
<div class="footer-top-section section">
    <div class="container">
        <div class="footer-widget-wrap row">

            <!-- Footer Widget Start -->
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="footer-widget">
                    <div class="footer-widget-about">
                        @foreach($set as $key)
                        <img src="{{$key->siteLogo}}" width="200" alt="">
                        <p>{{$key->shortAboutUs}}</p>
                        <ul class="footer-socail">
                            <li><a href="{{$key->facebook}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{$key->twitter}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{$key->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="{{$key->youtube}}"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="{{$key->instagram}}"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Footer Widget End -->

            <!-- Footer Widget Start -->
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="footer-widget">
                    <h6 class="title">Quick links</h6>
                    <div class="footer-widget-link">
                        <ul>
                            <li><a href="#">Post New Job</a></li>
                            <li><a href="#">Jobs List</a></li>
                            <li><a href="#">Candidate List</a></li>
                            <li><a href="#">Employer List</a></li>
                            <li><a href="#">Browse Categories</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Footer Widget End -->

            <!-- Footer Widget Start -->
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="footer-widget">
                    <h6 class="title">Tranding Jobs</h6>
                    <div class="footer-widget-link">
                        <ul>
                            <li><a href="#">Designer</a></li>
                            <li><a href="#">UI & UX Expert</a></li>
                            <li><a href="#">Develpoer</a></li>
                            <li><a href="#">iOS developer</a></li>
                            <li><a href="#">Front-End developer</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Footer Widget End -->

            <!-- Footer Widget Start -->
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="footer-widget">
                    <h6 class="title">Newsletter</h6>
                    <div class="footer-widget-newsletter">
                        <p>Subscribe to Lawson to get all latest Job, Resume, Company Listing & Blog post to stay update.</p>
                        <form id="mc-form" class="mc-form">
                            <input id="mc-email" autocomplete="off" type="email" placeholder="Enter your e-mail address">
                            <button id="mc-submit" class="btn"><i class="fa fa-envelope-o"></i></button>
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts text-centre">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
                        </div><!-- mailchimp-alerts end -->
                    </div>
                </div>
            </div>
            <!-- Footer Widget End -->

        </div>
    </div>
</div>
<!-- Footer Top Section End -->

<!-- Footer Bottom Section Start -->
<div class="footer-bottom-section section">
    <div class="container">
        <div class="row">

            <!-- Footer Copyright Start -->
            <div class="col-12">
                <p class="footer-copyright text-center">Copyright &copy; 2022 <a href="https://rutin.com/">Rutin</a> Tüm hakları saklıdır. Verilen ilanlardan Rutin sorumlu değildir.</p>
            </div>
            <!-- Footer Copyright End -->

        </div>
    </div>
</div>
<!-- Footer Bottom Section End -->

<!-- JS
============================================ -->

<!-- Google Map API JS -->
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>

<!-- Vendors JS -->
<script src="/assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="/assets/js/vendor/jquery-3.4.1.min.js"></script>
<script src="/assets/js/vendor/bootstrap.bundle.min.js"></script>

<!-- Plugins JS -->

<script src="/assets/js/plugins/slick.min.js"></script>
<script src="/assets/js/plugins/jquery.waypoints.min.js"></script>
<script src="/assets/js/plugins/jquery.counterup.min.js"></script>
<script src="/assets/js/plugins/jquery.parallax.js"></script>
<script src="/assets/js/plugins/jquery.ajaxchimp.min.js"></script>
<script src="/assets/js/plugins/ion.rangeSlider.min.js"></script>
<script src="/assets/js/plugins/jquery.scrollUp.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
<script src="/assets/js/main.js"></script>

@yield('scripts')
@if(session()->has('success'))
    <script>alertify.success('{{session('success')}}')</script>
@endif
@if(session()->has('error'))
    <script>alertify.error('{{session('error')}}')</script>
@endif
@foreach($errors->all() as $error)
    <script>
        alertify.error('{{$error}}');
    </script>
@endforeach
@include('sweetalert::alert')

</body>
</html>
