@extends('layouts.master')
@section('content')
    <!-- Page Heading Section Start -->
    <div class="page-heading-section section bg-parallax" data-bg-image="assets/images/slider/slider-2.jpg" data-overlay="50">
        <div class="container">
            <div class="page-heading-content text-center">
                <h3 class="title">İletişim</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('company')}}">Anasayfa</a></li>
                    <li class="breadcrumb-item active">İletişim</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- Page Heading Section End -->

    <!-- Contact Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row mb-n5">

                <div class="col-lg-5 col-12 mb-5">
                    <div class="contact-information">
                        <h5 class="title mb-4">Contact Information</h5>
                        @foreach($set as $key)
                        <div class="contact-social">
                            <a href="{{$key->facebook}}"><i class="fa fa-facebook"></i></a>
                            <a href="{{$key->twitter}}"><i class="fa fa-twitter"></i></a>
                            <a href="{{$key->youtube}}"><i class="fa fa-youtube"></i></a>
                            <a href="{{$key->instagram}}"><i class="fa fa-instagram"></i></a>
                            <a href="{{$key->siteUrl}}"><i class="fa fa-search-plus"></i></a>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-7 col-12 mb-5">
                    <div class="contact-form">
                        <h5 class="title mb-4">Get in Touch</h5>
                        <form id="contact-form" action="{{route('contactpost')}}" method="post">
                            @csrf
                            <div class="row mb-n3">
                                <div class="col-md-6 col-12 mb-3"><input type="text" name="name_surname" value="{{old('name_surname')}}" placeholder="Name and surname"></div>
                                <div class="col-md-6 col-12 mb-3"><input type="email" name="email" value="{{old('email')}}" placeholder="Email Address"></div>
                                <div class="col-12 mb-3"><textarea name="message" value="{{old('message')}}" placeholder="Your Message" rows="4"></textarea></div>
                                <div align="center"><div class="col-12 mb-3"><input class="btn btn-outline-dark px-5" type="submit" value="Send Message"></div></div>
                            </div>
                        </form>
                        <div class="form-messege"></div>
                    </div>
                </div>
                <!-- Contact Form End -->

            </div>
        </div>
    </div>
    <!-- Contact Section End -->

    <!-- Footer Top Section Start -->
    <div class="footer-top-section section">
        <div class="container">
            <div class="footer-widget-wrap row">

                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footer-widget">
                        <div class="footer-widget-about">
                            <img src="assets/images/logo/logo-light.png" alt="">
                            <p>Lorem ipsum dolor sit amet consecte tur adipisicing elit. Maiores officiis quod quo id inventore quis.</p>

                            <ul class="footer-socail">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
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
                    <p class="footer-copyright text-center">Copyright &copy; 2019 <a href="https://hasthemes.com/">Hasthemes</a> All Rights Reserved.</p>
                </div>
                <!-- Footer Copyright End -->

            </div>
        </div>
    </div>
    <!-- Footer Bottom Section End -->
@endsection
