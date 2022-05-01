@extends('frontend.layout.frontend')
@section('ribbon')

    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">Home</a><span>|</span>
                </li>
                <li>Payment</li>
            </ul>
        </div>
    </div>

@endsection
@section('slider')
    <div style="display: none;">
    <section class="pt-5 pb-5" >
        <div class="container">
            <div class="row w-100">
                <div class="col-lg-12 col-md-12 col-12">
                    <h3 class="display-5 mb-2 text-center">Shopping Cart</h3>
                    <p class="mb-5 text-center">
                        <?php $quan = 0 ?>



                        <i class="text-info font-weight-bold">{{$data['cart']}}</i> products in your cart</p>
                    <table id="shoppingCart" class="table table-condensed table-responsive">
                        <thead>
                        <tr>

                            <th style="width:60%;color: #0a0e14">Product</th>
                            <th style="width:12% ;color: #0a0e14">Price</th>
                            <th style="width:10% ;color: #0a0e14">Quantity</th>
                            <th style="width:16%;color: #0a0e14">Action</th>

                        </tr>
                        </thead>
                        <tbody>



                        <?php $total = 0?>
                        @foreach($data['cartItems'] as $card)


                            <tr>
                                <td data-th="Product">
                                    <div class="row">

                                        <div class="col-md-3 text-left">
                                            <img
                                                src="{{asset('uploads/images/featureimage/'.$card->Products->feature_image)}}"
                                                alt=" " class="img-responsive"
                                                style="height: 90px; width: 90px; object-fit: cover; object-position: 100% 100%;"/>
                                        </div>
                                        <div class="col-md-9 text-left mt-sm-2">
                                            <p>{{Str::ucfirst($card->Products->name)}}</p>

                                        </div>
                                    </div>
                                </td>

                                <td data-th="Price"> <p>{{$card->quantity * $card->Products->discountedprice}} = {{$card->quantity}} * {{$card->Products->discountedprice}}</p></td>

                                <td data-th="Quantity">
                                    <input type="number" class="form-control form-control-lg text-center" value="{{$card->quantity}}">
                                </td>

                                <td class="actions" data-th="">



                                    <form class="d-inline" action="{{route('cart.remove',$card->id)}}" method="post">
                                        <input type="hidden" name="_method" value="delete"/>
                                        @csrf

                                        <button type="submit" > <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="current--}}
                                            Color" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0
                                                    0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0
                                                    0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8
                                                     5a.5.5 0 0 1
                                                     .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.
                                                     5 0 0 1 1 0z"/>
                                            </svg></button>

                                    </form>

                                </td>
                            </tr>
                            <?php  $total += $card->quantity * $card->Products->discountedprice?>
                            <?php  $quan += $card->quantity ?>


                        @endforeach


                        </tbody>
                        <hr>
                    </table>

                    <div class="float-left text-right">
                        <h1>Total item:{{$quan}}</h1>
                    </div>


                    <div class="float-right text-right">
                        <h4>Subtotal:</h4>
                        <h1>Total: RS{{ $total}}</h1>
                    </div>
                </div>
            </div>
            <div class="row mt-4 d-flex align-items-center">
                <div class="col-sm-6 order-md-2 text-right">
                    <a href="{{route('stripe.index')}}" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">Checkout</a>
                </div>
                <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
                    <a href="catalog.html">
                        <i class="fa fa-arrow-left mr-2"></i> Continue Shopping</a>
                </div>
            </div>
        </div>
    </section>
    </div>
    <div class="w3l_banner_nav_right">
        <!-- payment -->
        <div class="privacy about">
            <h3>Pay<span>ment</span></h3>

            @php
                $stripe_key = 'pk_test_51KskKCCKCZPmbAvmCQGrteuDwY2uiMkBKc6p942KNtkOStWuZzbEzPIwwOzDN2pC9pmCe8fG6sDvT4hebIU0Eql800Kb7TfqMo';
            @endphp
            <div class="container" style="margin-top:10%;margin-bottom:10%">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <form role="form" action="{{ route('stripe.post',auth()->user()->id) }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                                @csrf
                                <div class="card-header">
                                    <label for="card-element">
                                        Enter your credit card information
                                    </label>
                                </div>
                                <div class="card-body">

                                    <div class='col-xs-12 col-md-6 form-group required'>
                                        <label class='control-label'>Name on Card</label>
                                        <input class='form-control' size='4' type='text'>
                                    </div>
                                    <div class='col-xs-12 col-md-6 form-group required'>
                                        <label class='control-label'>Card Number</label>
                                        <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class='col-xs-12 col-md-4 form-group cvc required'>
                                        <label class='control-label'>CVC</label>
                                        <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                    </div>
                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                        <label class='control-label'>Expiration Month</label>
                                        <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                    </div>
                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                        <label class='control-label'>Expiration Year</label>
                                        <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="col-xs-12">
                                        <a href="{{route('cart.clear',auth()->user()->id)}}">
                                            @csrf

                                            <button action=""{{route('cart.clear',auth()->user()->id)}}""  class="btn btn-primary btn-lg btn-block" type="submit">Pay Now RS:-{{ $total}}
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- //payment -->
    </div>
    <div class="clearfix"></div>
@endsection
@section('jss')
<script src="https://js.stripe.com/v3/"></script>
<script>
    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)

    var style = {
        base: {
            color: '#32325d',
            lineHeight: '18px',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };

    const stripe = Stripe('{{ $stripe_key }}', { locale: 'en' }); // Create a Stripe client.
    const elements = stripe.elements(); // Create an instance of Elements.
    const cardElement = elements.create('card', { style: style }); // Create an instance of the card Element.
    const cardButton = document.getElementById('card-button');
    const clientSecret = cardButton.dataset.secret;

    cardElement.mount('#card-element'); // Add an instance of the card Element into the `card-element` <div>.

    // Handle real-time validation errors from the card Element.
    cardElement.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    // Handle form submission.
    var form = document.getElementById('payment-form');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.handleCardPayment(clientSecret, cardElement, {
            payment_method_data: {
                billing_details: { name: cardHolderName.value }
            }
        })
            .then(function(result) {
                console.log(result);
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    console.log(result);
                    form.submit();
                }
            });
    });
</script>
@endsection
@section('csss')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <style type="text/css">
        .panel-title {
            display: inline;
            font-weight: bold;
        }
        .display-table {
            display: table;
        }
        .display-tr {
            display: table-row;
        }
        .display-td {
            display: table-cell;
            vertical-align: middle;
            width: 61%;
        }
    </style>
    @endsection
