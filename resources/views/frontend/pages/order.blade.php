@extends('frontend.layout.frontend')
@section('ribbon')

    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">Home</a><span>|</span>
                </li>
                <li>Order</li>
            </ul>
        </div>
    </div>

@endsection
@section('slider')
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row w-100">
                <div class="col-lg-12 col-md-12 col-12">
                    <h3 class="display-5 mb-2 text-center">Order List</h3>
                    <p class="mb-5 text-center">




                        <i class="text-info font-weight-bold"></i> products in your oder list</p>
                    <table id="shoppingCart" class="table table-condensed table-responsive">
                        <thead>
                        <tr>

                            <th style="width:40%;color: #0a0e14">Image</th>
                            <th style="width:12%;color: #0a0e14">Product</th>
                            <th style="width:12%;color: #0a0e14">Quantity</th>
                            <th style="width:12%;color: #0a0e14">Price</th>
                            <th style="width:12%;color: #0a0e14">Status</th>
                            <th style="width:12%;color: #0a0e14">Created-At</th>



                        </tr>
                        </thead>
                        <tbody>




                        @foreach($data['order'] as $card)


                            <tr>
                                <td>                                <div class="col-md-3 text-left">
                                    <img
                                        src="{{asset('uploads/images/featureimage/'.$card->Products->feature_image)}}"
                                        alt=" " class="img-responsive"
                                        style="height: 100px; width: 100px; object-fit: cover; object-position: 100% 100%;"/>
                                </div>
                                </td>

                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-md-9 text-left mt-sm-2">
                                            <p>{{Str::ucfirst($card->Products->name)}}</p>

                                        </div>
                                    </div>
                                </td>


                                <td data-th="Quantity">
                                    <input type="number" class="form-control form-control-lg text-center" value="{{$card->quantity}}" readonly>
                                </td>
                                <td data-th="Price"> <p>{{$card->quantity * $card->Products->discountedprice}} = {{$card->quantity}} * {{$card->Products->discountedprice}}</p>
                                </td>
                                <td>
                                    @if($card->status==1)
                                        <p class="text-success">Deliverd</p>
                                @else
                                    <p class="text-danger">Pending</p>
                                @endif</td>
                                <td>
                                    {{$card->created_at}}
                                </td>


                            </tr>




                        @endforeach


                        </tbody>
                        <hr>
                    </table>
                </div>
            </div>
            <div class="row mt-4 d-flex align-items-center">
                <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
                    <a href="catalog.html">
                        <i class="fa fa-arrow-left mr-2"></i> Continue Shopping</a>
                </div>
            </div>
        </div>
    </section>
@endsection
