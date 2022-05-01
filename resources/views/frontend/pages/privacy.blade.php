@extends('frontend.layout.frontend')
@section('ribbon')

    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">Home</a><span>|</span>
                </li>
                <li>Privacy</li>
            </ul>
        </div>
    </div>

@endsection
@section('slider')
    <div class="banner">
        <div class="w3l_banner_nav_right">
            <!-- privacy -->
            <div class="privacy">

                <div class="privacy1">
                    <h3>Terms of Use</h3>
                    <div class="banner-bottom-grid1 privacy2-grid">
                        <div class="privacy2-grid1">
                            <h4>{{$data['setting']->name}}</h4>

                            <p>
                                {{$data['setting']->desc}}
                            </p>
                            @foreach($data['policy'] as $i=>$policy)
                            <div class="privacy2-grid1-sub">
                                 {{$i+1}}.<h5>{!! $policy->term !!}</h5>
                                <p>
                                    {!! $policy->condition !!}
                                </p>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <!-- //privacy -->
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
