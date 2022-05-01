@extends('backend.layout.backend')
@section('csss')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('backend/pluginsplugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/pluginsplugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/pluginsplugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
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
                    <th>Email</th>
                    <th>Status</th>



                </tr>
                </thead>
                <tbody>
                @foreach($data['user'] as $i=>$setting)
                    <tr>

                        <td> {{$i+1}}</td>
                        <td>{{$setting->name}}</td>
                        <td>{{$setting->email}}</td>
                        <td>
                            <input data-id="{{$setting->id}}" class="toggle-class" type="checkbox" data-onstyle="success"
                                   data-offstyle="danger" data-toggle="toggle" data-on="Admin" data-off="User"
                                {{ $setting->is_admin ? 'checked' : '' }}>

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
    var is_admin = $(this).prop('checked') == true ? 1 : 0;
    var u_id = $(this).data('id');

    $.ajax({
    type: "GET",
    dataType: "json",
    url: '/changeStatususer',
    data: {'is_admin': is_admin, 'id': u_id},
    success: function(data){
    console.log(data.success)
    }
    });
    })
    })
    </script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@endsection
