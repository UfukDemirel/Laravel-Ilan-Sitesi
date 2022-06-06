@extends('admins.app')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card tale-bg">
                        <div class="card-people mt-auto">
                            <img src="/resources/images/dashboard/people.svg" alt="people">
                            <div class="weather-info">
                                <div class="d-flex">
                                    <div class="ml-2">
                                        <div class="container">
                                            <span id="hours">00</span>
                                            <span>:</span>
                                            <span id="minutes">00</span>
                                            <span>:</span>
                                            <span id="seconds">00</span>
                                            <span id="session">AM</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
@endsection
