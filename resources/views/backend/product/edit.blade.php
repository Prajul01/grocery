@extends('backend.layout.backend')

{{--@section('csss')--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">--}}
{{--@endsection--}}

@section('content')
    <div class="col-md-9">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Category</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{route('product.update',$data['row']->id)}}" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                @csrf
                <div class="col-md-9">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"
                               oninput="makeSlug()" value="{{$data['row']->name}}">
                    </div>
                    <div class="form-group">
                        <label for="name">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter name"
                               value="{{$data['row']->slug}}">
                    </div>
                    <div class="form-group">
                        <label><strong>Description</strong></label>
                        <textarea class="ckeditor form-control" name="desc">{!! $data['row']->desc !!}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Enter name"
                               value="{{$data['row']->price}}">
                    </div>
                    <div class="form-group">
                        <label for="price">Discounted-Price</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Enter name"
                               value="{{$data['row']->discountedprice}}">
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label for="category_id">Select Category</label>--}}

{{--                        <select class="form-control formselect required" name="category_id"--}}
{{--                                id="category_id">--}}
{{--                            <option value="0" disabled selected>Select--}}
{{--                                Main Category*</option>--}}
{{--                            @foreach($data['category'] as $categories)--}}
{{--                                <option  value="{{ $categories->id }}">--}}
{{--                                    {{ ucfirst($categories->name) }}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6">--}}
{{--                        <h3 >Sub Category*</h3>--}}
{{--                        <select class="form-control  formselect required" name="sub_category_id" placeholder="Select Sub Category" id="sub_category_id"--}}
{{--                        >--}}
{{--                        </select>--}}
{{--                    </div>--}}
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

    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>



    <script>
        $(document).ready(function () {
            $('#category_id').on('change', function () {
                let id = $(this).val();
                $('#sub_category_id').empty();
                $('#sub_category_id').append(`<option value="0" disabled selected>Processing...</option>`);
                $.ajax({
                    type: 'GET',
                    url: 'GetSubCatAgainstMainCatEdt/' +id,
                    success: function (response) {
                        var response = JSON.parse(response);
                        console.log(response);
                        $('#sub_category_id').empty();
                        $('#sub_category_id').append(`<option value="0" disabled selected>Select Sub Category*</option>`);
                        response.forEach(element => {
                            $('#sub_category_id').append(`<option value="${element['id']}">${element['name']}</option>`);
                        });
                    }
                });
            });
        });
    </script>

    <script>

        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });

        $(document).ready(function () {

            $(".btn-success").click(function () {
                var html = $(".clone").html();
                $(".increment").after(html);
            });

            $("body").on("click", ".btn-danger", function () {
                $(this).parents(".control-group").remove();
            });

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



@endsection
