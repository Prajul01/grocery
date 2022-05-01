@extends('backend.layout.backend')

@section('content')
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text"><a href="{{route('user.index')}}">Users</a></span>
                    <span class="info-box-number">{{$data['user']-$data['admin']}}</span>
                </div>

            </div>

        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text"><a href="{{route('suscribers.index')}}">Suscribers</a></span>
                    <span class="info-box-number">{{$data['suscribers']}}</span>
                </div>

            </div>

        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text"><a href="{{route('user.index')}}">Admin</a></span>
                    <span class="info-box-number">{{$data['admin']}}</span>
                </div>

            </div>

        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text"><a href="{{route('product.index')}}">Product</a></span>
                    <span class="info-box-number">{{$data['pro']}}</span>
                </div>

            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text"><a href="{{route('subcategory.index')}}">Sub-category</a></span>
                    <span class="info-box-number">{{$data['sub']}}</span>
                </div>

            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
                    <div class="info-box-content">
                        <a href="{{route('category.index')}}">Category</a>
                        <span class="info-box-number">{{$data['cat']}}</span>
                    </div>

                </div>

            </div>
    </div>
@endsection
