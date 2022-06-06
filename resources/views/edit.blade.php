@extends('layouts.master')
@section('title', 'Ana Sayfa')
@section('content')
    <div class="slider-section section">
        <div class="page-heading-section section bg-parallax" data-bg-image="/assets/images/slider/slider-2.jpg" data-overlay="10">
            <div class="page-heading-content text-center">
                <h3 class="title">Şirketi Düzenle</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('company')}}">Anasayfa</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('edit')}}">Şirketi Düzenle</a></li>
                </ol>
            </div>
        </div>
    </div>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="row no-gutters">
                        <div class="col-md-5"></div><div align="center">
                            <div class="contact-wrap w-100 p-md-8 p-5">
                                <section class="ftco-section">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-xl-10 ftco-animate">
                                                <br>
                                                <form action="{{route('editpost')}}" method="post" class="billing-form">
                                                    @csrf
                                                    <div class="row align-items-end">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="lastname">ŞİRKET İSMİ</label>
                                                                <input type="text" class="form-control" name="companyName" required value="{{$com->companyName}}" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="lastname">ŞİRKET ROLÜ</label>
                                                                <input type="text" class="form-control" name="companyRole" required value="{{$com->companyRole}}" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="w-100"></div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="country">ŞİRKET KATEGORİ</label>
                                                                <div class="select-wrap">
                                                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                                    <select name="category" value="{{$com->category}}" required class="form-control">
                                                                        <option></option>
                                                                        <option value="1">Restoran</option>
                                                                        <option value="2">Kafe</option>
                                                                        <option value="3">Lokanta</option>
                                                                        <option value="4">Pastane</option>
                                                                        <option value="5">Fırın</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="lastname">ŞİRKET ADRES</label>
                                                                <input type="text" class="form-control" name="companyLocation" required value="{{$com->companyLocation}}" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="lastname">ŞİRKET TELEFON</label>
                                                                <input type="text" class="form-control" name="companyPhone" required value="{{$com->companyPhone}}" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="lastname">ŞİRKET ÇALIŞAN SAYISI</label>
                                                                <input type="text" class="form-control" name="companyTeamSize" required value="{{$com->companyTeamSize}}" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="lastname">ŞİRKET WEB SİTESİ</label>
                                                                <input type="text" class="form-control" name="companyWebSite" required value="{{$com->companyWebSite}}" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="lastname">KURULUŞ TARİHİ</label>
                                                                <input type="text" class="form-control" name="companyFounded" required value="{{$com->companyFounded}}" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="lastname">ŞİRKET HAKKINDA</label>
                                                                <input type="text" class="form-control" name="companyAbout" required value="{{$com->companyAbout}}" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-dark">KAYDET</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
