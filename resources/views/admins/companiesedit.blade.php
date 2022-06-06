@extends('admins.app')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-3"></div>
                    <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Advert Form</h4>
                            @foreach($post as $key)
                            <form class="forms-sample" action="{{route('companieseditpost',['id'=>$key->id])}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$key->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Surname</label>
                                    <input type="text" class="form-control" name="surname" value="{{$key->surname}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company E-Mail</label>
                                    <input type="email" class="form-control" name="email" value="{{$key->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company Role</label>
                                    <input type="text" class="form-control" name="companyRole" value="{{$key->companyRole}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company Name</label>
                                    <input type="text" class="form-control" name="companyName" value="{{$key->companyName}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company Phone</label>
                                    <input type="text" class="form-control" name="companyPhone" value="{{$key->companyPhone}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company Web Site</label>
                                    <input type="text" class="form-control" name="companyWebSite" value="{{$key->companyWebSite}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company County</label>
                                    <input type="text" class="form-control" name="county" value="{{$key->county}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Company City</label>
                                    <input type="text" class="form-control" name="city" value="{{$key->city}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">İs Online</label>
                                    <select class="form-control" name="active">
                                        <option @if($key->active==0) {{'selected'}} @endif value="0">0</option>
                                        <option @if($key->active==1) {{'selected'}} @endif value="1">1</option>
                                    </select>
                                </div>
                                <div align="right"><button type="submit" class="btn btn-dark mr-2">Edit</button></div>
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
