@extends('admins.app')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Advert Table</h4>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>
                                            İmage
                                        </th>
                                        <th>
                                           Name Surname
                                        </th>
                                        <th>
                                            Active
                                        </th>
                                        <th>
                                            Role
                                        </th>
                                        <th>
                                            Phone
                                        </th>
                                        <th>
                                            Process
                                        </th>
                                    </tr>
                                    </thead>
                                    @foreach($advert as $key)
                                    <tbody>
                                    <tr>
                                        <td class="py-1">
                                            <img src="/public/images/{{$key->file}}" alt="image"/>
                                        </td>
                                        <td>
                                            {{$key->companyName}}
                                        </td>
                                        <td>
                                            @if($key->isonline==1)
                                            <label class="badge badge-success">Aktif</label>
                                            @endif
                                            @if($key->isonline==0)
                                            <label class="badge badge-danger">Pasif</label>
                                            @endif
                                        </td>
                                        <td>
                                            {{$key->companyRole}}
                                        </td>
                                        <td>
                                            {{$key->companyPhone}}
                                        </td>
                                        <td>
                                            <a href="{{route('create',['id'=>$key->advert_id])}}"><button type="submit" class="btn btn-warning">Edit</button></a>
                                            <a href="{{route('remove',['id'=>$key->advert_id])}}"><button type="submit" class="btn btn-danger">Delete</button></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
