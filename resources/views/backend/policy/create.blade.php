@extends('backend.layout.backend')

{{--@section('csss')--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">--}}
{{--@endsection--}}

@section('content')
    <div class="col-md-9">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Policy</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <form method="post" action="{{route('policy.store')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="col-md-9">

                        <div class="form-group">
                            <label><strong>Description</strong></label>
                            <textarea class="ckeditor form-control" name="desc"></textarea>
                        </div>
                        <div class="form-group">
                            <label><strong>Term</strong></label>
                            <textarea class="ckeditor form-control" name="term"></textarea>
                        </div>
                        <div class="form-group">
                            <label><strong>Condition</strong></label>
                            <textarea class="ckeditor form-control" name="condition"></textarea>
                        </div>




                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit"  class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.card -->
    </div>
@endsection
@section('jss')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>



@endsection
