@extends('frontend.layout.frontend')
@section('ribbon')

    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">Home</a><span>|</span>
                </li>
                <li>Products</li>
            </ul>
        </div>
    </div>

@endsection
@section('slider')
    <div class="w3l_banner_nav_right">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    @foreach($data['cat'] as $cat)
                        <li>
                            <div class="w3l_banner_nav_right_banner"
                                 style="background-image: url('{{asset('uploads/images/category/' .$cat->image)}}')">

                                <h3>Make your <span>food</span> with Spicy.</h3>
                                <div class="more">

                                    <a href="products.html" class="button--saqui button--round-l button--text-thick"
                                       data-text="Shop now">Shop now</a>

                                </div>
                            </div>

                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
        <!-- flexSlider -->
        <link rel="stylesheet" href="{{asset('frontend/css/flexslider.css')}}" type="text/css" media="screen"
              property=""/>
        <script defer src="{{asset('frontend/js/jquery.flexslider.js')}}"></script>
        <script type="text/javascript">
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <!-- //flexSlider -->
    </div>

@endsection

@section('contents')
    <div class="w3l_banner_nav_right">
        <div class="col  card-info">
{{--            @if(isset($data['searched_items'])!= Null)--}}

                @foreach($data['searched_items'] as $project)
                    <div class="col-md-3 w3ls_w3l_banner_left" style="margin-bottom: 10px;">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
{{--                                <div class="agile_top_brand_left_grid_pos">--}}
{{--                                    <img src="{{asset('frontend/images/offer.png')}}" alt=" " class="img-responsive"/>--}}
{{--                                </div>--}}
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="{{route('single',$project->slug)}}">

                                                    <img
                                                        src="{{asset('uploads/images/featureimage/'.$project->feature_image)}}"
                                                        alt=" " class="img-responsive"
                                                        style="height: 200px; width: 200px; object-fit: cover; object-position: 100% 100%;"/></a>
                                                <p>{{$project->name}}</p>
                                                <h4>{{$project->discountedprice}}<span>{{$project->price}}</span></h4>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details">


                                                <form action="{{ route('cart.store',$project->id)}}" method="POST"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    @if(auth()->user() != NULL)
                                                        <input type="hidden" value="{{auth()->user()->id}}"
                                                               name="user_id">
                                                    @endif
                                                    <input type="hidden" value="{{$project->id}}" name="p_id">

                                                    <input  type="number" name="quantity" value="1" min="1" style="width: 40px; margin: 10px;">

                                                    <button class="button" >Add To Cart</button>


                                                </form>

                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
{{--            @endif--}}
        </div>
    </div>

    <div class="clearfix"></div>
    </div>





    <div class="w3l_banner_nav_right">
        <div class="col  card-info">
<h3>Products</h3>
            @foreach($data['product'] as $pro)
                    <div class="col-md-3 w3ls_w3l_banner_left" style="margin-bottom: 10px;">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
{{--                                <div class="agile_top_brand_left_grid_pos">--}}
{{--                                    <img src="{{asset('frontend/images/offer.png')}}" alt=" " class="img-responsive"/>--}}
{{--                                </div>--}}
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="{{route('single',$pro->slug)}}">                      <img
                                                        src="{{asset('uploads/images/featureimage/'.$pro->feature_image)}}"
                                                        alt=" " class="img-responsive"
                                                        style="height: 200px; width: 200px; object-fit: cover; object-position: 100% 100%;"/></a>
                                                <p>{{$pro->name}}</p>
                                                <h4>{{$pro->discountedprice}}<span>{{$pro->price}}</span></h4>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details">

                                                <form action="{{ route('cart.store',$pro->id)}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @if(auth()->user() != NULL)
                                                        <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                                                    @endif
                                                    <input type="hidden" value="{{$pro->id}}" name="p_id">
                                                    <input  type="number" name="quantity" value="1" min="1" style="width: 40px; margin: 10px;">

                                                    <button class="button" >Add To Cart</button>
                                                </form>

                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

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

