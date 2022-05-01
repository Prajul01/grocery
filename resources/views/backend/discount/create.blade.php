@extends('backend.layout.backend')

@section('content')
        <div class="col-md-9">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Discount</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{route('discount.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-9">
                    <div class="form-group" >
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label><strong>Description</strong></label>
                        <textarea class="ckeditor form-control" name="desc"></textarea>
                    </div>
                    <div class="form-group" >
                        <label for="discount_percent">Discount-Percent</label>
                        <input type="text" class="form-control" id="discount_percent" name="discount_percent" placeholder="Enter discount percent">
                    </div>
                    <div>

                        <input type="radio" id="html" name="status" value="1">
                        <label for="active">Active</label>
                        <input type="radio" id="css" name="status" value="0">
                        <label for="active">De-Active</label>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
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
