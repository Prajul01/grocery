@extends('backend.layout.backend')

{{--@section('csss')--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">--}}
{{--@endsection--}}

@section('content')
    <div class="col-md-9">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Setting</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <form method="post" action="{{route('setting.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-9">
                        <div class="form-group" >
                            <label for="name">Name</label>
                            <input type="text" class="form-control"  name="name" placeholder="Enter name">
                        </div>
                        <div class="form-group" >
                            <label for="desc">Description</label>
                            <input type="text" class="form-control" id="desc" name="desc" placeholder="Enterdesc">
                        </div>
                        <div class="form-group" >
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number">
                        </div>
                        <div class="form-group" >
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                        </div>
                        <div class="form-group" >
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
                        </div>
                        <div class="form-group">
                            <label for="image_file">Image</label>
                            <input type="file" name="image_file" id="imag" class="form-control" >
                        </div>
                        <div class="form-group" >
                            <label for="link">Link</label>
                            <input type="text" class="form-control" id="link" name="link" placeholder="Enter link">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
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
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
@endsection
