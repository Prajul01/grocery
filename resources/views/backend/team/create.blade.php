@extends('backend.layout.backend')

{{--@section('csss')--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">--}}
{{--@endsection--}}

@section('content')
    <div class="col-md-9">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Team</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <form method="post" action="{{route('team.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-9">
                        <div class="form-group" >
                            <label for="post">Post</label>
                            <input type="text" class="form-control" id="post" name="post" placeholder="Enter post eg. manager,Supervisor etc">
                        </div>
                        <div class="form-group" >
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                        </div>
                        <div class="form-group" >
                            <label for="twitter">Twitter</label>
                            <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Enter link of twitter">
                        </div>
                        <div class="form-group" >
                            <label for="fb">Facebook</label>
                            <input type="text" class="form-control" id="fb" name="fb" placeholder="Enter link of facebook">
                        </div>
                        <div class="form-group" >
                            <label for="gmail">Gmail</label>
                            <input type="text" class="form-control" id="gmail" name="gmail" placeholder="Enter link of gmail">
                        </div>
                        <div class="form-group">
                            <label for="image_file">Image</label>
                            <input type="file" name="image_file" id="image_file" class="form-control" >
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
