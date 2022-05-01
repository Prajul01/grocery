@extends('frontend.layout.frontend')
@section('ribbon')

    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">Home</a><span>|</span>
                </li>
                <li>Events</li>
            </ul>
        </div>
    </div>

@endsection
@section('slider')
    <div class="w3l_banner_nav_right">
        <!-- events -->
        <div class="events">
            <h3>Events</h3>
            <div class="w3agile_event_grids">
                @foreach($data['event'] as $event)
                <div class="col-md-6 w3agile_event_grid">
                    <div class="col-md-3 w3agile_event_grid_left">
                        <i class="fa fa-bullhorn" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-9 w3agile_event_grid_right">
                        <h4>{{$event->title}}</h4>
                        <p>
                            {!! Str::limit($event->desc,50) !!}
                        </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>

            <div class="events-bottom">


                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //events -->
    </div>

@endsection
