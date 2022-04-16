@extends('layouts.master')
@section('content')

    <div id="offcanvas" class="offcanvas-section">
        <button class="offcanvas-close" data-target="#offcanvas">&times;</button>
        <div class="offcanvas-wrap">
            <div class="inner">

                <!-- Offcanvas user Start -->
                <div class="offcanvas-user">
                    <a href="#" data-toggle="modal" data-target="#loginSignupModal" data-target-sub="#login">Login</a>
                    <span>or</span>
                    <a href="#" data-toggle="modal" data-target="#loginSignupModal" data-target-sub="#signup">Sign up</a>
                </div>
                <!-- Offcanvas user End -->

                <!-- Offcanvas Menu Start -->
                <div class="offcanvas-menu">
                    <nav>
                        <ul>
                            <li class="has-children"><a href="index.html">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home One</a></li>
                                    <li><a href="index-2.html">Home Two</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="job-list.html">Jobs</a>
                                <ul class="sub-menu">
                                    <li><a href="job-list.html">Job List</a></li>
                                    <li><a href="job-single.html">Job Single</a></li>
                                </ul>
                            </li>
                            <li><a href="company-list.html">Company</a>
                                <ul class="sub-menu">
                                    <li><a href="company-list.html">Company List</a></li>
                                    <li><a href="company-single.html">Company Single</a></li>
                                    <li><a href="create-job.html">Create Job</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="faq.html">FAQ'S</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Offcanvas Menu End -->

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
                            <form>
                                <div class="row mb-n3">
                                    <div class="col-12 mb-3"><input type="email" placeholder="Email"></div>
                                    <div class="col-12 mb-3"><input type="password" placeholder="Password"></div>
                                    <div class="col-12 mb-3">
                                        <div class="row justify-content-between mb-n2">
                                            <div class="col-auto mb-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="remember-me" id="remember-me" value="checkedValue" class="custom-control-input">
                                                    <label class="custom-control-label" for="remember-me">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="col-auto mb-2"><a href="#">Forgot Password?</a></div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3"><input class="btn btn-primary w-100" type="submit" value="Login"></div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col text-center">
                                        <p class="text-muted">Or Login With</p>
                                        <div class="login-reg-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="signup">
                            <form>
                                <div class="row mb-n3">
                                    <div class="col-12 mb-3"><input type="text" placeholder="Your Name"></div>
                                    <div class="col-12 mb-3"><input type="email" placeholder="Your Email Address"></div>
                                    <div class="col-12 mb-3"><input type="password" placeholder="Choose a Password"></div>
                                    <div class="col-12 mb-3"><input class="btn btn-primary w-100" type="submit" value="Sign Up"></div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col text-center">
                                        <p class="text-muted">Or Register With</p>
                                        <div class="login-reg-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slider Section Start -->
    <div class="slider-section section">
        <div class="slide-item-2 bg-parallax" data-bg-image="assets/images/slider/slider-2.jpg" data-overlay="50">
            <div class="container">
                <div class="slider-content-2 text-left">
                    <p>Kendi İşini Bulmaya Ne Dersin?</p>
                </div>

                <!-- Job Search Form Start -->
                <div class="job-search-form-2">
                    <form action="#">
                        <div class="row no-gutters mb-n2 mb-sm-n0">

                            <div class="col-lg-auto col-sm-6 col-12 flex-grow-1 mb-2 mb-sm-0">
                                <input type="text" placeholder="iş aratınız..">
                            </div>

                            <div class="col-lg-auto col-sm-6 col-12 flex-grow-1 mb-2 mb-sm-0">
                                <button class="btn btn-primary">Search</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-padding">
        <div class="container">
            <div class="section-title">
                <h2 class="title">Yayında Olanlar</h2>
                <p>İş ilanlarına tıklayarak kolayca işini elde edebilirsin..</p>
            </div>
            @foreach($advert as $key)
                @if($key->isonline==1)
            <div class="job-list-wrap">
                <a href="{{route('details',['id'=>$key->advert_id])}}" class="job-list">
                    @if($key->file)
                        <span class="company-logo"><img src="/public/images/{{$key->file}}" width="50" height="50" alt="company-1"></span>
                    @endif
                    <div class="salary-type col-auto order-sm-3">
                        <span class="salary-range">{{$key->price}}</span>
                        @if($key->operationTime=="Full-Time")
                        <span class="badge badge-success">{{$key->operationTime}}</span>
                        @endif
                        @if($key->operationTime=="Part-Time")
                            <span class="badge badge-warning">{{$key->operationTime}}</span>
                        @endif
                    </div>
                    <div class="content col">
                        <h6 class="title">{{$key->companyContent}}</h6>
                        <ul class="meta">
                            <li><strong class="text-primary">{{$key->companyName}}</strong></li>
                            <li><i class="fa fa-map-marker"></i>Adres İçerikte</li>
                        </ul>
                    </div>
                </a>
            </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
