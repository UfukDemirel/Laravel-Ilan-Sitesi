@extends('layouts.master')
@section('title', 'Ana Sayfa')
@section('content')
<div class="page-heading-section section bg-parallax" data-bg-image="/assets/images/slider/slider-2.jpg" data-overlay="10">
    <div class="container">
        <div class="page-heading-content text-center">
            <h3 class="title">İlan Detayı</h3>
        </div>
    </div>
</div>
<div class="section section-padding">
    <div class="container">
        <div class="row mb-n5">
            @foreach($data as $key)
            <div class="col-lg-8 col-12 mb-5 pr-lg-5">
                <div class="job-list-details">
                    <div class="job-details-head row mx-0">
                        @if($key->file)
                            <span class="company-logo"><img src="/public/images/{{$key->file}}" width="50" height="50" alt="company-1"></span>
                        @endif
                        <div class="salary-type col-auto order-sm-3">
                            <span class="salary-range">{{$key->price}}</span>
                            @if($key->operationTime=='Full-Time')
                                <span class="badge badge-success">{{$key->operationTime}}</span>
                            @endif
                            @if($key->operationTime=='Part-Time')
                                <span class="badge badge-warning">{{$key->operationTime}}</span>
                            @endif
                        </div>
                        <div class="content col">
                            <h5 class="title">{{$key->companyContent}}</h5>
                            <ul class="meta">
                                <li><strong class="text-primary">{{$key->companyName}}</strong></li>
                                <li><i class="fa fa-map-marker"></i> {{$key->companyLocation}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="job-details-body">
                        <h6 class="mb-3">Job Description</h6>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, ex iusto! Tenetur iusto dolore amet voluptates esse? Ut debitis perferendis, impedit ullam ea officia sapiente soluta cupiditate molestiae eius enim aut laboriosam, saepe deleniti. Excepturi nobis amet fugit ipsa corrupti!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo ratione odit qui inventore maiores labore tenetur earum! Quam eaque, deleniti quibusdam deserunt quos reprehenderit dolor, in quo voluptates maxime nostrum.</p>
                        <h6 class="mb-3 mt-4">Responsibilities</h6>
                        <ul>
                            <li>Proven work experienceas a web designer</li>
                            <li>Demonstrable graphic design skills with a strong portfolio</li>
                            <li>Proficiency in HTML, CSS and JavaScript for rapid prototyping</li>
                            <li>Experience working in an Agile/Scrum development process</li>
                            <li>Proven work experienceas a web designer</li>
                            <li>Excellent visual design skills with sensitivity to user-system interaction</li>
                            <li>Ability to solve problems creatively and effectively</li>
                            <li>Proven work experienceas a web designer</li>
                            <li>Up-to-date with the latest Web trends, techniques and technologies</li>
                            <li>BS/MS in Human-Computer Interaction, Interaction Design or a Visual Arts subject</li>
                        </ul>
                        <h6 class="mb-3 mt-4">Education + Experience</h6>
                        <ul>
                            <li>Advanced degree or equivalent experience in graphic and web design</li>
                            <li>3 or more years of professional design experience</li>
                            <li>Direct response email experience</li>
                            <li>Ecommerce website design experience</li>
                            <li>Familiarity with mobile and web apps preferred</li>
                            <li>Excellent communication skills, most notably a demonstrated ability to solicit and address creative and design feedback</li>
                            <li>Must be able to work under pressure and meet deadlines while maintaining a positive attitude and providing exemplary customer service</li>
                            <li>Ability to work independently and to carry out assignments to completion within parameters of instructions given, prescribed routines, and standard accepted practices</li>
                        </ul>
                        <h6 class="mb-3 mt-4">Benefits</h6>
                        <ul>
                            <li>Medical insurance</li>
                            <li>Dental insurance</li>
                            <li>Vision insurance</li>
                            <li>Supplemental benefits (Short Term Disability, Cancer & Accident).</li>
                            <li>Employer-sponsored Basic Life & AD&D Insurance</li>
                            <li>Employer-sponsored Long Term Disability</li>
                            <li>Employer-sponsored Value Adds – Fresh Beanies</li>
                            <li>401(k)with matching</li>
                        </ul>
                        <a href="{{route('delete',['id'=>$key->advert_id])}}"><button type="submit" class="btn btn-danger">İptal Et</button></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 mb-5">
                <div class="sidebar-wrap">
                    <div class="sidebar-widget">
                        <div class="inner">
                            <h6 class="title">İşe Genel Bakış</h6>
                            <ul class="job-overview list-unstyled">
                                <li><strong>Şirket E-Mail:</strong> {{$key->companyEmail}}</li>
                                <li><strong>Şirket Web Site:</strong> {{$key->companyWebSite}}</li>
                                <li><strong>Şirket İsmi:</strong> {{$key->companyName}}</li>
                                <li><strong>Şirket Telefon:</strong> {{$key->companyPhone}}</li>
                                <li><strong>İş Zamanı:</strong> {{$key->operationTime}}</li>
                                <li><strong>Fiyat:</strong> {{$key->price}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
