@extends('backend.layout.backend')
@section('csss')
    <link rel="stylesheet" href="{{asset('backend/pluginsplugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/pluginsplugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/pluginsplugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

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
    <form method="post" action="{{route('subcategory.update',$data['rows']->id)}}" enctype="multipart/form-data">
        <input type="hidden" value="PUT" name="_method">
        @csrf
        <div class="col-md-9">
            <div class="form-group" >
                <label for="name">Name</label>
                <input type="text"  class="form-control" id="name" name="name" placeholder="Enter name" value="{{$data['rows']->name}}" oninput="makeSlug()">
            </div>
            <div class="form-group">
                <label for="name">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter name"
                       value="{{$data['rows']->slug}}">
            </div>
            <div class="form-group">
                <label for="name">Old-Image</label>
                <img src="{{asset('uploads/images/subcategory/'.$data['rows']->image)}}" class="image2" alt="" style="height: 200px; width: 200px; border: 15px solid white" ><br>
                <label for="image_file">Image</label>
                <input type="file" name="image_file" id="imag" class="form-control" >
            </div>

            <label for="cars">Category-Name</label>

            <select name="category_id" id="category_id"  class="form-control">
                <option value="{{$data['rows']->category_id}}" >{{$data['rows']->Category->name}}</option>
                @foreach($data['category'] as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach

            </select>

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
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });

        function makeSlug() {
            var name = document.getElementById('name').value;
            var slug = document.getElementById('slug');
            slug.value = string_to_slug(name);
        }
        function string_to_slug(str) {
            str = str.replace(/^\s+|\s+$/g, ''); // trim
            str = str.toLowerCase();

            // remove accents, swap ñ for n, etc
            var from = "ãàáäâẽèéëêìíïîõòóöôùúüûñç·/_,:;";
            var to   = "aaaaaeeeeeiiiiooooouuuunc------";
            for (var i = 0, l = from.length; i < l; i++) {
                str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
            }

            str = str.replace(/\s+/g, '-') // collapse whitespace and replace by -
                .replace(/\?/g, '-')
                .replace(/-+/g, '-'); // collapse dashes

            return str;
        };
    </script>


    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
@endsection
