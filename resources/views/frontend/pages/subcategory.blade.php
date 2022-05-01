@extends('frontend.layout.frontend')
@section('ribbon')

    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">Home</a><span>|</span>
                </li>
                <li>Product-Page</li>
            </ul>
        </div>
    </div>

@endsection
@section('slider')

    <div class="w3l_banner_nav_right">
        <div class="flexslider">
            <ul class="slides">
                @foreach($data['cat'] as $cat)
                        <div class="w3l_banner_nav_right_banner"
                             style="background-image: url('{{asset('uploads/images/category/' .$cat->image)}}')">

                            <h3>Make your <span>food</span> with Spicy.</h3>
                            <div class="more">

                                <a href="{{ route('products') }}" class="button--saqui button--round-l button--text-thick"
                                   data-text="Shop now">Shop now</a>

                            </div>
                        </div>


                @endforeach

            </ul>
        </div>


    </div>
@endsection
@section('contents')

    <div class="w3l_banner_nav_right">

{{--        <div class="w3l_banner_nav_right_banner3_btm">--}}
{{--            @foreach($data['sub'] as $sub)--}}

{{--                <div class="col-md-4 w3l_banner_nav_right_banner3_btml">--}}
{{--                    <div class="view view-tenth">--}}
{{--                        <img src="{{asset('uploads/images/featureimage/'.$sub->feature_image)}}" alt=" " class="img-responsive" />--}}
{{--                        <div class="mask">--}}
{{--                            <h4>Grocery Store</h4>--}}
{{--                            <p>{!! $sub->name !!}</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <h4>{{$sub->name}}</h4>--}}
{{--                    <ol>--}}
{{--                       {!! $sub->desc !!}--}}
{{--                    </ol>--}}
{{--                </div>--}}

{{--                            @endforeach--}}
{{--            <div class="clearfix"> </div>--}}
{{--        </div>--}}

        <div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_veg">
            <h3 class="w3l_fruit">{{$data['tops']->name}}</h3>


            <div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg">
                @foreach( $data['product'] as $pro)
                <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asdfdfd">

                    <div class="hover14 column">

                        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">


{{--                            <div class="tag"><img src="{{asset('uploads/images/product/'.$pro->Product->product_id)}}" alt=" " class="img-responsive"></div>--}}

                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="{{route('single',$pro->slug)}}"><img src="{{asset('uploads/images/featureimage/'.$pro->feature_image)}}" style="height: 150px; width: 150px;" alt=" " class="img-responsive" /></a>
                                            <p>{{$pro->name}}</p>
                                            <h4>{{$pro->discountedprice}}<span>{{$pro->price}}</span></h4>
                                        </div>
                                        <div class="snipcart-details">
                                            <form action="{{ route('cart.store',$pro->id)}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @if(auth()->user() != NULL)
                                                    <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                                                @endif
                                                <input type="hidden" value="{{$pro->id}}" name="p_id">
                                                <div style="float:right;">
                                                    <input  type="hidden" name="quantity"   value="1" >

                                                    <button class="button" style="float:right;" >Add To Cart</button>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>

                    </div>

                </div>

                @endforeach

                <div class="clearfix"> </div>
            </div>

        </div>

    </div>

    <div class="clearfix"></div>
    </div>

@endsection
@section('csss')
    <style>
        .button{
            background-color: red;



        }
        button:hover {
            background-color: forestgreen;
        }



    </style>
@endsection
