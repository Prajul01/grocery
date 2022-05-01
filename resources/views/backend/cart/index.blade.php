@extends('frontend.layout.frontend')
@section('ribbon')

    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">Home</a><span>|</span>
                </li>
                <li>Cart</li>
            </ul>
        </div>
    </div>

@endsection

@section('slider')


    <!-- container -->
    <section class="pt-5 pb-5">
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

                                    <input class="form-control" type="number" value="{{$card->quantity}}" min="1" readonly>

                                </td>

                                <td class="actions" data-th="">



                                        <form class="d-inline" action="{{route('cart.remove',$card->id)}}" method="post">
                                            <input type="hidden" name="_method" value="delete"/>
                                            @csrf

                                                <button type="submit" > <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="current
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
                            <i class="fa fa-arrow-left mr-2"></i> Continue Shopping
                        </a>
                        <form class="d-inline" action="{{route('cart.clear',auth()->user()->id)}}" method="post">
                            <input type="hidden" name="_method" value="delete"/>
                            @csrf

                            <button type="submit" > <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="current
                                            Color" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0
                                                    0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0
                                                    0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8
                                                     5a.5.5 0 0 1
                                                     .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.
                                                     5 0 0 1 1 0z"/>
                                </svg></button>

                        </form>
                    </div>
                </div>
            </div>
        </section>

@endsection
@section('csss')

    <style>

        body {
            color: black;
        }
        p{
            color: black;

        }
        th{
            color: black;
        }

    </style>

@endsection
@section('jss')
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
    <script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('backend/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('backend/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <script>
        function myFunction() {
            document.getElementById("myNumber").stepUp();
        }
    </script>
@endsection


