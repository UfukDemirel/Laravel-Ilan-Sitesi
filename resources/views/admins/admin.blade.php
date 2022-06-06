<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/resources/vendors/feather/feather.css">
    <link rel="stylesheet" href="/resources/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/resources/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/resources/css/vertical-layout-light/style.css">
    <link rel="shortcut icon" href="/assets/images/logo/rutin-logo.png"/>
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div align="center">
                            <div class="brand-logo">
                            <img src="/assets/images/logo/rutin-logo.png" height="120">
                            </div>
                        <h4>Hello! let's get started</h4>
                        <h6 class="font-weight-light">Sign in to continue.</h6>
                        </div>
                        <form class="pt-3" action="{{route('adminpost')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" name="email" value="{{old('email')}}" placeholder="E-Mail">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" name="password" value="{{old('password')}}" placeholder="Password">
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-block btn-dark btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/resources/vendors/js/vendor.bundle.base.js"></script>

<script src="/resources/js/off-canvas.js"></script>
<script src="/resources/js/hoverable-collapse.js"></script>
<script src="/resources/js/template.js"></script>
<script src="/resources/js/settings.js"></script>
<script src="/resources/js/todolist.js"></script>
@include('sweetalert::alert')
</body>
</html>
