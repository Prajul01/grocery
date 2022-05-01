@extends('backend.layout.backend')

@section('csss')
    <style>

        .button {
            transition-duration: 0.4s;
            width: 20%;
            border: 5px solid white
        }

        .button:hover {
            background-color: #4CAF50; /* Green */
            color: white;
        }

    </style>
@endsection

@section('content')
    <div class="col-md-9">

        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Setting-Edit</h3>
            </div>
            <button class="button" onclick="history.back(-1)">Go-Back</button>
            <div class="card-body">
                <form method="post" action="{{route('aboutus.update',$data['row']->id)}}" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="phone">Short-Description</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                   placeholder="Enter phone number" value="{{$data['row']->shortdesc}}">
                        </div>
                        <div class="form-group">
                            <label><strong>Description</strong></label>
                            <textarea class="ckeditor form-control" name="desc">

                                {!! $data['row']->desc !!}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="image_file">Image</label>
                            <input type="file" name="image_file" id="imag" class="form-control">
                            <lable><strong>Old-Image</strong></lable>
                            <img src="{{asset('uploads/images/aboutus/'.$data['row']->image)}}" class="image2" alt=""
                                 style="height: 250px; width: 250px;   border: 15px solid white">
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.card -->
    </div>
@endsection
@section('jss')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
@endsection
