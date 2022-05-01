@extends('frontend.layout.frontend')
@section('ribbon')

    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">Home</a><span>|</span>
                </li>
                <li>Single Page</li>
            </ul>
        </div>
    </div>

@endsection
@section('slider')

    <div class="w3l_banner_nav_right">
        <div class="w3l_banner_nav_right_banner3">
            <h3>Best Deals For New Products<span class="blink_me"></span></h3>
        </div>

            </div>
@endsection
@section('contents')




    <div class="w3l_banner_nav_right">
        <div class="agileinfo_single">
            <h5>{{$data['product']->title}}</h5>
            <div class="col-md-4 agileinfo_single_left">
                <img id="example" src="{{asset('uploads/images/featureimage/'.$data['product']->feature_image)}}" alt=" " class="img-responsive" />
            </div>
            <div class="col-md-8 agileinfo_single_right">
                <div class="rating1">
                    <form action="{{route('rating.store')}}" method="post">
                        @csrf
                        @if(auth()->user() != NULL)
                        <input type="text" value="{{auth()->user()->id}}" name="u_id" id="u_id" hidden>
                        @endif
                        <input type="text" value="{{$data['product']->id}}" name="p_id" id="p_id" hidden>
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3"checked >
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
                        <button type="submit" value="submit">submit</button>

                    </form>
                </div>
                <div class="w3agile_description">
                    <h4>Description :</h4>
                    <p>{!! $data['product']->desc !!}</p>
                </div>
                <div class="snipcart-item block">
                    <div class="snipcart-thumb agileinfo_single_right_snipcart">
                        <h4>RS{{$data['product']->discountedprice}}<span>RS{{$data['product']->price}}</span></h4>
                    </div>
                    <div class="snipcart-details agileinfo_single_right_details">
                        <form action="{{ route('cart.store',$data['product']->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(auth()->user() != NULL)
                                <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                            @endif
                            <input type="hidden" value="{{$data['product']->id}}" name="p_id">
                            <div style="float:right;">
                                <input  type="number" name="quantity" value="1" min="1" style="width: 40px; margin-right: 10px;">

                                <button class="button" style="float:right;" >Add To Cart</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
            <div class="agileinfo_single">


                <div class="clearfix"> </div>
            </div>






    <div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_popular">
        <div class="container">
            <h3>Popular Brands</h3>
            <div class="w3ls_w3l_banner_nav_right_grid1">
                @foreach( $data['popular']->take(1) as $popular)
                <h6>{{$popular->Categrory->name}}</h6>
                @endforeach
                    @foreach( $data['popular']->take(4) as $popular)
                <div class="col-md-3 w3ls_w3l_banner_left" style="margin-bottom: 10px;">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
{{--                            <div class="agile_top_brand_left_grid_pos">--}}
{{--                                <img src="{{asset('frontend/images/offer.png')}}" alt=" " class="img-responsive" />--}}
{{--                            </div>--}}
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="{{route('single',$popular->slug)}}">
                                                <img src="{{asset('uploads/images/featureimage/'.$popular->feature_image)}}" alt=" " style="height: 200px; width: 200px;" class="img-responsive" /></a>
                                            <p>{{$popular->name}}</p>
                                            <h4>Rs.{{$popular->discountedprice}}<span>Rs.{{$popular->price}}</span></h4>
                                        </div>
                                        <div class="snipcart-details">
                                            <form action="{{ route('cart.store',$popular->id)}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @if(auth()->user() != NULL)
                                                    <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                                                @endif
                                                <input type="hidden" value="{{$popular->id}}" name="p_id">
                                                <div style="float:right;">
                                                    <input  type="number" name="quantity" value="1" min="1" style="width: 40px; margin-right: 10px;">

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
  <div class="w3ls_w3l_banner_nav_right_grid1">
                @foreach( $data['popu']->take(1) as $popular)
                <h6>{{$popular->Categrory->name}}</h6>
                @endforeach
                    @foreach( $data['popu']->take(4) as $popular)
                <div class="col-md-3 w3ls_w3l_banner_left" style="margin-bottom: 10px;">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
{{--                            <div class="agile_top_brand_left_grid_pos">--}}
{{--                                <img src="{{asset('frontend/images/offer.png')}}" alt=" " class="img-responsive" />--}}
{{--                            </div>--}}
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="{{route('single',$popular->slug)}}">
                                                <img src="{{asset('uploads/images/featureimage/'.$popular->feature_image)}}" alt=" " style="height: 200px; width: 200px;" class="img-responsive" /></a>
                                            <p>{{$popular->name}}</p>
                                            <h4>Rs.{{$popular->discountedprice}}<span>Rs.{{$popular->price}}</span></h4>
                                        </div>
                                        <div class="snipcart-details">
                                            <form action="{{ route('cart.store',$popular->id)}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @if(auth()->user() != NULL)
                                                    <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                                                @endif
                                                <input type="hidden" value="{{$popular->id}}" name="p_id">
                                                <div style="float:right;">
                                                    <input  type="number" name="quantity" value="1" min="1" style="width: 40px; margin-right: 10px;">

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
