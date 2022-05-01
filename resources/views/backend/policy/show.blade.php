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
                <h3 class="card-title">Policy-View</h3>
            </div>
            <button class="button" onclick="history.back(-1)">Go-Back</button>
            <div class="card-body">

                <table class="table-bordered" height="100%" width="100%">
                    <tr>
                        <th>Description</th>
                        <td>
                            {!!  $data['row']->desc!!}
                        </td>
                    </tr>
                    <tr>
                        <th>Term</th>
                        <td>
                            {!!  $data['row']->term!!}
                        </td>
                    </tr>
                    <tr>
                        <th>Condition</th>
                        <td>
                            {!! $data['row']->condition !!}
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
