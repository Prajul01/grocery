@extends('backend.layout.backend')
@section('csss')
    <link rel="stylesheet" href="{{asset('backend/pluginsplugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/pluginsplugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/pluginsplugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
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
@endsection

@section('content')
    <div class="card">
{{--        @if(Session::has('success'))--}}
{{--            <p class="alert alert-success">{{Session::get('success')}}</p>--}}
{{--        @endif--}}
{{--        @if(Session::has('error')){--}}
{{--        <p class="alert alert-danger">{{Session::get('error')}}</p>--}}
{{--        }@endif--}}
    <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Short-Description</th>
                    <th>Image</th>

                    <th>Status</th>
                    <th>Expires-On</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $data['rows'] as $i=>$offer)
                    <tr>
                        <td>{{$i+1}}</td>
                        <td>

                            <img src="{{asset('uploads/images/offers/'.$offer->image)}}" class="card-img-top" alt=""
                                 style="height: 150px; width: 150px; border: 0px solid white">
                        </td>
                        <td>{!! $offer->desc_long !!}</td>
                        <td>{!! $offer->desc_short !!}</td>
                        <td></td>


                        <td>
                           @if($offer->status==1)
                               <p class="text-success">Active</p>
                            @else
                            <p class="text-danger">Deactive</p>
                            @endif
                        </td>
                        <td>{{$offer->expire_date}}</td>

                        <td>
                            <a href="{{route('offer.show',$offer->id)}}" class="btn btn-sm btn-primary">
                                <i class="fa fa-eye"></i>

                            </a>
                            <a href="{{route('offer.edit',$offer->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-pencil-alt"></i></a>
                            <form class="d-inline" action="{{route('offer.destroy',$offer->id)}}" method="post">
                                <input type="hidden" name="_method" value="delete"/>
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger "><i class="fa fa-trash"></i></button>

                            </form>


                        </td>


                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>


@endsection
