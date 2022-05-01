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
                <h3 class="card-title">Setting-Edit</h3>
            </div>
            <button class="button" onclick="history.back(-1)">Go-Back</button>
            <div class="card-body">
                <form method="post" action="{{route('offer.update',$data['row']->id)}}" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf

                    <div class="col-md-9">
                        <div class="form-group">
                            <label><strong>Description</strong></label>
                            <textarea placeholder="hello"  class="ckeditor form-control" name="desc_long" >{{$data['row']->desc_long}}</textarea>
                        </div>
                        <div class="form-group">
                            <label><strong>Short-Description</strong></label>
                            <textarea placeholder="hello"  class="ckeditor form-control" name="desc_short" >{{$data['row']->desc_short}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image_file" id="imagefile" class="form-control">
                            <label for="image">Old-Image</label>
                            <img src="{{asset('uploads/images/offers/'.$data['row']->image)}}" class="image2" alt=""
                                 style="height: 250px; width: 250px;   border: 15px solid white">
                        </div>

                        <div class="form-group">
                            <label for="expire_date">Expirey date</label>
                            <input type="date" name="expire_date" id="expire_date" class="form-control"
                                   min="<?php echo date("Y-m-d");?>" value="{{$data['row']->expire_date}}">
                        </div>


                        <div class="form-group">
                            @if($data['row']->status==1)
                            <input type="radio" id="active" name="status" value="1" checked>
                            <label for="active">Active</label><br>
                            <input type="radio" id="de-active" name="status" value="0">
                            <label for="de-active">De-active</label><br>
                            @else
                                <input type="radio" id="active" name="status" value="1">
                                <label for="active">Active</label><br>
                                <input type="radio" id="de-active" name="status" value="0" checked>
                                <label for="de-active">De-active</label><br>
                            @endif
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
