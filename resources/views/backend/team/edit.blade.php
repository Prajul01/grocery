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
                <h3 class="card-title">Team-Edit</h3>
            </div>
            <button class="button" onclick="history.back(-1)">Go-Back</button>
            <div class="card-body">
                <form method="post" action="{{route('team.update',$data['row']->id)}}" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="post">Post</label>
                            <input type="text" class="form-control" id="post" name="post"
                                   placeholder="Enter post eg. manager,Supervisor etc" value="{{$data['row']->post}}">
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"
                                   value="{{$data['row']->name}}">
                        </div>
                        <div class="form-group">
                            <label for="twitter">Twitter</label>
                            <input type="text" class="form-control" id="twitter" name="twitter"
                                   placeholder="Enter link of twitter" value="{{$data['row']->twitter}}">
                        </div>
                        <div class="form-group">
                            <label for="fb">Facebook</label>
                            <input type="text" class="form-control" id="fb" name="fb"
                                   placeholder="Enter link of facebook" value="{{$data['row']->fb}}">
                        </div>
                        <div class="form-group">
                            <label for="gmail">Gmail</label>
                            <input type="text" class="form-control" id="gmail" name="gmail"
                                   placeholder="Enter link of gmail" value="{{$data['row']->gmail}}">
                        </div>
                        <div class="form-group">

                            <label for="image_file">Image</label>
                            <input type="file" name="image_file" id="image_file" class="form-control">
                            <label for="image_file">Old Image</label>
                            <img src="{{asset('uploads/images/team/'.$data['row']->image)}}" class="image2" alt=""
                                 style="height: 200px; width: 200px; border: 15px solid white"> <br>

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
