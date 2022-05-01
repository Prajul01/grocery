@extends('frontend.layout.frontend')
@section('ribbon')

    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">Home</a><span>|</span>
                </li>
                <li>Services</li>
            </ul>
        </div>
    </div>

@endsection
@section('slider')

    <div class="w3l_banner_nav_right">
        <!-- services -->
        <div class="services">
            <h3>Services</h3>
            <div class="w3ls_service_grids">
                <div class="col-md-5 w3ls_service_grid_left">
                    <h4>{!! $data['services']->title !!}</h4>
                    <p>
                        {!! $data['services']->desc !!}
                    </p>
                </div>

                <div class="clearfix"> </div>
            </div>
            <div class="w3ls_service_grids1">
                <div class="col-md-6 w3ls_service_grids1_left">
                    <img src="{{asset('uploads/images/services/'.$data['services']->image)}}" alt=" " style="height: 497px; width: 497px;  margin-bottom:-25px; object-fit: cover;" class="img-responsive">
                </div>
                <div class="col-md-6 w3ls_service_grids1_right">
                   {!! $data['services']->image_text !!}
                    <a href="single.html">Shop Now</a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //services -->
    </div>
@endsection
@section('contents')
    <div class="services-bottom">
        <div class="container">
            <div class="col-md-3 about_counter_left">
                <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
                <p class="counter">{{$data['followers']}}</p>
                <h3>Followers</h3>
            </div>
{{--            <div class="col-md-3 about_counter_left">--}}
{{--                <i class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></i>--}}
{{--                <p class="counter">54,598</p>--}}
{{--                <h3>Savings</h3>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 about_counter_left">--}}
{{--                <i class="glyphicon glyphicon-export" aria-hidden="true"></i>--}}
{{--                <p class="counter">83,983</p>--}}
{{--                <h3>Support</h3>--}}
{{--            </div>--}}
            <div class="col-md-3 about_counter_left">
                <i class="glyphicon glyphicon-bullhorn" aria-hidden="true"></i>
                <p class="counter">{{$data['users']}}</p>
                <h3>Popularity</h3>
            </div>
            <div class="clearfix"> </div>
            <!-- Stats-Number-Scroller-Animation-JavaScript -->
            <script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
            <script src="{{asset('frontend/js/counterup.min.js')}}"></script>
            <script>
                jQuery(document).ready(function( $ ) {
                    $('.counter').counterUp({
                        delay: 10,
                        time: 1000
                    });
                });
            </script>
            <!-- //Stats-Number-Scroller-Animation-JavaScript -->

        </div>
    </div>
    <div class="newsletter-top-serv-btm">
{{--        <div class="container">--}}
{{--            <div class="col-md-4 wthree_news_top_serv_btm_grid">--}}
{{--                <div class="wthree_news_top_serv_btm_grid_icon">--}}
{{--                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>--}}
{{--                </div>--}}
{{--                <h3>Nam libero tempore</h3>--}}
{{--                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus--}}
{{--                    saepe eveniet ut et voluptates repudiandae sint et.</p>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 wthree_news_top_serv_btm_grid">--}}
{{--                <div class="wthree_news_top_serv_btm_grid_icon">--}}
{{--                    <i class="fa fa-bar-chart" aria-hidden="true"></i>--}}
{{--                </div>--}}
{{--                <h3>officiis debitis aut rerum</h3>--}}
{{--                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus--}}
{{--                    saepe eveniet ut et voluptates repudiandae sint et.</p>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 wthree_news_top_serv_btm_grid">--}}
{{--                <div class="wthree_news_top_serv_btm_grid_icon">--}}
{{--                    <i class="fa fa-truck" aria-hidden="true"></i>--}}
{{--                </div>--}}
{{--                <h3>eveniet ut et voluptates</h3>--}}
{{--                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus--}}
{{--                    saepe eveniet ut et voluptates repudiandae sint et.</p>--}}
{{--            </div>--}}
{{--            <div class="clearfix"> </div>--}}
{{--        </div>--}}
    </div>
@endsection
