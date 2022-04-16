@extends('layouts.master')
@section('title', 'Ana Sayfa')
@section('content')
    <!-- Slider Section Start -->
    <div class="slider-section section">
        <div class="slide-item-2 bg-parallax" data-bg-image="/assets/images/slider/slider-2.jpg" data-overlay="10">
            <div class="container">
                <div class="job-search-form-2">
                    <form action="#">
                        <div class="row no-gutters mb-n2 mb-sm-n0">
                            <div class="col-lg-auto col-sm-6 col-12 flex-grow-1 mb-2 mb-sm-0">
                                <input type="text" placeholder="Kendi İşini Bulmaya Ne Dersin?">
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
                <h2 class="title">Son İş İlanları</h2>
            </div>
            @foreach($data as $key)
            <div class="job-list-wrap">
                <a href="{{route('details',['id' => $key->id])}}" class="job-list">
                    <div class="company-logo col-auto">
                        <img src="assets/images/companies/company-1.png" alt="Company Logo">
                    </div>
                    <div class="salary-type col-auto order-sm-3">
                        <span class="salary-range">{{$key->price}}</span>
                        @if($key->operationTime=='Part-Time')
                            <span class="badge badge-success">{{$key->operationTime}}</span>
                        @endif
                        @if($key->operationTime=='Full-Time')
                            <span class="badge badge-warning">{{$key->operationTime}}</span>
                        @endif
                    </div>
                    <div class="content col">
                        <h6 class="title">{{$key->companyContent}}</h6>
                        <ul class="meta">
                            <li><strong class="text-primary">{{$key->companyName}}</strong></li>
                            <li><i class="fa fa-map-marker"></i>{{$key->companyLocation}}</li>
                        </ul>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection
