@extends('frontend.layout.frontend')
@section('ribbon')

    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">Home</a><span>|</span>
                </li>
                <li>Best-Deal</li>
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

                        <h3>Best <span>Deal</span> For You.</h3>
                        <div class="more">

                            <a href="{{ route('products') }}" class="button--saqui button--round-l button--text-thick"
                               data-text="Shop now">Shop now</a>

                        </div>
                    </div>


                @endforeach

            </ul>
        </div>
        <div class="w3l_banner_nav_right_banner3_btm">
            @foreach($data['cat'] as $cat)
            <div class="col-md-4 w3l_banner_nav_right_banner3_btml" >
                <div class="view view-tenth">
                    <img src="{{asset('uploads/images/category/'.$cat->image)}}" alt=" " style="height: 250px; width: 350px" class="img-responsive">
{{--                    {{asset('uploads/images/featureimage/'.$project->feature_image)}}--}}
                    <div class="mask">
                        <h4>Grocery Store</h4>

                    </div>
                </div>
                <h4>{{$cat->name}}</h4>
                <ol>
                    {!!  $cat->desc!!}
                </ol>
            </div>
            @endforeach
            <div class="clearfix"> </div>
        </div>
        <div class="w3ls_w3l_banner_nav_right_grid">
            <h3>Popular Brands</h3>
            @foreach($data['cat'] as $cate)
            <div class="w3ls_w3l_banner_nav_right_grid1">
                <h6>{{$cate->name}}</h6>
                @foreach($data['product'] as $pro)
                    @if($cate->id == $pro->category_id )

                <div class="col-md-3 w3ls_w3l_banner_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
{{--                            <div class="agile_top_brand_left_grid_pos">--}}
{{--                                <img src="images/offer.png" alt=" " class="img-responsive">--}}
{{--                            </div>--}}
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="{{route('single',$pro->slug)}}"><img src="{{asset('uploads/images/featureimage/'.$pro->feature_image)}}" style="height: 200px; width: 150px;" alt=" " class="img-responsive"></a>
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

                                                    <input  type="number" name="quantity" value="1" min="1"
                                                            style="width: 40px; margin: 10px;">

                                                    <button class="button" >Add To Cart</button>

                                            </form>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                    @endif
                @endforeach
                <div class="clearfix"> </div>
            </div>
            @endforeach

        </div>
    </div>
@endsection
@section('contents')
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
