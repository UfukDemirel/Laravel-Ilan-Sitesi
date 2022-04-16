@extends('layouts.master')
@section('content')
<div class="page-heading-section section bg-parallax" data-bg-image="/assets/images/slider/slider-2.jpg" data-overlay="50">
    <div class="container">
        <div class="page-heading-content text-center">
            <h3 class="title">Şirketler</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('company')}}">Home</a></li>
                <li class="breadcrumb-item active">İçerik</li>
            </ol>
        </div>
    </div>
</div>

<div class="section section-padding">
    <div class="container">
        <div class="row mb-n5">

            <div class="col-lg-8 col-12 mb-5 pr-lg-5">

                <div class="company-list-wrap row">
                    @foreach($company as $key)
                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                        <a href="{{route('comdetails',['id'=>$key->id])}}" class="company-list">
                            <span class="company-logo"><img src="/public/images/{{$key->file}}" alt="company-1"></span>
                            <h6 class="title">{{$key->companyName}}</h6>
                            <span class="location"><i class="fa fa-map-o"></i>{{$key->county}} {{$key->city}}</span>
                        </a>
                    </div>
                    @endforeach
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
