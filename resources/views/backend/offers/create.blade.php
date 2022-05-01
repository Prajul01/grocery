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
                <form method="post" action="{{route('offer.store')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="col-md-9">

                        <div class="form-group">
                            <label><strong>Description</strong></label>
                            <textarea class="ckeditor form-control" name="desc_long"></textarea>
                        </div>
                        <div class="form-group">
                            <label><strong>Short-Description</strong></label>
                            <textarea placeholder="hello"  class="ckeditor form-control" name="desc_short" ></textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file"  name="image_file" id="imagefile" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="expire_date">Expirey date</label>
                            <input type="date"  name="expire_date" id="expire_date" class="form-control" min="<?php echo date("Y-m-d");?>">
                        </div>
                        <div class="form-group">
                            <input type="radio" id="active" name="status" value="1">
                            <label for="active">Active</label><br>
                            <input type="radio" id="de-active" name="status" value="0">
                            <label for="de-active">De-active</label><br>
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
