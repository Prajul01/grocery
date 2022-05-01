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
        @if(Session::has('success'))
            <p class="alert alert-success">{{Session::get('success')}}</p>
        @endif
        @if(Session::has('error'))
            <p class="alert alert-danger">{{Session::get('danger')}}</p>
    @endif
    <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Services-Edit</h3>
            </div>
            <button class="button" onclick="history.back(-1)">Go-Back</button>
            <div class="card-body">
                <form method="post" action="{{route('service.update',$data['row']->id)}}" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf

                    <div class="col-md-9">
                        <div class="form-group">
                            <label><strong>Title</strong></label>
                            <textarea placeholder="hello"  class="ckeditor form-control" name="title" >{{$data['row']->title}}</textarea>
                        </div>
                        <div class="form-group">
                            <label><strong>Description</strong></label>
                            <textarea placeholder="hello"  class="ckeditor form-control" name="desc" >{{$data['row']->desc}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image_file" id="imagefile" class="form-control">
                            <label for="image">Old-Image</label>
                            <img src="{{asset('uploads/images/services/'.$data['row']->image)}}" class="image2" alt=""
                                 style="height: 250px; width: 250px;   border: 15px solid white">
                        </div>

                        <div class="form-group">
                            <label><strong>Image-Text</strong></label>
                            <textarea placeholder="hello"  class="ckeditor form-control" name="image_text" >{!! $data['row']->image_text !!}</textarea>
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
