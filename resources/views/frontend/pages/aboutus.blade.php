@extends('frontend.layout.frontend')
@section('ribbon')

    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">Home</a><span>|</span>
                </li>
                <li>About-Us</li>
            </ul>
        </div>
    </div>

@endsection
@section('slider')
    <div class="w3l_banner_nav_right">
        <!-- about -->
        @foreach($data['aboutus'] as $about)
        <div class="privacy about">
            <h3>About Us</h3>
            <p class="animi">
                {!!  $about->shortdesc  !!}
            </p>
            <div class="agile_about_grids">
                <div class="col-md-6 agile_about_grid_right">
                    <img src="{{asset('uploads/images/aboutus/'.$about->image)}}" alt=" " class="img-responsive">
                </div>
                <div class="col-md-6 agile_about_grid_left">
                    <ol>
                        {!!  $about->desc  !!}
                    </ol>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    @endforeach
        <!-- //about -->
    </div>

@endsection
@section('contents')
    <div class="team">
        <div class="container">
            <h3>Meet Our Amazing Team</h3>
            <div class="agileits_team_grids">
                @foreach($data['team'] as $team)
                <div class="col-md-3 agileits_team_grid">
                    <img src="{{asset('uploads/images/team/'.$team->image)}}" alt=" " class="img-responsive">
                    <h4>{{$team->name}}</h4>
                    <p>{{$team->post}}</p>
                    <ul class="agileits_social_icons agileits_social_icons_team">
                        <li><a href="{{$team->fb}}" target="_blank" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="{{$team->twitter}}" target="_blank" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="{{$team->gmail}}" target="_blank" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- testimonials -->
    <div class="testimonials">
        <div class="container">
            <h3>Testimonials</h3>
            <div class="w3_testimonials_grids">

                <div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">

                    <div class="wmuSliderWrapper">
                        @foreach($data['testi'] as $test)
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">

                                <div class="col-md-12 w3_testimonials_grid">
                                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>
                                        {!!$test->message!!}
                                    </p>
                                    <h4>{{$test->name}}<span>{{$test->stakeholders}}</span></h4>
                                </div>

                                <div class="clearfix"> </div>

                            </div>
                        </article>

                        @endforeach

                    </div>

{{--                    @endforeach--}}
                </div>

                <script src="{{asset('frontend/js/jquery.wmuSlider.js')}}"></script>
                <script>
                    $('.example1').wmuSlider();
                </script>
            </div>

        </div>
    </div>
    <!-- //testimonials -->
@endsection
