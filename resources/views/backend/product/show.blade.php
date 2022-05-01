@extends('backend.layout.backend')

@section('csss')
    <style>

        .button {
            transition-duration: 0.4s;
            width: 20%;
            border: 5px solid white
        }
        .button:hover {
            background-color: #4CAF50; /* Green */
            color: white;
        }

    </style>
@endsection

@section('content')

    <div class="col-md-9">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Product-View</h3>
            </div>
            <button class="button" onclick="history.back(-1)">Go-Back</button>
            <div class="card-body">

                <table class="table-bordered" height="100%" width="100%">

{{--                    <tr>--}}
{{--                        <th>Image</th>--}}
{{--                        <td>--}}
{{--                            <img src="{{asset('uploads/images/offers/'.$data['row']->image)}}" class="image2" alt=""--}}
{{--                                 style="height: 250px; width: 250px;   border: 15px solid white">--}}
{{--                        </td>--}}
{{--                    </tr>--}}
                    <tr>
                        <th>Name</th>
                        <td>
                            {{$data['row']->name}}
                        </td>
                    </tr>
                    <tr>
                        <th>Slug</th>
                        <td>
                            {{$data['row']->slug}}
                        </td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td>
                            {{$data['row']->Categrory->name}}
                        </td>
                    </tr>

                    <tr>
                        <th>Sub-Category</th>
                        <td>
                            {{$data['row']->SubCategrory->name}}
                        </td>
                    </tr>



                    <tr>
                        <th>Description</th>
                        <td>
                            {!! $data['row']->desc !!}

                        </td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>
                            {{$data['row']->price}}
                        </td>
                    </tr>
                    <tr>
                        <th>Discounted-Price</th>
                        <td>
                            {{$data['row']->discountedprice}}
                        </td>
                    </tr>
                    <tr>

                                            <th>Feature-Image</th>
                                            <td>
                                                <img src="{{asset('uploads/images/featureimage/'.$data['row']->feature_image)}}" class="image2" alt=""
                                                     style="height: 250px; width: 250px;   border: 15px solid white">
                                            </td>
                                        </tr>

{{--                    <tr>--}}

{{--                        <th>Image</th>--}}
{{--                        <td>--}}
{{--                            <img src="{{asset('uploads/images/product/'.$data['row']->image)}}" class="image2" alt=""--}}
{{--                                 style="height: 250px; width: 250px;   border: 15px solid white">--}}
{{--                        </td>--}}
{{--                    </tr>--}}


                </table>

            </div>
        </div>
        <!-- /.card -->
    </div>

@endsection
@section('jss')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
@endsection
