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
                <h3 class="card-title">Testinominals-Edit</h3>
            </div>
            <button class="button" onclick="history.back(-1)">Go-Back</button>
            <div class="card-body">
                <form method="post" action="{{route('testinominals.update',$data['row']->id)}}" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                    <div class="col-md-9">

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"
                                   value="{{$data['row']->name}}">
                        </div>

                        <div class="form-group">
                            <label for="post">Post</label>
                            <input type="text" class="form-control" id="stakeholders" name="stakeholders"
                                   placeholder="Enter post eg. manager,Supervisor etc" value="{{$data['row']->stakeholders}}">
                        </div>
                        <div class="form-group">
                            <label for="twitter">Message</label>
                            <input type="text" class="form-control" id="message" name="message"
                                   placeholder="Enter link of twitter" value="{{$data['row']->message}}">
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
