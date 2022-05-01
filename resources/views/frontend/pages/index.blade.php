@extends('frontend.layout.frontend')
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
    <div class="banner_bottom">
        <div class="wthree_banner_bottom_left_grid_sub">
        </div>
        <div class="wthree_banner_bottom_left_grid_sub1">
            @foreach($data['offer'] as $prooff)
                <div class="col-md-4 wthree_banner_bottom_left">

                    <div class="wthree_banner_bottom_left_grid">
                        <img src="{{asset('uploads/images/offers/'.$prooff->image)}}" class="img-responsive"
                             style="height: 100%; width:100%">
                        <div class="wthree_banner_bottom_left_grid_pos">
                            <h4>{!! $prooff->desc_long !!}<span>{!!$prooff->desc_short!!}</span></h4>
                        </div>
                    </div>

                </div>

            @endforeach
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- top-brands -->
    <div class="top-brands">
        <div class="container">
            <h3>Hot Offers</h3>

            <div class="agile_top_brands_grids">
                @foreach($data['product'] as $product)
                    <div class="col-md-3 top_brand_left" style="margin-bottom: 10px;">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="tag"><img src="{{asset('frontend/images/offer.png')}}" alt=" "
                                                      class="img-responsive"/>
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="{{route('single',$product->slug)}}">
                                                    <img title=" " alt=" "
                                                         src="{{asset('uploads/images/featureimage/'.$product->feature_image)}} "
                                                         style="height: 200px; width: 150px; object-fit: cover; object-position: 100% 100%;"/></a>

                                                <p>{{$product->name}}</p>
                                                <h4>Rs {{$product->discountedprice}}<span>Rs {{$product->price}}</span>
                                                </h4>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details">


                                                <form action="{{ route('cart.store',$product->id)}}" method="POST"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    @if(auth()->user() != NULL)
                                                        <input type="hidden" value="{{auth()->user()->id}}"
                                                               name="user_id">
                                                    @endif
                                                    <input type="hidden" value="{{$product->id}}" name="p_id">

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

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //top-brands -->

    <div class="fresh-vegetables">
        <div class="container">
            <h3>Top Products</h3>
            <div class="w3l_fresh_vegetables_grids">
                <div class="col-md-3 w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_left">
                    <div class="w3l_fresh_vegetables_grid2">
                        <ul class="nav navbar-nav nav_1">
                            @foreach($data['category']  as $categories)
                                <li class="dropdown mega-dropdown active">

                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $categories->name }}
                                    </a>
                                    <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                        <div class="w3ls_vegetables">
                                            <ul>
                                                @foreach($data['subcategory']  as $sub)
                                                    @if($categories->id == $sub->category_id )
                                                        <li><a href="" id="sub_category_id">{{$sub->name}}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <div class="col-md-9 w3l_fresh_vegetables_grid_right">
                    @foreach($data['top'] as $top)
                        <div class="col-md-4 w3l_fresh_vegetables_grid">
                            <div class="w3l_fresh_vegetables_grid1">
                                <img src="{{asset('uploads/images/subcategory/'.$top->image)}} "
                                     style="height: 200px; width: 150px; object-fit: cover; object-position: 100% 100%;"
                                     alt=" "
                                     class="img-responsive"/>
                            </div>
                        </div>
                    @endforeach
                    <div class="clearfix"></div>
                    <div class="agileinfo_move_text">
                        <div class="agileinfo_marquee">
                            <h4>get <span class="blink_me">25% off</span> on first order and also get gift voucher</h4>
                        </div>
                        <div class="agileinfo_breaking_news">
                            <span> </span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection
@section('csss')
    <style>
        .button {
            background-color: red;


        }

        button:hover {
            background-color: forestgreen;
        }


    </style>



@endsection

