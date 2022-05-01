@extends('backend.layout.backend')

@section('csss')

@endsection

@section('content')
    <div class="col-md-9">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Product</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <form method="post" action="{{route('service.store')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="col-md-9">
                        <div class="form-group">
                            <label><strong>Title</strong></label>
                            <textarea placeholder="hello"  class="ckeditor form-control" name="title" ></textarea>
                        </div>
                        <div class="form-group">
                            <label><strong>Description</strong></label>
                            <textarea class="ckeditor form-control" name="desc"></textarea>
                        </div>


                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file"  name="image_file" id="imagefile" class="form-control">
                        </div>


                        <div class="form-group">
                            <label for="image">Image-Text</label>
                            <input   name="image-text"  class="form-control">
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
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
@endsection
