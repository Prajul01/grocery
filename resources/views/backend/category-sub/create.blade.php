@extends('backend.layout.backend')

{{--@section('csss')--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">--}}
{{--@endsection--}}

@section('content')
    <div class="col-md-9">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Sub-Category</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body" >
                <form method="post" action="{{route('subcategory.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-9">
                    <div class="form-group" >
                        <label for="name"   >Name</label>
                        <input  class="form-control" type="text"  id="name" name="name" placeholder="Enter name" oninput="makeSlug()">
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text"  name="slug" id="slug" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label><strong>Description</strong></label>
                        <textarea class="ckeditor form-control" name="desc"></textarea>
                    </div>
                    <div class="form-group">
                    <label for="cars">Category-Name</label>

                    <select name="category_id" id="category_id"  class="form-control">
                        <option >Category</option>
                        @foreach($data['category'] as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach

                    </select>
                    </div>
                    <div class="form-group">
                        <label for="image_file">Image</label>
                        <input type="file" name="image_file" id="imag" class="form-control" >
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
