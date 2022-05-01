@extends('backend.layout.backend')

{{--@section('csss')--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">--}}
{{--@endsection--}}

@section('content')
    <div class="col-md-9">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Category</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
           <div class="card-body">
               <form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-9">
                    <div class="form-group" >
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group" >
                        <label for="desc">Description</label>
                        <input type="text" class="form-control" id="desc" name="desc" placeholder="Enter description">
                    </div>
                    <div class="form-group">
                        <label for="image_file">Image</label>
                        <input type="file" name="image_file" id="imag" class="form-control" >
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
