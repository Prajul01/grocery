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
                <h3 class="card-title">Team-View</h3>
            </div>
            <button class="button" onclick="history.back(-1)">Go-Back</button>
            <div class="card-body">

                <table class="table-bordered" height="100%" width="100%">

                    <tr>
                        <th>Name</th>
                        <td>{{$data['row']->name}}</td>
                    </tr>

                    <tr>
                        <th>Post</th>
                        <td>{!! $data['row']->post  !!} </td>
                    </tr>

                    <tr>
                        <th>Facebook link</th>
                        <td>{{$data['row']->fb}} </td>
                    </tr>
                    <tr>
                        <th>Twitter link</th>
                        <td>{{$data['row']->twitter}} </td>
                    </tr>
                    <tr>
                        <th>Gmail link</th>
                        <td>{{$data['row']->gmail}} </td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td>
                            <img src="{{asset('uploads/images/team/'.$data['row']->image )}}"style="height: 200px; width: 200px; border: 15px solid white"> </td>
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
