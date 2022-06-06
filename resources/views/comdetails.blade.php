@extends('layouts.master')
@section('content')
<div class="page-heading-section section bg-parallax" data-bg-image="/assets/images/slider/slider-2.jpg" data-overlay="50">
    <div class="container">
        <div class="page-heading-content text-center">
            @foreach($company as $key)
            <h3 class="title">{{$key->companyName}}</h3>
            @endforeach
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('company')}}">Anasayfa</a></li>
                <li class="breadcrumb-item"><a href="{{route('companylist')}}">Companies</a></li>
            </ol>
        </div>
    </div>
</div>

<div class="section section-padding">
    <div class="container">
        <div class="row mb-n5">

            <div class="col-lg-8 col-12 mb-5 pr-lg-5">

                @foreach($company as $key)
                <div class="company-details">
                    <h5 class="mb-3">{{$key->companyName}}</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam necessitatibus doloribus soluta ut? Laudantium unde, hic itaque voluptatem nemo ut error fugiat debitis praesentium? Expedita placeat vero quia dolore reprehenderit nostrum velit. Cupiditate qui sunt excepturi dolore nihil, incidunt doloremque, cum dignissimos ex voluptatibus sed sapiente officia obcaecati mollitia distinctio repellat ab molestiae explicabo sequi.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, nesciunt? Velit placeat animi blanditiis eveniet cum doloribus voluptates illo dolore, in aliquid odio quidem quasi fugit quaerat architecto quas magnam autem quod totam deleniti! Veniam accusamus fugit perferendis ducimus enim expedita exercitationem natus porro ratione.</p>
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
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id eos enim distinctio odit nulla repellat exercitationem, fugiat nihil itaque iste amet sapiente molestias voluptas nemo error expedita? Voluptates vitae animi inventore iusto ullam facere modi corporis possimus culpa nostrum maxime delectus tempore, expedita itaque quaerat? Consequuntur quo nostrum quisquam placeat?</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo culpa facere perspiciatis consequatur iure repellendus molestias dolore dicta inventore unde, asperiores alias consectetur ipsum cum ea exercitationem voluptatem, veniam mollitia numquam sit et cupiditate, aperiam blanditiis iusto. Dicta officia dolores atque, delectus tempora numquam ducimus? Sunt perspiciatis omnis atque non debitis vero similique illum distinctio?</p>
                </div>

                @foreach($advert as $key)
                <div class="job-list-wrap mt-5">
                    <a href="{{route('details',['id'=>$key->advert_id])}}" class="job-list">
                        <div class="company-logo col-auto">
                            <img src="/public/images/{{$key->file}}" alt="Company Logo">
                        </div>
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
                                <li><i class="fa fa-map-marker"></i> Adres İçerikte</li>
                            </ul>
                        </div>
                    </a>
                </div>
                    @endforeach
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
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
