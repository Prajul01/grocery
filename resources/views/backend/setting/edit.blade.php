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
                <form method="post" action="{{route('setting.update',$data['row']->id)}}" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                   placeholder="Enter name" value="{{$data['row']->name}}">
                        </div>
                        <div class="form-group">
                            <label for="desc">Description</label>
                            <input type="text" class="form-control" id="desc" name="desc"
                                   placeholder="Enter description" value="{{$data['row']->desc}}">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                   placeholder="Enter phone number" value="{{$data['row']->phone}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter email"
                                   value="{{$data['row']->email}}">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address"
                                   placeholder="Enter address" value="{{$data['row']->address}}">
                        </div>
                        <div class="form-group">
                            <label for="image_file">Image</label>
                            <input type="file" name="image_file" id="imag" class="form-control">
                            <lable><strong>Old-Image</strong></lable>
                            <img src="{{asset('uploads/images/setting/'.$data['row']->image)}}" class="image2" alt=""
                                 style="height: 250px; width: 250px;   border: 15px solid white">
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>

                            <input type="text" class="form-control" id="link" name="link" placeholder="Enter link"
                                   value="{{$data['row']->link}}">
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
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
@endsection
