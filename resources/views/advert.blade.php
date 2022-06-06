@extends('layouts.master')
@section('title', 'İLAN VER')
@section('content')
    <div class="slider-section section">
        <div class="page-heading-section section bg-parallax" data-bg-image="/assets/images/slider/slider-2.jpg" data-overlay="10">
            <div class="page-heading-content text-center">
                <h3 class="title">İlan Ekle</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('company')}}">Anasayfa</a></li>
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
                                                <form action="{{route('advertpost')}}" method="post" class="billing-form">
                                                    @csrf
                                                    <div class="row align-items-end">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="lastname">ŞİRKET POZİSYON</label>
                                                                <input type="text" class="form-control" name="companyContent" value="{{old('companyContent')}}" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="lastname">ŞİRKET İSMİ</label>
                                                                <input type="text" class="form-control" name="companyName" value="{{old('companyName')}}" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="lastname">ŞİRKET E-MAİL</label>
                                                                <input type="text" class="form-control" name="companyEmail" value="{{old('companyEmail')}}" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="lastname">ŞİRKET ROLÜ</label>
                                                                <input type="text" class="form-control" name="companyRole" value="{{old('companyRole')}}" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="lastname">ÇALIŞMA SÜRESİ</label>
                                                                <input type="text" class="form-control" name="operationTime" value="{{old('operationTime')}}" placeholder="(Ör/ Part-Time, Full-Time)">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="lastname">ŞİRKET ADRES</label>
                                                                <input type="text" class="form-control" name="companyLocation" value="{{old('companyLocation')}}" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="lastname">ŞİRKET TELEFON</label>
                                                                <input type="text" class="form-control" name="companyPhone" value="{{old('companyPhone')}}" placeholder="(___) ___ ____">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="lastname">FİYAT</label>
                                                                <input type="text" class="form-control" name="price" value="{{old('price')}}" placeholder="Sonuna 'TL' ekleyiniz.">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="lastname">ŞİRKET WEB SİTESİ</label>
                                                                <input type="text" class="form-control" name="companyWebSite" value="{{old('companyWebSite')}}" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="lastname">İŞ İÇERİĞİ</label>
                                                                <textarea type="text" class="form-control" name="companyAbout" value="{{old('companyAbout')}}"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="users_id" value="{{Auth::id()}}">
                                                    <input type="submit" class="btn btn-dark" value="KAYDET">
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
