@extends('backend.layout.backend')
@section('csss')
    <link rel="stylesheet" href="{{asset('backend/pluginsplugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/pluginsplugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/pluginsplugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

@endsection

@section('content')
    <div class="card">

        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>

                    <th>SN</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Slider</th>

                    <th>Action</th>


                </tr>
                </thead>
           <tbody>
           @foreach($data['row'] as $i=>$cat)
    <tr>

        <td>{{$i+1}} </td>
        <td>{{$cat->name}}</td>
        <td> {!! $cat->desc !!}</td>
        <td><img src="{{asset('uploads/images/category/'.$cat->image)}}" class="image2" alt="" style="height: 100px; width: 100px;border: 15px solid white" ></td>
        <td>
            <input data-id="{{$cat->id}}" class="toggle-class" type="checkbox" data-onstyle="success"
                   data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive"
                {{ $cat->slider ? 'checked' : '' }}>
        </td>
        <td>
            <a href="{{route('category.view',$cat->id)}}" class="btn btn-sm btn-primary">
                <i class="fa fa-eye"></i>

            </a>
            <a href="{{route('category.edit',$cat->id)}}" class="btn btn-sm btn-warning">                <i class="fa fa-pencil-alt"></i>
            </a>
{{--            <form class="d-inline" action="{{route('category.destroy',$cat->id)}}" method="post">--}}
{{--                <input type="hidden" name="_method" value="delete"/>--}}
{{--                @csrf--}}
{{--                <button type="submit" class="btn btn-sm btn-danger ">Delete</button>--}}

{{--            </form>--}}


        </td>

        @endforeach
    </tr>


           </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
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
        $(function() {
            $('.toggle-class').change(function() {
                var slider = $(this).prop('checked') == true ? 1 : 0;
                var cat_id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/changeStatus',
                    data: {'slider': slider, 'id': cat_id},
                    success: function(data){
                        console.log(data.success)
                    }
                });
            })
        })
    </script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@endsection
