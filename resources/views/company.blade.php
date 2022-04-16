@extends('layouts.master')
@section('title', 'Ana Sayfa')
@section('content')
    <div class="page-heading-section section bg-parallax" data-bg-image="/assets/images/slider/slider-2.jpg" data-overlay="10">
        <div class="container">
            <div class="page-heading-content text-center">
                <h3 class="title">Anasayfa</h3>
            </div>
        </div>
    </div>
    <div class="section section-padding">
        <div class="container">
            <div class="row mb-n5">
                <div class="col-lg-8 col-12 mb-5 pr-lg-5">
                    <div class="job-list-wrap mt-5">
                        @foreach($advert as $key)
                            @if($key->isonline==1)
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
                                    <li><i class="fa fa-map-marker"></i>Adres içerikte</li>
                                </ul>
                            </div>
                        </a>
                            @endif
                    @endforeach
                    </div>
                </div>
                <div class="col-lg-4 col-12 mb-5">
                    <div class="sidebar-wrap">
                        <!-- Sidebar (Company) Start -->
                        <div class="sidebar-widget">
                            <div class="inner">
                                <div class="sidebar-company">
                                    @foreach($pop as $key)
                                        @if($key->file)
                                        <span class="company-logo"><img src="/public/images/{{$key->file}}" width="50" height="50" alt="company-1"></span>
                                        @endif
                                        <h6 class="title">{{$key->companyName}}</h6>
                                    <ul>
                                        <li><strong>Ad Soyad:</strong> {{$key->name}} {{$key->surname}}</li>
                                        <li><strong>Şirket Rolü:</strong> {{$key->companyRole}}</li>
                                        <li><strong>Şirket E-Mail:</strong> {{$key->email}}</li>
                                        <li><strong>Şirket Web Site:</strong>{{$key->companyWebSite}}</li>
                                        <li><strong>Şirket Telefon:</strong> {{$key->companyPhone}}</li>
                                        <li><strong>Kuruluş Tarihi:</strong> {{$key->companyFounded}}</li>
                                    </ul>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
