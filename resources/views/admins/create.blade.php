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
                            @foreach($advert as $key)
                            <form class="forms-sample" action="{{route('createpost',['id'=>$key->advert_id])}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company E-Mail</label>
                                    <input type="email" class="form-control" name="companyEmail" value="{{$key->companyEmail}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company Content</label>
                                    <input type="text" class="form-control" name="companyContent" value="{{$key->companyContent}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company Name</label>
                                    <input type="text" class="form-control" name="companyName" value="{{$key->companyName}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company Role</label>
                                    <input type="text" class="form-control" name="companyRole" value="{{$key->companyRole}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company Location</label>
                                    <input type="text" class="form-control" name="companyLocation" value="{{$key->companyLocation}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company Phone</label>
                                    <input type="text" class="form-control" name="companyPhone" value="{{$key->companyPhone}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Price</label>
                                    <input type="text" class="form-control" name="price" value="{{$key->price}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Company About</label>
                                    <textarea class="form-control" name="companyAbout" rows="3">{{$key->companyAbout}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">İs Online</label>
                                    <select class="form-control" name="isonline">
                                        <option @if($key->isonline==0) {{'selected'}} @endif value="0">0</option>
                                        <option @if($key->isonline==1) {{'selected'}} @endif value="1">1</option>
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
