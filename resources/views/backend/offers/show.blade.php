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
                <h3 class="card-title">Event-View</h3>
            </div>
            <button class="button" onclick="history.back(-1)">Go-Back</button>
            <div class="card-body">

                <table class="table-bordered" height="100%" width="100%">

                    <tr>
                        <th>Image</th>
                        <td>
                            <img src="{{asset('uploads/images/offers/'.$data['row']->image)}}" class="image2" alt=""
                                 style="height: 250px; width: 250px;   border: 15px solid white">
                        </td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>
                            {!!$data['row']->desc_long!!}
                        </td>
                    </tr>
                    <tr>
                        <th>short-Description</th>
                        <td>
                            {!!$data['row']->desc_short!!}
                        </td>
                    </tr>

                    <tr>
                        <th>Status</th>
                        <td>
                        @if($data['row']->status==1)
                            <p class="text-success">Active</p>
                            @else
                            <p class="text-danger">Deactive</p>
                            @endif
                        </td>
                    </tr>



                    <tr>
                        <th>Expires-On</th>
                        <td>
                           {{$data['row']->expire_date}}

                        </td>
                    </tr>

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
